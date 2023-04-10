<?php

namespace App\Http\Livewire\Client\Checkout;

use App\Mail\OrderMail;
use Illuminate\Support\Str;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderBook;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;

class IndexPage extends Component
{
    public $cartBooks, $count, $total;
    public $full_name, $phone, $address, $email;

    public function validation()
    {
        $this->validate();
    }

    protected $rules = [
        'full_name' => 'required',
        'phone' => ['required', 'numeric', 'regex:/^(0?)(3[2-9]|5[6|8|9]|7[0|6-9]|8[0-6|8|9]|9[0-4|6-9])[0-9]{7}$/'],
        'address' => 'required',
        'email' => 'email|required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount()
    {

        $cartBooks = Cart::where('user_id', Auth::user()->id)->get();
        $count = Cart::where('user_id', Auth::user()->id)->count();
        $this->cartBooks = $cartBooks;
        $this->count = $count;

        foreach ($cartBooks as $book) {
            $this->total += $book->book->selling_price * $book->quantity;
        }
    }





    public function placeOrder()
    {

        $validatedData = $this->validate();

        $order = Order::create([
            'user_id' => Auth::user()->id,
            'full_name' => $validatedData['full_name'],
            'phone' => $validatedData['phone'],
            'email' => $validatedData['email'],
            'address' => $validatedData['address'],
            'tracking_number' => Str::upper('ORG' . Str::random(15)),
            'total' => $this->total,
            'status' => 'pending',
        ]);

        foreach ($this->cartBooks as $book) {
            OrderBook::create([
                'order_id' => $order->id,
                'book_id' => $book->book->id,
                'quantity' => $book->quantity,
                'purchase_price' => $book->book->selling_price,
            ]);
        }

        Mail::to($order->email)->send(new OrderMail());
        Cart::where('user_id', Auth::user()->id)->delete();
        return redirect()->route('thankYou');
    }



    public function render()
    {
        return view('livewire.client.checkout.index-page')
            ->extends("client.layouts.app")
            ->section("content");;
    }
}
