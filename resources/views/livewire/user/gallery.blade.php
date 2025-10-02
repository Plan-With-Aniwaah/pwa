<div>
    <!-- Gallery -->
    <div class="min-h-screen w-full bg-gradient-to-br from-indigo-100 via-purple-50 to-pink-100">
        <div class="container mx-auto py-16 px-4">
            <div class="text-center mb-16 animate-fade-in-down">
                <div class="inline-block relative">
                    <h1 class="text-2xl md:text-7xl font-black mb-4 bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-600 bg-clip-text text-transparent tracking-tight">
                        Gallery
                    </h1>
                    <!-- Decorative underline -->
                    <div class="absolute -bottom-2 left-1/2 transform -translate-x-1/2 w-32 h-1.5 bg-gradient-to-r from-indigo-500 via-purple-500 to-pink-500 rounded-full animate-pulse-slow"></div>
                    <!-- Decorative dots -->
                    <div class="absolute -top-4 -left-6 w-3 h-3 bg-purple-400 rounded-full animate-bounce-slow"></div>
                    <div class="absolute -top-2 -right-8 w-2 h-2 bg-pink-400 rounded-full animate-bounce-slower"></div>
                </div>
                <p class="text-gray-600 text-lg mt-6 font-medium">Explore our beautiful collection of moments</p>
                <!-- Decorative line -->
                <div class="flex items-center justify-center mt-4 space-x-2">
                    <div class="w-12 h-0.5 bg-gradient-to-r from-transparent to-purple-300"></div>
                    <div class="w-2 h-2 bg-purple-400 rounded-full"></div>
                    <div class="w-12 h-0.5 bg-gradient-to-l from-transparent to-purple-300"></div>
                </div>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($galleries as $gallery)
                    <div class="group bg-white rounded-2xl shadow-lg overflow-hidden transform transition-all duration-500 hover:scale-[1.02] hover:shadow-2xl cursor-pointer animate-fade-in-up"
                         onclick="openModal('{{ Storage::url($gallery->image) }}')">
                        <div class="relative overflow-hidden h-80">
                            <img src="{{ Storage::url($gallery->image) }}" 
                                 class="w-full h-full object-cover transition-all duration-700 group-hover:scale-110 group-hover:rotate-1"
                                 alt="Gallery image">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500">
                                <div class="absolute inset-0 flex items-center justify-center">
                                    <div class="text-center transform translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                                        <svg class="w-16 h-16 text-white mx-auto mb-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                                        </svg>
                                        <p class="text-white text-lg font-semibold">View Full Image</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Corner accent -->
                            <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-purple-500/20 to-transparent transform translate-x-10 -translate-y-10 group-hover:translate-x-0 group-hover:translate-y-0 transition-transform duration-500"></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="imageModal" class="hidden fixed inset-0 z-50 flex items-center justify-center p-4 bg-black/90 backdrop-blur-md" onclick="closeModal()">
        <div class="relative max-w-7xl max-h-[90vh] animate-zoom-in">
            <button onclick="closeModal()" class="absolute -top-16 right-0 text-white hover:text-purple-300 transition-all duration-300 hover:scale-110 hover:rotate-90 group">
                <div class="bg-white/10 backdrop-blur-sm rounded-full p-2">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </div>
            </button>
            <img id="modalImage" src="" class="max-w-full max-h-[90vh] object-contain rounded-2xl shadow-2xl ring-4 ring-white/20" onclick="event.stopPropagation()">
        </div>
    </div>

    <style>
    @keyframes fade-in-down {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fade-in-up {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes zoom-in {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .animate-fade-in-down {
        animation: fade-in-down 0.8s ease-out;
    }

    .animate-fade-in-up {
        animation: fade-in-up 0.6s ease-out backwards;
    }

    .animate-fade-in-up:nth-child(1) { animation-delay: 0.1s; }
    .animate-fade-in-up:nth-child(2) { animation-delay: 0.2s; }
    .animate-fade-in-up:nth-child(3) { animation-delay: 0.3s; }
    .animate-fade-in-up:nth-child(4) { animation-delay: 0.4s; }
    .animate-fade-in-up:nth-child(5) { animation-delay: 0.5s; }
    .animate-fade-in-up:nth-child(6) { animation-delay: 0.6s; }

    .animate-zoom-in {
        animation: zoom-in 0.4s ease-out;
    }

    @keyframes pulse-slow {
        0%, 100% {
            opacity: 1;
        }
        50% {
            opacity: 0.5;
        }
    }

    @keyframes bounce-slow {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-10px);
        }
    }

    @keyframes bounce-slower {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-15px);
        }
    }

    .animate-pulse-slow {
        animation: pulse-slow 3s ease-in-out infinite;
    }

    .animate-bounce-slow {
        animation: bounce-slow 2s ease-in-out infinite;
    }

    .animate-bounce-slower {
        animation: bounce-slower 3s ease-in-out infinite 0.5s;
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 10px;
    }

    ::-webkit-scrollbar-track {
        background: #f1f1f1;
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(to bottom, #6366f1, #a855f7);
        border-radius: 5px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(to bottom, #4f46e5, #9333ea);
    }
    </style>

    <script>
    function openModal(imageSrc) {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        modalImage.src = imageSrc;
        modal.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        const modal = document.getElementById('imageModal');
        modal.classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    // Close modal on Escape key
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeModal();
        }
    });
    </script>
</div>