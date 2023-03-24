<?php

namespace App\Http\Livewire\Client\Cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class IndexPage extends Component
{
    public $count, $total, $cartBooks;
    public $quantity;

    protected $listeners = [
        'update' => '$refresh'
    ];

    public function mount()
    {
        if (Auth::user()) {
            $cartBooks = Cart::where('user_id', Auth::user()->id)->get();
            $count = Cart::where('user_id', Auth::user()->id)->count();
            $this->cartBooks = $cartBooks;
            $this->count = $count;

        } else {
            $this->count = 0;
        }
    }

    // public function incQuantity($id)
    // {
    //     $cartProduct = Cart::where('id', $id)
    //         ->where('userId', Auth::user()->id)->firstOrFail();

    //     if ($cartProduct->quantity < 5) {
    //         $cartProduct->increment('quantity');
    //         $this->emit('update');
    //     } else {
    //         session()->flash('warning', 'Số lượng tối đa là 5 trên 1 loại sản phẩm.');
    //     }
    // }

    // public function decQuantity($id)
    // {
    //     $cartProduct = Cart::where('id', $id)
    //         ->where('userId', Auth::user()->id)->firstOrFail();

    //     if ($cartProduct->quantity > 1) {
    //         $cartProduct->decrement('quantity');
    //         $this->emit('update');
    //     } else {
    //         session()->flash('warning', 'Số lượng tối thiểu là 1 trên 1 loại sản phẩm.');
    //     }
    // }

    // public function deleteCartProduct($id)
    // {
    //     $cartProduct = Cart::where('id', $id)
    //         ->where('userId', Auth::user()->id)->firstOrFail();
    //     $cartProduct->delete();
    //     $this->emit('update');
    // }
    public function render()
    {
        return view('livewire.client.cart.index-page')
        ->extends('client.layouts.app')
        ->section('content');
    }
}
