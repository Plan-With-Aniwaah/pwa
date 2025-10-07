<div class="min-h-screen bg-gradient-to-br from-slate-50 via-blue-50 to-indigo-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-4xl mx-auto">
        <!-- Header Section -->
        <div class="text-center mb-8">
            <h2 class="text-4xl font-extrabold text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 mb-2">
                Add New Product
            </h2>
            <p class="text-gray-600 text-lg">Fill in the details below to add a product to your inventory</p>
        </div>

        <!-- Form Container -->
        <div class="bg-white rounded-2xl shadow-xl border border-gray-100 overflow-hidden">
            <div class="p-8 sm:p-10">
                <form wire:submit.prevent="create" class="space-y-8">

                    <!-- Product Name -->
                    <div class="group">
                        <label for="product_name" class="block text-sm font-semibold text-gray-700 mb-2">
                            Product Name <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="product_name" 
                            wire:model="product_name"
                            class="mt-1 block w-full px-4 py-3 rounded-xl border-2 border-gray-200 shadow-sm 
                                   focus:border-blue-500 focus:ring-4 focus:ring-blue-100 
                                   transition duration-200 ease-in-out
                                   placeholder-gray-400 text-gray-900"
                            placeholder="e.g., Wireless Bluetooth Headphones"
                        >
                        @error('product_name') 
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p> 
                        @enderror
                    </div>

                    <!-- Product Description -->
                    <div class="group">
                        <label for="product_description" class="block text-sm font-semibold text-gray-700 mb-2">
                            Description <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="product_description" 
                            wire:model="product_description"
                            rows="5"
                            class="mt-1 block w-full px-4 py-3 rounded-xl border-2 border-gray-200 shadow-sm 
                                   focus:border-blue-500 focus:ring-4 focus:ring-blue-100 
                                   transition duration-200 ease-in-out
                                   placeholder-gray-400 text-gray-900 resize-none"
                            placeholder="Describe your product in detail..."
                        ></textarea>
                        @error('product_description') 
                            <p class="mt-2 text-sm text-red-600 flex items-center">
                                <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                </svg>
                                {{ $message }}
                            </p> 
                        @enderror
                    </div>

                    <!-- Price and Quantity Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Product Price -->
                        <div class="group">
                            <label for="product_price" class="block text-sm font-semibold text-gray-700 mb-2">
                                Price <span class="text-red-500">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute left-4 top-1/2 -translate-y-1/2 text-gray-500 font-medium">$</span>
                                <input 
                                    type="number" 
                                    step="0.01"
                                    id="product_price" 
                                    wire:model="product_price"
                                    class="mt-1 block w-full pl-8 pr-4 py-3 rounded-xl border-2 border-gray-200 shadow-sm 
                                           focus:border-blue-500 focus:ring-4 focus:ring-blue-100 
                                           transition duration-200 ease-in-out
                                           placeholder-gray-400 text-gray-900"
                                    placeholder="0.00"
                                >
                            </div>
                            @error('product_price') 
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p> 
                            @enderror
                        </div>

                        <!-- Product Quantity -->
                        <div class="group">
                            <label for="product_quantity" class="block text-sm font-semibold text-gray-700 mb-2">
                                Quantity in Stock <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="number" 
                                id="product_quantity" 
                                wire:model="product_quantity"
                                class="mt-1 block w-full px-4 py-3 rounded-xl border-2 border-gray-200 shadow-sm 
                                       focus:border-blue-500 focus:ring-4 focus:ring-blue-100 
                                       transition duration-200 ease-in-out
                                       placeholder-gray-400 text-gray-900"
                                placeholder="0"
                            >
                            @error('product_quantity') 
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p> 
                            @enderror
                        </div>
                    </div>

                    <!-- Category and Tags Row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Product Category -->
                        <div class="group">
                            <label for="product_category" class="block text-sm font-semibold text-gray-700 mb-2">
                                Category <span class="text-red-500">*</span>
                            </label>
                            <select 
                                type="text" 
                                id="product_category" 
                                wire:model="product_category"
                                class="mt-1 block w-full px-4 py-3 rounded-xl border-2 border-gray-200 shadow-sm 
                                       focus:border-blue-500 focus:ring-4 focus:ring-blue-100 
                                       transition duration-200 ease-in-out
                                       placeholder-gray-400 text-gray-900">
                                       <option value="Bridal Accessories">Bridal Accessories</option>
                                       <option value="Bridezmaids keepsakes">Bridezmaids keepsakes</option>
                                        <option value="Grroonsmen keepsake">Grroonsmen keepsake</option>
                                        <option value="Party supplies">Party supplies</option>
                                        <option value="Dowry wrappings">Dowry wrappings"</option>
                        </select>
                             
                            @error('product_category') 
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p> 
                            @enderror
                        </div>

                        <!-- Product Tags -->
                        <div class="group">
                            <label for="product_tags" class="block text-sm font-semibold text-gray-700 mb-2">
                                Tags
                            </label>
                            <input 
                                type="text" 
                                id="product_tags" 
                                wire:model="product_tags"
                                class="mt-1 block w-full px-4 py-3 rounded-xl border-2 border-gray-200 shadow-sm 
                                       focus:border-blue-500 focus:ring-4 focus:ring-blue-100 
                                       transition duration-200 ease-in-out
                                       placeholder-gray-400 text-gray-900"
                                placeholder="wireless, bluetooth, audio"
                            >
                            <p class="mt-1 text-xs text-gray-500">Separate tags with commas</p>
                            @error('product_tags') 
                                <p class="mt-2 text-sm text-red-600 flex items-center">
                                    <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z" clip-rule="evenodd"/>
                                    </svg>
                                    {{ $message }}
                                </p> 
                            @enderror
                        </div>
                    </div>

                    <!-- Media Upload Section -->
                   <!-- Media Upload Section -->
