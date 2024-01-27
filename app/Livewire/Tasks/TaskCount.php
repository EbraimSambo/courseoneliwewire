<?php

namespace App\Livewire\Tasks;

use Livewire\Attributes\Reactive;
use Livewire\Component;

class TaskCount extends Component
{
    #[Reactive]
    public $tasksByStatus;

    public function render()
    {
        return view('livewire.tasks.task-count',[
            //'count' => auth()->user()->tasks()->count(),
        ]);
    }
}
