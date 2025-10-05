<div class="p-6">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Uploaded Products</h2>

    @if ($products->isEmpty())
        <div class="text-center py-10 text-gray-500">
            No products uploaded yet.
        </div>
    @else
        <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($products as $product)
                <div class="bg-white shadow-md rounded-xl overflow-hidden border border-gray-200 hover:shadow-lg transition">
                    <!-- Product Image -->
                    @if ($product->product_images)
                        <img 
                            src="{{ asset($product->product_images) }}" 
                            alt="{{ $product->product_name }}"
                            class="w-full h-48 object-cover"
                        >
                    @else
                        <div class="w-full h-48 flex items-center justify-center bg-gray-100 text-gray-400">
                            No Image
                        </div>
                    @endif

                    <div class="p-4">
                        <!-- Product Info -->
                        <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $product->product_name }}</h3>
                        <p class="text-sm text-gray-600 mb-2">{{ Str::limit($product->product_description, 80) }}</p>

                        <div class="flex justify-between items-center mb-2">
                            <span class="text-sm bg-blue-100 text-blue-700 px-2 py-1 rounded-md">
                                {{ $product->product_category }}
                            </span>
                            <span class="text-green-600 font-bold">
                                ${{ number_format($product->product_price, 2) }}
                            </span>
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
                </div>
            @endforeach
        </div>
    @endif
</div>
