<?php

namespace App\Http\Livewire\Client\Home;

use App\Models\Book;
use Livewire\Component;

class IndexPage extends Component
{
    public $search;




    public function render()
    {
        $books = Book::orderBy('created_at')->limit(4)->get();

        return view('livewire.client.home.index-page', [
            'books' => $books
        ])
        ->extends("client.layouts.app")
        ->section("content");
    }
}
