  <div>
    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <div class="flex h-full w-full flex-1 flex-col gap-4 rounded-xl">
 @if (session()->has('message'))
                        <div
                            class="mb-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-lg shadow-md animate-fade-in">
                            {{ session('message') }}
                        </div>
                    @endif
        <!-- Upload Form -->
    <div class="w-full max-w-lg mx-auto bg-gray-50 p-6 rounded-xl border border-gray-200 shadow-md">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Upload an Image</h2>
        <form wire:submit.prevent="create" class="space-y-4">
            <input
                type="file"
                name="image"
                id="image"
                wire:model="image"
                class="block w-full border border-gray-300 rounded-lg p-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            @error('image') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            <button
                type="submit"
                class="w-full bg-gradient-to-r from-blue-600 to-indigo-600 hover:from-blue-700 hover:to-indigo-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 shadow"
            >
                Upload
            </button>
        </form>
    </div>

    <!-- Image Section -->
    <div class="bg-white">
        <div class="mx-auto max-w-7xl px-4 py-12 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">Gallery</h2>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                @foreach ($galleries as $gallery)
                    <div class="relative group rounded-xl overflow-hidden shadow hover:shadow-xl transition duration-300">
                        <img
                            src="{{ Storage::url($gallery->image) }}"
                            alt="Gallery Image"
                            class="w-full h-64 object-cover transform group-hover:scale-105 transition duration-500"
                        />
                        <button
                                wire:click="delete({{ $gallery->id }})"
                                class=" bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg shadow"
                            >
                                Delete
                            </button>
                    </div>
                       
                    
                @endforeach
            </div>
        </div>
    </div>
</div>
        </div></div></div>