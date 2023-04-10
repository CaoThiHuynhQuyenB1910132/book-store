<?php

namespace App\Http\Livewire\Client\Contact;

use Livewire\Component;

class IndexPage extends Component
{
    public function render()
    {
        return view('livewire.client.contact.index-page')
        ->extends("client.layouts.app")
        ->section("content");
    }
}
