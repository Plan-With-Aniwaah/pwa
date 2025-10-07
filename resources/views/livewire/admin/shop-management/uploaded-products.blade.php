<div class="p-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Uploaded Products</h2>

    @if ($products->isEmpty())
        <div class="text-center py-10 text-gray-500">
            No products uploaded yet.
        </div>
    @else
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($products as $product)
                <div 
                    class="bg-white shadow-md rounded-xl overflow-hidden border border-gray-200 hover:shadow-lg transition relative"
                    x-data="{ open: false, showEdit: false, currentIndex: 0 }"
                >
                    <!-- Product Image -->
                    @if ($product->product_images)
                        @php
                            $images = is_array($product->product_images) 
                                ? $product->product_images 
                                : json_decode($product->product_images, true);
                            $videos = is_array($product->product_videos)
                                ? $product->product_videos
                                : json_decode($product->product_videos, true);
                        @endphp

                        <img 
                            src="{{ Storage::url($images[0] ?? '') }}"
                            alt="{{ $product->product_name }}"
                            class="w-full h-48 object-cover cursor-pointer"
                            @click="open = true"
                        >
                    @else
                        <div 
                            class="w-full h-48 flex items-center justify-center bg-gray-100 text-gray-400 cursor-pointer"
                            @click="open = true"
                        >
                            No Image
                        </div>
                    @endif

                    <div class="p-4">
                        <!-- Product Info -->
                        <div class="text-sm text-gray-500 mb-2">
                            <strong>Product Name:</strong> {{ $product->product_name }}
                        </div>

                        <div class="flex justify-between items-center mb-2">
                            <div class="text-sm text-gray-500">
                                <strong>Category:</strong> {{ $product->product_category }}
                            </div>
                            <span class="text-green-600 font-bold">
                                ${{ number_format($product->product_price, 2) }}
                            </span>
                        </div>

                        <div class="text-sm text-gray-500 mb-2">
                            <strong>Description:</strong> {{ $product->product_description }}
                        </div>

                        <div class="text-sm text-gray-500 mb-2">
                            <strong>Tags:</strong> {{ $product->product_tags }}
                        </div>

                        <div class="text-sm text-gray-500 mb-2">
                            <strong>Quantity:</strong> {{ $product->product_quantity }}
                        </div>

                        <!-- Product Actions -->
                        <div class="flex justify-between mt-4">
                            <button
                                @click="open = false; showEdit = true"
                                wire:click="edit({{ $product->id }})"
                                class="px-3 py-1 bg-blue-600 hover:bg-blue-700 text-white text-sm rounded-lg shadow"
                            >
                                Edit
                            </button>

                            <button
                                wire:click="delete({{ $product->id }})"
                                class="px-3 py-1 bg-red-600 hover:bg-red-700 text-white text-sm rounded-lg shadow"
                            >
                                Delete
                            </button>
                        </div>
                    </div>

                    <!-- 🖼 Image & Video Modal -->
                    <div 
                        x-show="open"
                        x-transition
                        class="fixed inset-0  bg-opacity-80 flex items-center justify-center z-50"
                    >
                        <div 
                            class="bg-white rounded-lg shadow-2xl max-w-4xl w-full mx-4 relative overflow-hidden"
                            @click.away="open = false"
                        >
                            {{-- <button 
                                @click="open = false"
                                class="absolute top-3 right-3 bg-red-600 text-white rounded-full w-8 h-8 flex items-center justify-center"
                            >
                                &times;
                            </button> --}}

                            <!-- Carousel -->
                            <div class="relative">
                                <template x-if="{{ json_encode(count($images ?? []) + count($videos ?? [])) }} > 0">
                                    <div>
                                        <template x-for="(item, index) in {{ json_encode(array_merge($images ?? [], $videos ?? [])) }}" :key="index">
                                            <div x-show="currentIndex === index" class="flex justify-center items-center h-[70vh]">
                                                <template x-if="item.endsWith('.mp4')">
                                                    <video controls class="max-h-[65vh] rounded-lg shadow">
                                                        <source :src="'/storage/' + item" type="video/mp4">
                                                    </video>
                                                </template>
                                                <template x-if="!item.endsWith('.mp4')">
                                                    <img :src="'/storage/' + item" class="max-h-[65vh] rounded-lg shadow object-contain">
                                                </template>
                                            </div>
                                        </template>
                                    </div>
                                </template>

                                <!-- Carousel Controls -->
                                <button 
                                    @click="currentIndex = (currentIndex - 1 + {{ count($images ?? []) + count($videos ?? []) }}) % ({{ count($images ?? []) + count($videos ?? []) }})"
                                    class="absolute left-4 top-1/2 -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white rounded-full w-10 h-10 flex items-center justify-center"
                                >
                                    ‹
                                </button>

                                <button 
                                    @click="currentIndex = (currentIndex + 1) % ({{ count($images ?? []) + count($videos ?? []) }})"
                                    class="absolute right-4 top-1/2 -translate-y-1/2 bg-gray-800 bg-opacity-50 text-white rounded-full w-10 h-10 flex items-center justify-center"
                                >
                                    ›
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- ✏️ Edit Modal -->
                    <div 
                        x-show="showEdit"
                        x-transition
                        class="fixed inset-0 bg-opacity-60 flex items-center justify-center z-50"
                    >
                        <div 
                            class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden max-w-2xl w-full mx-4 relative"
                            @click.away="showEdit = false"
                        >
                            <button 
                                @click="showEdit = false"
                                class="absolute top-3 right-3 bg-red-600 text-white rounded-full w-8 h-8 flex items-center justify-center"
                            >
                                &times;
                            </button>

                            <div class="p-6">
                                <h3 class="text-xl font-semibold mb-4 text-gray-700">Edit Product</h3>

                                <!-- Example Edit Form -->
                                <form wire:submit.prevent="update">
                                    <div class="mb-4">
                                        <label class="block text-gray-600 text-sm mb-2">Product Name</label>
                                        <input type="text" wire:model="product_name" class="w-full border rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-200">
                                    </div>

                                    <div class="mb-4">
                                        <label class="block text-gray-600 text-sm mb-2">Price</label>
                                        <input type="number" wire:model="product_price" class="w-full border rounded-lg p-2 focus:outline-none focus:ring focus:ring-blue-200">
                                    </div>

                                    <div class="flex justify-end">
                                        <button 
                                            type="submit"
                                            class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-lg"
                                        >
                                            Save Changes
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    @endif
</div>
