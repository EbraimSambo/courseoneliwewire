<div class="max-w-7xl mx-auto flex">
    <div class="4/12">

        <form class="mt-4 bg-white p-4 rounded-md" wire:submit.prevent="save"  >
            <div>
                @if ($photo)
                Photo Preview:
                <img src="{{ $photo->temporaryUrl() }}">
            @endif
            </div>
            <div class="mt-3">
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Upload
                    Image</label>
                <input wire:model="photo"
                    class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                    type="file">
                    @error('photo')
                        {{$message}}
                    @enderror
            </div>
            <div class="mt-3">
                <button type="submit">Upload</button>
            </div>
        </form>
    </div>
</div>