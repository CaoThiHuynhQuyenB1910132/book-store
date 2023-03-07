<?php

namespace App\Http\Livewire\Admin\Book;

use App\Models\Book;
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
        $bookSlug;

    protected $rules = [
        'bookName' => 'required|max:255',
        'bookDesc' => 'required',
        'sellingPrice' => 'required|max:255',
        'originalPrice' => 'required|max:255',
        'publishedAt' => 'required|date',
        'stock' => 'required|in:in-stock,out-stock',
        'img' => 'required|image|max:4096',
        'bookSlug' => 'required|max:255',
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
        $validatedData['selling_price'] = $this->sellingPrice;
        $validatedData['original_price'] = $this->originalPrice;
        $validatedData['published_at'] = $this->publishedAt;
        $validatedData['stock'] = $this->stock;

        $imgUrl = $this->img->store('upload');
        $validatedData['img'] = $imgUrl;

        $validatedData['book_slug'] = $this->bookSlug;


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
        return view('livewire.admin.book.create-page')
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
