<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Category;
use Livewire\Component;

class IndexPage extends Component
{
    public $categories;
    public $isDeleteId;
    protected $listeners = [
        'refresh' => '$refresh'
    ];


    public function mount()
    {
        $categories = Category::orderBy('created_at', 'desc')->get();
        $this->categories = $categories;


    }

    public function deleteCategory($id)
    {
        $category = Category::findOrFail($id);
        $this->isDeleteId = $category->id;
    }

    public function destroyCategory()
    {
        $isDeleteId = $this->isDeleteId;
        $category = Category::findOrFail($isDeleteId);

        if ($category->book->count() > 0) {
            session()->flash('warning', 'You can not delete category !!!');
            $this->dispatchBrowserEvent('hidden-modal');
        } else {
            $category->delete();
            session()->flash('success', 'Delete category successfully.');
            $this->dispatchBrowserEvent('hidden-modal');
            $this->emit('refresh');
        }
            // $category->delete();
            // session()->flash('success', 'Delete category successfully.');
            // $this->dispatchBrowserEvent('hidden-modal');
            // $this->emit('refresh');
    }

    public function render()
    {
        return view('livewire.admin.category.index-page')
        ->extends('admin.layouts.app')
        ->section('content');
    }
}
