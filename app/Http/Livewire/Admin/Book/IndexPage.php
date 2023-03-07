<?php

namespace App\Http\Livewire\Admin\Book;

use App\Models\Book;
use Livewire\Component;

class IndexPage extends Component
{
    public $books;
    public function mount()
    {
        $books = Book::orderBy('created_at', 'desc')->get();
        $this->books = $books;
    }

    public function render()
    {
        return view('livewire.admin.book.index-page')
            ->extends('admin.layouts.app')
            ->section('content');
    }
}
