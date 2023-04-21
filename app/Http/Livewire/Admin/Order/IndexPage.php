<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use Livewire\Component;

class IndexPage extends Component
{
    public $isDeleteId;
    public function deleteOrder($id){
        $order = Order::findOrFail($id);
        $this->isDeleteId = $order->id;
    }

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    public function destroyOrder(){
        $order = Order::findOrFail($this->isDeleteId);

        $order->delete();
            session()->flash('success', 'Delete order successfully.');
            $this->dispatchBrowserEvent('hidden-modal');
            $this->emit('refresh');
    }

    public function render()
    {
        $orders = Order::orderBy('created_at', 'desc')->paginate(10);

        return view('livewire.admin.order.index-page', [
            'orders' => $orders
        ])
        ->extends('admin.layouts.app')
        ->section('content');
    }
}
