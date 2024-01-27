<?php

namespace App\Livewire\Tasks;


use App\Models\Task;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\Computed;
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

    public function changeStatus($id, $stutus){
        $task = Task::find($id);

        $task->update([
            'stutus'=> $stutus
        ]);
    }

    #[Computed]
    public function tasks(){
        return auth()->user()->tasks()->paginate(4);
    }

    #[On('task-created')]
    public function render()
    {
        return view('livewire.tasks.task-list',[
            'tasksByStatus' => auth()->user()->tasks()->select('stutus', DB::raw('COUNT(*) as count'))
            ->groupBy('stutus')
            ->orderBy('stutus','desc')
            ->get()
        ]);
    }
}

