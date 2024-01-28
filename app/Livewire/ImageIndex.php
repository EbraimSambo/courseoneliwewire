<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

use App\Models\Image;
class ImageIndex extends Component
{
    use WithFileUploads;

    public $photo;

    public function save(){

        $name = $this->photo->getClientOriginalName();

       $path = $this->photo->storeAs('images', $name, 'public');

       Image::create([
            'name' => $name,
            'path' => $path
       ]);

    }

    public function render()
    {
        return view('livewire.image-index')->layout('layouts.app');
    }
}
