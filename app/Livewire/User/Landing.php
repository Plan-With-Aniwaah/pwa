<?php

namespace App\Livewire\User;

use Livewire\Component;

class Landing extends Component
{
    public function render()
    {
        return view('livewire.user.landing')->layout('components.layouts.app.header');
    }
}
