<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm;
use App\Models\Task;
use Livewire\Attributes\Rule;
use Livewire\Component;

class TaskIndex extends Component
{

    public function render()
    {
        return view('livewire.tasks.task-index')->layout('layouts.app');
    }
}
