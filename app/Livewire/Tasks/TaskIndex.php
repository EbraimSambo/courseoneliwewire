<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\Rule;
use Livewire\Component;

class TaskIndex extends Component
{
    #[Rule('required')]
    public $title;

    #[Rule('required')]
    public $description;

    #[Rule('required')]
    public $stutus;

    #[Rule('required')]
    public $priority;

    public function save() {

        $this->validate();

        auth()->user()->tasks()->create($this->only(['title','stutus','description','priority']));

        $this->reset();
        
    }

    public function render()
    {
        return view('livewire.tasks.task-index')->layout('layouts.app');
    }
}
