<?php

namespace App\Livewire\Tasks;


use App\Models\Task;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;

class TaskList extends Component
{
    use WithPagination;

    public function placeholder()
    {
        return view('skeleton');
    }

    #[On('task-created')]
    public function render()
    {
        return view('livewire.tasks.task-list',[
            'tasks' => auth()->user()->tasks()->paginate(4),
            'count' => auth()->user()->tasks()->count(),
        ]);
    }
}
