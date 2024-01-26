<form wire:submit="save" class="flex flex-col gap-y-2">

    <div class="flex flex-col gap-y-2">
        <label for="title">Titulo</label>
    <input wire:model="title" type="text" name="title" id="title">        
    </div>

    <div class="flex flex-col gap-y-2">
        <label for="description">Titulo</label>
        <textarea wire:model="description" name="description" id="description" cols="30" rows="10"></textarea>        
    </div>

    <div class="flex flex-col">
        <label for="priority">Prioridade</label>
        <select wire:model="priority" name="stutus" id="stutus">
            @foreach ( \App\Enums\PriorityType::cases() as $priority)
                <option value="{{$priority->value}}"> {{$priority->name}} </option>
            @endforeach      
        </select>        
    </div>

    <div class="flex flex-col gap-y-2">
        <label for="stutus">Statutus</label>
        <select wire:model="status" name="stutus" id="stutus">
            @foreach ( \App\Enums\StutusType::cases() as $stutus)
                <option value="{{$stutus->value}}"> {{$stutus->name}} </option>
            @endforeach      
        </select>      
    </div>

    <div class="mt-3">
        <button  class="p-2 bg-slate-400" >Salvar</button>      
    </div>

</form>