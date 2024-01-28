{{-- <div class="">
    
    @if (true)
        <livewire:tasks.task-count :tasksByStatus="$this->tasksByStatus" />
    <ul>
        @foreach ($this->tasks as $task)
            <li><a href="">
                <h2> {{$task->title}} </h2>
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
</div> --}}
<div class="w-7/12">
    @if ($this->tasksByStatus->count() > 0)
    <livewire:tasks.task-count :tasksByStatus="$this->tasksByStatus" />
    @endif
    @if ($this->tasks->count() > 0)
        <div class="px-6">
            @foreach ($this->tasks as $task)
                <div
                    class="my-4 px-4 py-6 bg-white rounded-lg shadow hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                    <div class="p-4 leading-normal">
                        <div class="flex justify-between mb-4">
                            <h5 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $task->title }}
                            </h5>
                            <span
                                class="px-2 py-1 border border-slate-200 rounded-md flex justify-end">{{ $task->created_at->diffForHumans() }}</span>
                        </div>
                        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $task->description }}</p>
                    </div>
                    <div class="flex justify-between">
                        <div>
                            @foreach (App\Enums\StutusType::cases() as $case)
                                <button type="button"
                                    wire:click="changeStatus({{ $task->id }}, '{{ $case->value }}')"
                                    @class([
                                        'inline-flex items-center px-4 py-2 bg-white border rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 disabled:opacity-25 transition ease-in-out duration-150',
                                        $case->color() => true,
                                    ])
                                    {{ $case->value == $task->stutus->value ? 'disabled' : '' }}>
                                    {{ Str::of($case->value)->headline() }}
                                </button>
                            @endforeach
                        </div>
                        <div>
                            <x-primary-button wire:click="$dispatch('edit-task', {id: {{ $task->id }}})"
                                class="bg-green-500 hover:bg-green-700">Edit</x-primary-button>
                            <x-primary-button wire:click="delete({{ $task->id }})"
                                wire:confirm="Are you sure you want to delete this task"
                                class="bg-red-500 hover:bg-red-700">Delete</x-primary-button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-2 mb-12 p-2">
            {{ $this->tasks->links() }}
        </div>
    @else
        <div class="mt-2 mb-12 p-2">
            <h1 class="text-2xl text-semibold text-indigo-500">No Tasks.</h1>
        </div>
    @endif
</div>