<?php

namespace App\Livewire\User;

use App\Http\Requests\StoreContact;
use Livewire\Component;

class Contact extends Component
{
    public $name;
    public $contact;
    public $email;
    public $message;
    public $id;

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
        $this->contact = '';
    }

    public function create()
    {
        $this->validate([
            'name'    => 'required|string|max:255',
            'contact' => 'required|numeric',
            'email'   => 'nullable|email',
            'message' => 'required|string|max:1000',
        ]);

        \App\Models\Contact::create([
            'name'    => $this->name,
            'contact' => $this->contact,
            'email'   => $this->email,
            'message' => $this->message,
        ]);

        session()->flash('message', 'Message sent successfully ✅');
        $this->resetForm();
    }

    public function render()
    {
        return view('livewire.user.contact')->layout('components.layouts.app.header');
    }
}
