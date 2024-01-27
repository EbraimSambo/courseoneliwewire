<div class="">
    
    @if (true)
        <livewire:tasks.task-count :tasksByStatus="$tasksByStatus" />
    <ul>
        @foreach ($this->tasks as $task)
            <li><a href="">
                <h2> {{$task->title}} </h2>
                {{-- <p>{{$task->description}}</p> --}}
                {{-- <p>{{$task->stutus}}</p>     --}}
            </a></li>

            @foreach (\App\Enums\StutusType::cases() as $case)
                <button @style([ $case->color() => true,
                $case->value === $task->stutus->value ? 'border: 1px solid red':'' ]) 
                 wire:click="changeStatus({{$task->id}}, '{{$case->value}}')" type="button"> 
                    {{ Str::of($case->value)->headline() }} 
                </button>
            @endforeach
        @endforeach
    </ul>
    <div class="">
        {{$this->tasks->links()}}
    </div>
    
    @endif
</div>
