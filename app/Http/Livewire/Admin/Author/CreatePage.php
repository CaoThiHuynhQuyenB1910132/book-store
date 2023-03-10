<?php

namespace App\Http\Livewire\Admin\Author;

use App\Models\Author;
use Livewire\Component;
use Illuminate\Support\Str;

class CreatePage extends Component
{

    public $authorName, $birthDay;

    protected $rules = [
        'authorName' => 'required|max:255',
        'birthDay' => 'required|date',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function storeAuthor()
    {
        $validatedData = $this->validate();

        $validatedData['author_name'] = $this->authorName;
        $validatedData['birth_day'] = $this->birthDay;

        Author::create($validatedData);
        $this->reset();
        session()->flash('success', 'Create new author successfully.');
        return redirect()->route('authors');
    }


    public function render()
    {
        return view('livewire.admin.author.create-page')
        ->extends('admin.layouts.app')
            ->section('content');
    }
}
