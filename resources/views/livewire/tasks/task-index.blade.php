
<div class="flex justify-center gap-2 pt-6">
    <form wire:submit="save" class="flex flex-col gap-y-2">

        <div class="flex flex-col gap-y-2">
            <label for="title">Titulo</label>
        <input wire:model="title" type="text" id="title">
            @error('title')
                <div class="text-red-500">
                <span class="text-red-500">{{$message}}</span> 
                </div>
            @enderror        
        </div>
    
        <div class="flex flex-col gap-y-2">
            <label for="description">Descrição</label>
            <textarea wire:model="description"  id="description" cols="30" rows="10"></textarea>    
            @error('description')
                <div class="text-red-500">
                <span class="text-red-500 color">{{$message}}</span> 
                </div>
            @enderror       
        </div>

        <div class="flex flex-col gap-y-2">
            <label for="stutus">Statutus</label>  
            <select  wire:model="stutus" id="stutus">
                <option value="Escolher">ESCOLHER</option>
                @foreach ( \App\Enums\StutusType::cases() as $stutus)
                    <option value="{{$stutus->value}}"> {{ $stutus->name}} </option>
                @endforeach 
            </select>  
                @error('stutus')
                <div class="text-red-500">
                    <span class="text-red-500">{{$message}}</span> 
                </div>
                @enderror   
            
        </div>    

        <div class="flex flex-col">
            <label for="priority">Prioridade</label>
            <select  wire:model="priority" id="priority">
                <option value="Escolher">ESCOLHER</option>
                @foreach ( \App\Enums\PriorityType::cases() as $priority)
                    <option value="{{$priority->value}}"> {{ $priority->name}} </option>
                @endforeach
            </select>
            @error('priority')
                <div class="text-red-500">
                <span class="text-red-500">{{$message}}</span> 
                </div>
            @enderror   
        </div>
    

    
        <div class="mt-3">
            <button type='submit' class="p-2 bg-slate-400" >Salvar</button>      
        </div>
    
    </form>
</div>
