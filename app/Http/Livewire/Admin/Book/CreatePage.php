<?php

namespace App\Http\Livewire\Admin\Book;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreatePage extends Component
{
    use WithFileUploads;
    public $bookName, $bookDesc, $sellingPrice, $originalPrice, $publishedAt,
        $stock,
        $img,
        $bookSlug, $authorId, $categoryId;

    protected $rules = [
        'bookName' => 'required|max:255',
        'bookDesc' => 'required',
        'sellingPrice' => 'required|max:255',
        'originalPrice' => 'required|max:255',
        'publishedAt' => 'required|date',
        'stock' => 'required|in:in-stock,out-stock',
        'img' => 'required|image|max:4096',
        'bookSlug' => 'required|max:255',
        'authorId' => 'required',
        'categoryId' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function storeBook()
    {
        $validatedData = $this->validate();

        $validatedData['book_name'] = $this->bookName;
        $validatedData['description'] = $this->bookDesc;
        $validatedData['original_price'] = str_replace('.', '', $this->originalPrice);
        $validatedData['selling_price'] = str_replace('.', '', $this->sellingPrice);
        $validatedData['published_at'] = $this->publishedAt;
        $validatedData['stock'] = $this->stock;

        $imgUrl = $this->img->store('upload');
        $validatedData['book_img'] = $imgUrl;

        $validatedData['book_slug'] = $this->bookSlug;

        $validatedData['author_id'] = $this->authorId;
        $validatedData['category_id'] = $this->categoryId;


        Book::create($validatedData);
        $this->reset();
        session()->flash('success', 'Create new book successfully.');
        return redirect()->route('books');
    }

    public function generateSlug()
    {
        $this->bookSlug = Str::slug($this->bookName);
    }

    public function render()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();
        $authors = Author::orderBy('created_at', 'DESC')->get();
        return view('livewire.admin.book.create-page',[
            'categories' => $categories,
            'authors' => $authors
        ])
            ->extends('admin.layouts.app')
            ->section('content');
    }

    public function cleanupOldUploads()
    {
        $storage = Storage::disk('local');

        foreach ($storage->allFiles('livewire-tmp') as $filePathname) {
            $yesterdaysStamp = now()->subSeconds(1)->timestamp;
            if ($yesterdaysStamp > $storage->lastModified($filePathname)) {
                $storage->delete($filePathname);
            }
        }
    }
}