<div class="bg-gradient-to-br from-blue-50 to-indigo-50 rounded-xl p-6 border-2 border-blue-100">
    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
        <svg class="w-5 h-5 mr-2 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
        </svg>
        Product Media
    </h3>

    <!-- Product Images -->
    <div class="mb-6">
      <label class="block text-sm font-medium text-gray-700 mb-2">Product Images</label>
        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-dashed border-gray-300 rounded-xl hover:border-blue-400 transition duration-200 bg-white">
            <div class="space-y-2 text-center">
                <svg class="mx-auto h-10 w-10 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48">
                    <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" 
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <div class="text-sm text-gray-600">
                    <label class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500">
                        <span>Upload images</span>
                        <input 
                            type="file" 
                            wire:model="product_images" 
                            multiple 
                            accept="image/*" 
                            class="sr-only"
                        >
                    </label>
                    <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs text-gray-500">PNG, JPG, GIF — multiple allowed — up to 10MB each</p>
            </div>
        </div>
        @error('product_images.*') 
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p> 
        @enderror

        @if(!empty($product_images))
    <div class="mt-3 grid grid-cols-4 gap-3">
        @foreach($product_images as $img)
            <div class="h-20 w-full overflow-hidden rounded-md border">
                <img src="{{ $img->temporaryUrl() }}" class="h-full w-full object-cover" alt="preview">
            </div>
        @endforeach
    </div>
@endif

    </div>

    <!-- Product Videos -->
    <div>
        <label class="block text-sm font-semibold text-gray-700 mb-2">
            Product Videos <span class="text-gray-500 text-xs">(Optional)</span>
        </label>
        <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-dashed border-gray-300 rounded-xl hover:border-blue-400 transition duration-200 bg-white">
            <div class="space-y-2 text-center">
                <svg class="mx-auto h-10 w-10 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                        d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                </svg>
                <div class="text-sm text-gray-600">
                    <label class="relative cursor-pointer bg-white rounded-md font-medium text-blue-600 hover:text-blue-500">
                        <span>Upload videos</span>
                        <input 
                            type="file" 
                            wire:model="product_videos" 
                            multiple 
                            accept="video/*" 
                            class="sr-only"
                        >
                    </label>
                    <p class="pl-1">or drag and drop</p>
                </div>
                <p class="text-xs text-gray-500">MP4, MOV, AVI — multiple allowed — up to 100MB each</p>
            </div>
        </div>
        @error('product_videos.*') 
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p> 
        @enderror

        @if(!empty($product_videos))
    <div class="mt-3 grid grid-cols-2 gap-3">
        @foreach($product_videos as $vid)
            <div class="h-28 w-full overflow-hidden rounded-md border">
                <video src="{{ $vid->temporaryUrl() }}" class="h-full w-full object-cover" controls></video>
            </div>
        @endforeach
    </div>
@endif
    </div>
</div>
                    <!-- Submit Button -->
                    <div class="pt-4">
                        <button 
                            type="submit"
                            class="w-full bg-gradient-to-r from-blue-600 via-blue-700 to-indigo-700 
                                   hover:from-blue-700 hover:via-blue-800 hover:to-indigo-800 
                                   text-white font-bold py-4 px-6 rounded-xl shadow-lg 
                                   hover:shadow-xl transform hover:-translate-y-0.5 
                                   transition-all duration-200 ease-in-out
                                   focus:outline-none focus:ring-4 focus:ring-blue-300
                                   flex items-center justify-center group"
                        >
                            <svg class="w-5 h-5 mr-2 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            Save Product
                        </button>
                    </div>

                </form>
            </div>
        </div>

        <!-- Helper Text -->
        <div class="mt-6 text-center">
            <p class="text-sm text-gray-500">
                <span class="text-red-500">*</span> Required fields
            </p>
        </div>
    </div>
</div>