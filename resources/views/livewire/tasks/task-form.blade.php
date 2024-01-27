<form wire:submit="save" class="flex flex-col gap-y-2">
    @if (session()->has('sucess'))
        <div class="bg-green-500">
            <span class="">
                {{ session('sucess') }}
            </span>
        </div>
        
    @endif
        <div class="flex flex-col gap-y-2">
            <label for="title">Titulo</label>
        <input wire:model="form.title" type="text" id="title">
            @error('form.title')
                <div class="text-red-500">
                <span class="text-red-500">{{$message}}</span> 
                </div>
            @enderror        
        </div>
    
        <div class="flex flex-col gap-y-2">
            <label for="description">Descrição</label>
            <textarea wire:model="form.description"  id="description" cols="30" rows="10"></textarea>    
            @error('form.description')
                <div class="text-red-500">
                <span class="text-red-500 color">{{$message}}</span> 
                </div>
            @enderror       
        </div>

        <div class="flex flex-col gap-y-2">
            <label for="stutus">Statutus</label>  
            <select  wire:model="form.stutus" id="stutus">
                <option value="Escolher">ESCOLHER</option>
                @foreach ( \App\Enums\StutusType::cases() as $stutus)
                    <option value="{{$stutus->value}}"> {{ $stutus->name}} </option>
                @endforeach 
            </select>  
                @error('form.stutus')
                <div class="text-red-500">
                    <span class="text-red-500">{{$message}}</span> 
                </div>
                @enderror   
            
        </div>    

        <div class="flex flex-col">
            <label for="priority">Prioridade</label>
            <select  wire:model="form.priority" id="priority">
                <option value="Escolher">ESCOLHER</option>
                @foreach ( \App\Enums\PriorityType::cases() as $priority)
                    <option value="{{$priority->value}}"> {{ $priority->name}} </option>
                @endforeach
            </select>
            @error('form.priority')
                <div class="text-red-500">
                <span class="text-red-500">{{$message}}</span> 
                </div>
            @enderror   
        </div>
    

    
        <div class="mt-3">
            <button type='submit' class="p-2 bg-slate-400" >Salvar</button>      
            <div wire:loading class="">
                <span class="sr-onl">Processando....</span>
            </div>
        </div>
    </form>