<div class="flex h-full w-full flex-1 flex-col gap-8 rounded-xl p-6 bg-white shadow-md">
    <!-- Upload Form -->
    <div class="w-full max-w-lg mx-auto bg-gray-50 p-6 rounded-xl border border-gray-200 shadow-sm">
        <h2 class="text-xl font-bold text-gray-800 mb-4">Upload an Image</h2>
        <form wire:submit.prevent="create" class="space-y-4">
            <input
                type="file"
                name="image"
                id="image"
                wire:model="image"
                class="block w-full border border-gray-300 rounded-lg p-2 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500"
            >
            <button
                type="submit"
                class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition"
            >
                Upload
            </button>
        </form>
    </div>

    <!-- Image Section -->
    <div class="bg-white">
        <div class="mx-auto max-w-2xl px-4 py-12 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-6">Products</h2>
            <div class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group">
                    @foreach ($galleries as $gallery)

                    <img
                        src="{{ Storage::url($gallery->image) }}"
                        alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                        class="aspect-square w-full rounded-lg bg-gray-200 object-cover group-hover:opacity-75 xl:aspect-7/8"
                    />

                    <button wire:click="delete({{ $gallery->id }})" class="mt-1 text-lg font-medium text-gray-900 bg-red-500 p-2 rounded-2xl">Delete</button>
                    @endforeach

                </a>
            </div>
        </div>
    </div>
</div>
