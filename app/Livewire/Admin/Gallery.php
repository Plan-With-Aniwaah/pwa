<?php

namespace App\Livewire\Admin;

use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithFileUploads;

class Gallery extends Component
{
    use WithFileUploads;

    public $image;

    protected $rules = [
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,webp,svg|max:2048',
    ];

    public function create()
    {
        
        $this->validate();

        $path = $this->image->store('galleries', 'public');

        \App\Models\Gallery::create([
            'image' => $path,
        ]);

        session()->flash('message', 'Image uploaded successfully');
        $this->reset('image');
    }


    public function delete($id)
    {
        $image = \App\Models\Gallery::findOrFail($id);
        $image->delete();
    }

    public function render()
    {
        $galleries = \App\Models\Gallery::all();
        return view('livewire.admin.gallery', compact('galleries'));
    }
}
