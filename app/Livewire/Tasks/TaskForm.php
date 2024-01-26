<?php

namespace App\Livewire\Tasks;

use App\Livewire\Forms\TaskForm as FormsTaskForm;
use Livewire\Component;

use function Livewire\Volt\title;

class TaskForm extends Component
{
    public FormsTaskForm $form;

    public function save() {

        $this->validate();

        $this->form->createTask();

        $this->dispatch('task-created', title: $this->form->title);

        $this->form->reset();
        
    }
    public function render()
    {
        return view('livewire.tasks.task-form');
    }
}
