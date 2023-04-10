<?php

namespace App\Http\Livewire\Client\Shop;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class IndexPage extends Component
{

    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $books = Book::orderBy('created_at', 'desc')->paginate(4);

        return view('livewire.client.shop.index-page', [
            'books' => $books,
        ])
            ->extends('client.layouts.app')
            ->section('content');;
    }
}
