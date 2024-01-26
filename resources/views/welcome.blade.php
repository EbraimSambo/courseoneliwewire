<x-guest-layout>
    @if (Route::has('login'))
        <livewire:auth.navigation />
    @endif
    <div class="">
        <livewire:tasks />
    </div>
</x-guest-layout>