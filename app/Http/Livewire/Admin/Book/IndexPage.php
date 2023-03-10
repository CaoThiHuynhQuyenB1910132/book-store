<?php

namespace App\Http\Livewire\Admin\Book;

use App\Models\Book;
use Livewire\Component;

class IndexPage extends Component
{
    public $books;
    public $isDeleteId;

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public function mount()
    {
        $books = Book::orderBy('created_at', 'desc')->get();
        $this->books = $books;
    }


    public function deleteBook($id)
    {
        $book = Book::findOrFail($id);
        $this->isDeleteId = $book->id;
    }

    public function destroyBook()
    {
        $isDeleteId = $this->isDeleteId;
        $book = Book::findOrFail($isDeleteId);

        $book->delete();
        session()->flash('success', 'Delete book successfully.');
        $this->dispatchBrowserEvent('hidden-modal');
        $this->emit('refresh');
    }


    public function render()
    {
        return view('livewire.admin.book.index-page')
            ->extends('admin.layouts.app')
            ->section('content');
    }
}
