<div class="">
    <livewire:tasks.task-count :count="$count" />
    <ul>
        @foreach ($tasks as $task)
            <li><a href="">
                <h2> {{$task->title}} </h2>
                {{-- <p>{{$task->description}}</p> --}}
                {{-- <p>{{$task->stutus}}</p>     --}}
            </a></li>
        @endforeach
    </ul>
    <div class="">
        {{$tasks->links()}}
    </div>
</div>
