<?php

namespace App\Http\Livewire\Admin\Category;
use Illuminate\Support\Str;
use App\Models\Category;
use Livewire\Component;

class EditPage extends Component
{
    public $categoryName, $categorySlug;

    public $isEditId;
    protected $rules = [
        'categoryName' => 'required|max:255',
        'categorySlug' => 'required|max:255',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id){
        $category = Category::findOrFail($id);
        $this->isEditId = $category->id;
        $this->categoryName = $category->category_name;
        $this->categorySlug = $category->category_slug;
    }

    public function updateCategory()
    {
        $validatedData = $this->validate();
        $category = Category::findOrFail($this->isEditId);
        $validatedData['category_name'] = $this->categoryName;
        $validatedData['category_slug'] = $this->categorySlug;

        $category->update($validatedData);
        $this->reset();
        session()->flash('success', 'Update category successfully.');
        return redirect()->route('categories');
    }

    public function generateSlug()
    {
        $this->categorySlug = Str::slug($this->categoryName);
    }

    public function render()
    {
        return view('livewire.admin.category.edit-page')
        ->extends('admin.layouts.app')
            ->section('content');
    }
}
