<?php

namespace App\Http\Livewire\Client\Checkout;

use Livewire\Component;

class ThankYou extends Component
{
    public function render()
    {
        return view('livewire.client.checkout.thank-you')
            ->extends('client.layouts.app')
            ->section('content');
    }
}
