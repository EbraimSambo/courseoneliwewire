<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Image;
use Livewire\Attributes\Rule;

class ImageIndex extends Component
{
    use WithFileUploads;
    #[Rule('image|max:1024')]
    public $photo;

    public function save(){

        $this->validate();

        $name = $this->photo->getClientOriginalName();

       $path = $this->photo->storeAs('images', $name, 'public');

       Image::create([
            'name' => $name,
            'path' => $path
       ]);

       $this->reset();

    }

    public function render()
    {
        return view('livewire.image-index')->layout('layouts.app');
    }
}
