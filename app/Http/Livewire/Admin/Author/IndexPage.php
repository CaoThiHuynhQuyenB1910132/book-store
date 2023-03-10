<?php

namespace App\Http\Livewire\Admin\Author;

use App\Models\Author;
use Livewire\Component;

class IndexPage extends Component
{
    public $authors;
    public $isDeleteId;

    protected $listeners = [
        'refresh' => '$refresh'
    ];


    public function mount()
    {
        $authors = Author::orderBy('created_at', 'desc')->get();
        $this->authors = $authors;
    }
    public function deleteAuthor($id)
    {
        $author = Author::findOrFail($id);
        $this->isDeleteId = $author->id;
    }

    public function destroyAuthor()
    {
        $isDeleteId = $this->isDeleteId;
        $author = Author::findOrFail($isDeleteId);

        if ($author->book->count() > 0) {
            session()->flash('warning', 'You can not delete author !!!');
            $this->dispatchBrowserEvent('hidden-modal');
        } else {
            $author->delete();
            session()->flash('success', 'Delete author successfully.');
            $this->dispatchBrowserEvent('hidden-modal');
            $this->emit('refresh');
        }
    }
    public function render()
    {
        return view('livewire.admin.author.index-page')
            ->extends('admin.layouts.app')
            ->section('content');
    }
}
