<?php

namespace App\Http\Livewire\Admin\Category;

use Illuminate\Support\Str;
use App\Models\Category;
use Livewire\Component;

class CreatePage extends Component
{
    public $categoryName, $categorySlug;


    protected $rules = [
        'categoryName' => 'required|max:255',
        'categorySlug' => 'required|max:255',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function storeCategory()
    {
        $validatedData = $this->validate();

        $validatedData['category_name'] = $this->categoryName;
        $validatedData['category_slug'] = $this->categorySlug;

        Category::create($validatedData);
        $this->reset();
        session()->flash('success', 'Create new category successfully.');
        return redirect()->route('categories');
    }

    public function generateSlug()
    {
        $this->categorySlug = Str::slug($this->categoryName);
    }

    public function render()
    {
        return view('livewire.admin.category.create-page')
            ->extends('admin.layouts.app')
            ->section('content');
    }
}
