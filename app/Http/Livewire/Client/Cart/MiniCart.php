<?php

namespace App\Http\Livewire\Client\Cart;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MiniCart extends Component
{
    public $count, $total, $cartBooks;

    protected $listeners = [
        'update' => 'checkCount',
    ];

    public function checkCount()
    {
        if (Auth::user()) {
            $cartBooks = Cart::where('user_id', Auth::user()->id)->get();
            $count = Cart::where('user_id', Auth::user()->id)->count();
            $this->cartBooks = $cartBooks;
            return $this->count = $count;
        } else {
            return $this->count = 0;
        }
    }

    public function render()
    {
        $this->count= $this->checkCount();
        return view('livewire.client.cart.mini-cart');
    }
}
