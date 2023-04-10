<?php

namespace App\Http\Livewire\Client\Checkout;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

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

        // $userSelectedAddress = Address::where('id', $this->shippingAddressId)->firstOrFail();
        // $houseNumber = $userSelectedAddress->houseNumber;
        // $ward = $userSelectedAddress->ward->wardName;
        // $district = $userSelectedAddress->district->districtName;
        // $province = $userSelectedAddress->province->provinceName;
        // $shippingAddresses = $houseNumber . ', ' . $ward . ', ' . $district . ', ' . $province;

        // $order = Order::create([
        //     'userId' => Auth::user()->id,
        //     'userName' => $userSelectedAddress->userName,
        //     'userEmail' => $userSelectedAddress->email,
        //     'phoneNumber' => $userSelectedAddress->phoneNumber,
        //     'trackingNumber' => Str::upper('VFXVN' . Str::random(15)),
        //     'shippingAddress' => $shippingAddresses,
        //     'note' => $validatedData['note'],
        //     'status' => 'pending',
        //     'paymentMode' => $validatedData['paymentMode'],
        //     'paymentId' => $this->paymentId,
        //     'total' => $this->total + 35000,
        // ]);

        // foreach ($this->cartProducts as $product) {
        //     OrderProduct::create([
        //         'orderId' => $order->id,
        //         'productId' => $product->product->id,
        //         'quantity' => $product->quantity,
        //         'purchasePrice' => $product->product->sellingPrice,
        //     ]);
        // }

        // Mail::to($order->userEmail)->send(new PlaceOrderEmail());
        // Cart::where('userId', Auth::user()->id)->delete();
        // return redirect()->route('thankYou');
    }



    public function render()
    {
        return view('livewire.client.checkout.index-page')
            ->extends("client.layouts.app")
            ->section("content");;
    }
}
