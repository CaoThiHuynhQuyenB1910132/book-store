<?php

namespace App\Http\Livewire\Admin\Author;

use App\Models\Author;
use Livewire\Component;

class EditPage extends Component
{
    public $author, $authorName, $birthDay;
    public $isEditId;

    protected $rules = [
        'authorName' => 'required|max:255',
        'birthDay' => 'required|date',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function mount($id){
        $author = Author::findOrFail($id);
        $this->isEditId = $author->id;
        $this->authorName = $author->author_name;
        $this->birthDay = $author->birth_day;
    }

    public function updateAuthor()
    {
        $validatedData = $this->validate();
        $author = Author::findOrFail($this->isEditId);
        $validatedData['author_name'] = $this->authorName;
        $validatedData['birth_day'] = $this->birthDay;

        $author->update($validatedData);
        $this->reset();
        session()->flash('success', 'Update author successfully.');
        return redirect()->route('authors');
    }

    public function render()
    {
        return view('livewire.admin.author.edit-page')
        ->extends('admin.layouts.app')
            ->section('content');
    }
}
