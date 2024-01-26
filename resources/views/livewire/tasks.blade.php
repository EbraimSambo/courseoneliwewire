<div>
    <h1>Task</h1>

    <form wire:submit='add'>
        <input type="text" wire:model="task" name="" id="">
        <button wire:click='add'>Adicionar</button>
    </form>
    <ul>
        @foreach ($tasks as $task)
            <li> {{$task}} </li>
        @endforeach
    </ul>
</div>
