<?php

namespace App\Http\Livewire\Client\Book;

use App\Models\Book;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DetailPage extends Component
{
    public $book, $book_id, $book_name, $book_description, $original_price, $selling_price, $book_img, $category, $author;

    public $quantity = 1;

    public function incQuantity()
    {
        if ($this->quantity < 5) {
            $this->quantity++;
        }
    }

    public function decQuantity()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }


    public function addToCart($book_id)
    {
        if (Auth::user()) {
            if (Cart::where('user_id', Auth::user()->id)->where('book_id', $book_id)->exists()) {
                session()->flash('warning', 'Sản phẩm đã có trong giỏ hàng.');
            } else {
                Cart::create([
                    'user_id' => Auth::user()->id,
                    'book_id' => $book_id,
                    'quantity' => $this->quantity,
                ]);
                session()->flash('success', 'Thêm sản phẩm vào giỏ hàng thành công.');
                $this->emit('update');
            }
        } else {
            return redirect()->route('login');
        }
    }

    public function mount($id, $slug)
    {
        $book = Book::where('id', $id)
            ->where('book_slug', $slug)
            ->firstOrFail();

        $this->book = $book;
        $this->book_id = $book->id;
        $this->book_name = $book->book_name;
        $this->book_description = $book->description;

        $this->original_price = $book->original_price;
        $this->selling_price = $book->selling_price;
        $this->book_img = $book->book_img;
        $this->category = $book->category->category_name;
        $this->author = $book->author->author_name;
    }

    public function render()
    {
        return view('livewire.client.book.detail-page')
            ->extends('client.layouts.app')
            ->section('content');
    }
}
