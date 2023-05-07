<?php

namespace App\Http\Livewire\Client\Shop;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;

class IndexPage extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $sortTerm, $searchTerm;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $books = Book::where('stock', 'in-stock')
            ->where('book_name', 'like', $searchTerm)
            ->when($this->sortTerm, function ($query) {
                $query->when($this->sortTerm == 'hightToLow', function ($subQuery) {
                    $subQuery->orderBy('selling_price', 'desc');
                })
                    ->when($this->sortTerm == 'lowToHight', function ($subQuery) {
                    });
            })
            ->paginate(4);

        return view('livewire.client.shop.index-page', [
            'books' => $books,
        ])
            ->extends('client.layouts.app')
            ->section('content');
    }
}
