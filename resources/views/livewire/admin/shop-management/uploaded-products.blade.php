<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Uploaded Products</h2>
<div class="relative">
    <input 
        type="text"
        wire:model.live.debounce.500ms="search"
        placeholder="Search products..."
        class="px-4 py-2 border rounded-lg focus:outline-none focus:ring focus:border-blue-300 pr-10"
    >
    @if($search)
        <button 
            wire:click="clearSearch" 
            type="button"
            class="absolute right-3 top-2 text-gray-400 hover:text-gray-600 text-2xl leading-none"
        >
            &times;
        </button>
    @endif
</div>

    </div>

    @if ($products->isEmpty())
        <div class="text-center py-10 text-gray-500">
            No products uploaded yet.
        </div>
    @else
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($products as $product)
                @php
                    $images = is_array($product->product_images)
                        ? $product->product_images
                        : json_decode($product->product_images, true);
                    $videos = is_array($product->product_videos)
                        ? $product->product_videos
                        : json_decode($product->product_videos, true);
                @endphp

                <div 
                    class="bg-white shadow-md rounded-xl overflow-hidden border border-gray-200 hover:shadow-lg transition"
                    x-data="{ open: false, currentIndex: 0 }"
                >
                    <!-- Product Image -->
                    @if (!empty($images))
                        <img 
                            src="{{ Storage::url($images[0]) }}"
                            alt="{{ $product->product_name }}"
                            class="w-full h-48 object-cover cursor-pointer"
                            @click="open = true; currentIndex = 0"
                        >
                    @else
                        <div class="w-full h-48 flex items-center justify-center bg-gray-100 text-gray-400">
                            No Image
                        </div>
                    @endif

                    <!-- Product Details -->
                    <div class="p-4">
                        <div class="text-sm text-gray-500 mb-3">
                            <strong>Product Name:</strong> 
                            <span>{{ $product->product_name }}</span>
                        </div>

                        <div class="flex justify-between items-center mb-2">
                            <div class="text-sm text-gray-500 mb-3">
                                <strong>Category:</strong> 
                                <span>{{ $product->product_category }}</span>
                            </div>
                            <span class="text-green-600 font-bold">
                                GHC {{ number_format($product->product_price, 2) }}
                            </span>
                        </div>

                        <div class="text-sm text-gray-500 mb-3">
                            <strong>Description:</strong> 
                            <span>{{ $product->product_description }}</span>
                        </div>

                        <div class="text-sm text-gray-500 mb-3">
                            <strong>Tags:</strong> {{ $product->product_tags }}
                        </div>

                        <div class="text-sm text-gray-500 mb-3">
                            <strong>Quantity:</strong> {{ $product->product_quantity }}
                        </div>

                        <!-- Product Actions -->
                        <div class="flex justify-between mt-4">
                            <button
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

                    <!-- Modal -->
                    <div 
                        x-show="open" 
                        class="fixed inset-0 bg-black bg-opacity-80 flex items-center justify-center z-50"
                        x-transition
                    >
                        <div 
                            class="bg-white rounded-lg shadow-2xl max-w-4xl w-full mx-4 relative overflow-hidden"
                            @click.away="open = false"
                        >
                            <!-- Close button -->
                            <button 
                                @click="open = false"
                                class="absolute top-3 right-3 bg-red-600 text-white rounded-full w-8 h-8 flex items-center justify-center"
                            >
                                &times;
                            </button>

                            <!-- Carousel -->
                            <div class="relative w-full h-[500px]" x-data="{ total: {{ count($images ?? []) + count($videos ?? []) }} }">
                                @foreach ($images as $index => $image)
                                    <img 
                                        x-show="currentIndex === {{ $index }}" 
                                        src="{{ Storage::url($image) }}" 
                                        class="absolute inset-0 w-full h-full object-contain bg-black transition-all duration-500"
                                    >
                                @endforeach

                                @php $offset = count($images ?? []); @endphp

                                @foreach ($videos as $index => $video)
                                    <video 
                                        x-show="currentIndex === {{ $offset + $index }}" 
                                        controls
                                        class="absolute inset-0 w-full h-full object-contain bg-black"
                                    >
                                        <source src="{{ Storage::url($video) }}" type="video/mp4">
                                    </video>
                                @endforeach
                            </div>

                    
                            <!-- Thumbnails -->
                            <div class="flex overflow-x-auto gap-2 p-4 bg-gray-50">
                                @foreach ($images as $index => $image)
                                    <img 
                                        src="{{ Storage::url($image) }}" 
                                        class="h-16 w-16 object-cover rounded cursor-pointer border-2"
                                        :class="currentIndex === {{ $index }} ? 'border-blue-500' : 'border-transparent'"
                                        @click="currentIndex = {{ $index }}"
                                    >
                                @endforeach

                                @foreach ($videos as $index => $video)
                                    <video 
                                        class="h-16 w-16 object-cover rounded cursor-pointer border-2"
                                        :class="currentIndex === {{ $offset + $index }} ? 'border-blue-500' : 'border-transparent'"
                                        @click="currentIndex = {{ $offset + $index }}"
                                    >
                                        <source src="{{ Storage::url($video) }}" type="video/mp4">
                                    </video>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
