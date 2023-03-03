<?php

namespace App\Http\Livewire\Admin\Dashboard;

use Livewire\Component;

class IndexPage extends Component
{
    public function render()
    {
        return view('livewire.admin.dashboard.index-page')->extends('admin.layouts.app')->section('content');

    }
}
