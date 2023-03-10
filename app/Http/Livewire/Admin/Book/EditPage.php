<?php

namespace App\Http\Livewire\Admin\Book;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPage extends Component
{
    use WithFileUploads;
    public $bookName, $bookDesc, $sellingPrice, $originalPrice, $publishedAt,
        $stock,
        $img, $newImg,
        $bookSlug, $authorId, $categoryId;

    public $isEditId;

    protected $rules = [
        'bookName' => 'required|max:255',
        'bookDesc' => 'required',
        'sellingPrice' => 'required|max:255',
        'originalPrice' => 'required|max:255',
        'publishedAt' => 'required|date',
        'stock' => 'required|in:in-stock,out-stock',
        'newImg' => 'max:4096',
        'bookSlug' => 'required|max:255',
        'authorId' => 'required',
        'categoryId' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id)
    {
        $book = Book::findOrFail($id);
        $this->isEditId = $book->id;
        $this->bookName = $book->book_name;
        $this->bookDesc = $book->description;
        $this->sellingPrice = $book->selling_price;
        $this->originalPrice = $book->original_price;
        $this->publishedAt = $book->published_at;
        $this->stock = $book->stock;
        $this->img = $book->book_img;
        $this->bookSlug = $book->book_slug;
        $this->authorId = $book->author_id;
        $this->categoryId = $book->category_id;
    }

    public function updateBook()
    {
        $validatedData = $this->validate();
        $book = Book::findOrFail($this->isEditId);
        $validatedData['book_name'] = $this->bookName;
        $validatedData['description'] = $this->bookDesc;
        $validatedData['selling_price'] = $this->sellingPrice;
        $validatedData['original_price'] = $this->originalPrice;
        $validatedData['published_at'] = $this->publishedAt;
        $validatedData['stock'] = $this->stock;

        if ($this->newImg !== null) {
            File::delete($this->img);
            $imgUrl = $this->newImg->store('upload');
            $validatedData['book_img'] = $imgUrl;
        } else {
            $validatedData['book_img']= $book->img;
        }

        $validatedData['author_id'] = $this->authorId;
        $validatedData['category_id'] = $this->categoryId;

        $validatedData['book_slug'] = $this->bookSlug;

        $book->update($validatedData);
        $this->reset();
        session()->flash('success', 'Update book successfully.');
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
        return view('livewire.admin.book.edit-page',[
            'categories' => $categories,
            'authors' => $authors
        ])
            ->extends('admin.layouts.app')
            ->section('content');
    }
}
