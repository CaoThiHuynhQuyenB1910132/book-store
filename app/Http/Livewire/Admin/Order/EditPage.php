<?php

namespace App\Http\Livewire\Admin\Order;

use App\Models\Order;
use App\Models\OrderBook;
use Livewire\Component;

class EditPage extends Component
{
    public $order, $orderBooks, $total, $status, $isEditId;

    public function mount($id){
        $orderBooks = OrderBook::where('order_id', $id)->orderBy('created_at', 'desc')->get();
        $this->orderBooks = $orderBooks;
        $order = Order::findOrFail($id);
        $this->isEditId = $order->id;
        $this->order = $order;
        $this->status = $order->status;

        foreach ($orderBooks as $book){
            $this->total += $book->quantity * $book->purchase_price; 
        }
    }

    protected $rules = [
        'status' => 'in:pedding,accepted,in_delivery,success,cancel,refund'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function updateOrder(){        
        $validatedData = $this->validate();
        $order = Order::findOrFail($this->isEditId);
        $order -> update([
            'status' => $validatedData['status'],
        ]);
        $this->reset();
        session()->flash('success', 'Update status successfully.');
        return redirect()->route('orders');
    }

    public function render()
    {
        return view('livewire.admin.order.edit-page')
        ->extends('admin.layouts.app')
        ->section('content');
    }
}
