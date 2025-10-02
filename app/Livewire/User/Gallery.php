<?php

namespace App\Livewire\User;

use Livewire\Component;

class Gallery extends Component
{
    public $image;
    public function render()
    {
        $galleries = \App\Models\Gallery::all();
        return view('livewire.user.gallery', compact('galleries'))->layout('components.layouts.app.header');
    }
}
