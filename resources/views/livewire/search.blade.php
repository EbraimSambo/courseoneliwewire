<div class="relative w-96 max-w-lg px-1 pt-1">
    <input type="text" wire:model.live.throttle.500ms="search" class="block w-full flex-1 py-2 mt-2 outline-none border-none rounded-md bg-slate-100"
    placeholder="Preucurar..." >
    <div class="absolute mt-2 w-full overflow-hidden rounded-md bg-white">
        @foreach ($results as $result)
          <div class="cursor-pointer py-3 px-2 hover:bg-slate-100">
            <p class="text-sm font-medium text-gray-600"> {{$result->title}} </p>
          </div>
            
        @endforeach
    </div>
</div>
