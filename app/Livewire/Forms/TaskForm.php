<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class TaskForm extends Form
{
    #[Rule('required|min:3')]
    public $title;

    #[Rule('required|min:10')]
    public $description;

    #[Rule('required')]
    public $stutus;

    #[Rule('required')]
    public $priority;

    public function createTask(){

        auth()->user()->tasks()->create($this->all());

        // session()->flush('success', __('Criado com Sucesso'));
        request()->session()->flash('sucess', 'Bilhete criado com sucess.');
    }

}
