<div class="min-h-screen w-full bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <style>
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-20px); }
        }

        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 20px rgba(59, 130, 246, 0.3); }
            50% { box-shadow: 0 0 40px rgba(59, 130, 246, 0.5); }
        }

        .contact-card {
            transition: all 0.3s ease;
        }

        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .social-link {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.5rem 1rem;
            border-radius: 0.75rem;
            transition: all 0.3s ease;
            background: linear-gradient(135deg, #f3f4f6 0%, #e5e7eb 100%);
            margin: 0.25rem;
        }

        .social-link:hover {
            transform: translateX(5px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .floating-decoration {
            animation: float 6s ease-in-out infinite;
        }

        .form-input:focus {
            transform: scale(1.01);
        }

        .submit-button {
            position: relative;
            overflow: hidden;
        }

        .submit-button::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .submit-button:hover::before {
            width: 300px;
            height: 300px;
        }
    </style>

    <section class="relative overflow-hidden py-20">
        <div class="container mx-auto px-4 lg:px-8">
            <!-- Enhanced Decorative Elements -->
            <div class="absolute inset-0 opacity-30 pointer-events-none">
                <div class="absolute right-0 top-0 h-96 w-96 rounded-full bg-blue-200 blur-3xl floating-decoration"></div>
                <div class="absolute left-0 bottom-0 h-96 w-96 rounded-full bg-purple-200 blur-3xl floating-decoration" style="animation-delay: 2s;"></div>
                <div class="absolute right-1/3 top-1/3 h-64 w-64 rounded-full bg-pink-200 blur-3xl floating-decoration" style="animation-delay: 4s;"></div>
            </div>

            <div class="flex flex-col items-center lg:flex-row lg:justify-between lg:gap-12">
                <!-- Enhanced Content Section -->
                <div class="relative w-full text-center lg:w-1/2 lg:text-left mt-20">
                    <div class="inline-block mb-4 px-4 py-2 bg-gradient-to-r from-blue-500 to-purple-500 text-white rounded-full text-sm font-semibold shadow-lg">
                        ✨ Let's Connect
                    </div>

                    <h1 class="bg-gradient-to-r from-purple-600 via-blue-600 to-pink-600 bg-clip-text text-4xl font-bold tracking-tight text-transparent sm:text-5xl lg:text-6xl mb-6">
                        Get in Touch
                    </h1>

                    <div class="h-1.5 w-24 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 mb-8 mx-auto lg:mx-0 rounded-full"></div>

                    <p class="text-xl text-gray-700 leading-relaxed mb-8 font-medium">
                        Have an event in mind? Let's make it <span class="text-purple-600 font-bold">unforgettable</span>.
                        Whether it's planning, coordination, or finding the perfect souvenirs —
                        we're here to bring your vision to life. ✨
                    </p>

                    <!-- Enhanced Contact Info Cards -->
                    <div class="mt-10 grid grid-cols-1 gap-4">
                        <!-- Location -->
                        <div class="contact-card p-5 bg-white/90 backdrop-blur-md rounded-2xl shadow-md border border-gray-100">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"/>
                                        <circle cx="12" cy="10" r="3"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-blue-700 font-bold text-lg">Location</div>
                                    <div class="text-gray-600 font-medium">Ejisu Krapa, Kumasi - Ghana</div>
                                </div>
                            </div>
                        </div>

                        <!-- Service Times -->
                        <div class="contact-card p-5 bg-white/90 backdrop-blur-md rounded-2xl shadow-md border border-gray-100">
                            <div class="flex items-center space-x-4">
                                <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10"/>
                                        <polyline points="12 6 12 12 16 14"/>
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-purple-700 font-bold text-lg">Service Times</div>
                                    <div class="text-gray-600 font-medium">Saturdays: 9 AM & 1 PM</div>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Methods -->
                        <div class="contact-card p-5 bg-white/90 backdrop-blur-md rounded-2xl shadow-md border border-gray-100">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-green-500 to-green-600 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="text-green-700 font-bold text-lg mb-3">Contact Us</div>
                                    <div class="space-y-2">
                                        <a href="tel:+233547623711" class="social-link text-gray-700 hover:text-blue-600 font-semibold">
                                            📞 0547623711
                                        </a>
                                        <a href="https://wa.me/233547623711" class="social-link text-gray-700 hover:text-green-600 font-semibold">
                                            💬 WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Social Media -->
                        <div class="contact-card p-5 bg-gradient-to-br from-pink-50 to-purple-50 backdrop-blur-md rounded-2xl shadow-md border border-pink-100">
                            <div class="flex items-start space-x-4">
                                <div class="flex-shrink-0 w-14 h-14 bg-gradient-to-br from-pink-500 to-purple-600 rounded-xl flex items-center justify-center shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="white" stroke-width="2.5" stroke-linecap="round"
                                         stroke-linejoin="round">
                                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                                    </svg>
                                </div>
                                <div class="flex-1">
                                    <div class="bg-gradient-to-r from-pink-600 to-purple-600 bg-clip-text text-transparent font-bold text-lg mb-3">Follow Us</div>
                                    <div class="flex flex-wrap gap-2">
                                        <a href="https://www.instagram.com/plan_with_aniwaah?igsh=MThwZ3R0cnB5OGl0" class="social-link text-gray-700 hover:text-pink-600 font-semibold">
                                            📸 Instagram
                                        </a>
                                        <a href="https://www.tiktok.com/@plan_with_aniwaah" class="social-link text-gray-700 hover:text-black font-semibold">
                                            🎵 TikTok
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Enhanced Form Section -->
                <div class="mt-12 w-full lg:mt-0 lg:w-1/2">
                    <div class="max-w-xl mx-auto bg-white rounded-3xl shadow-2xl p-8 border border-gray-100">
                        <div class="mb-8 text-center">
                            <div class="inline-block p-4 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl shadow-lg mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                     fill="none" stroke="white" stroke-width="2" stroke-linecap="round"
                                     stroke-linejoin="round">
                                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                </svg>
                            </div>
                            <h2 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-2">Send us a Message</h2>
                            <p class="text-gray-600 font-medium">We'd love to hear from you! Fill out the form below.</p>
                        </div>

                        <form class="space-y-5" wire:submit.prevent="create">
                            @if (session()->has('message'))
                                <div class="bg-gradient-to-r from-green-50 to-emerald-50 border-2 border-green-400 text-green-700 px-5 py-4 rounded-xl shadow-md font-semibold">
                                    ✅ {{ session('message') }}
                                </div>
                            @endif

                            <!-- Name Field -->
                            <div class="group">
                                <label for="name" class="block text-sm font-bold text-gray-800 mb-2">
                                    Your Name <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/>
                                            <circle cx="12" cy="7" r="4"/>
                                        </svg>
                                    </div>
                                    <input type="text" id="name" name="name" class="form-input w-full pl-12 pr-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-100 outline-none transition-all duration-200 font-medium" placeholder="John Doe" wire:model="name">
                                </div>
                                @error('name')
                                <div class="text-red-600 text-sm font-semibold mt-1 flex items-center gap-1">
                                    ⚠️ {{$message}}
                                </div>
                                @enderror
                            </div>

                            <!-- Email Field -->
                            <div class="group">
                                <label for="email" class="block text-sm font-bold text-gray-800 mb-2">
                                    Email Address
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <rect width="20" height="16" x="2" y="4" rx="2"/>
                                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/>
                                        </svg>
                                    </div>
                                    <input type="email" id="email" name="email" class="form-input w-full pl-12 pr-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-purple-500 focus:ring-4 focus:ring-purple-100 outline-none transition-all duration-200 font-medium" placeholder="john@example.com" wire:model="email">
                                </div>
                                @error('email')
                                <div class="text-red-600 text-sm font-semibold mt-1 flex items-center gap-1">
                                    ⚠️ {{$message}}
                                </div>
                                @enderror
                            </div>

                            <!-- Phone Field -->
                            <div class="group">
                                <label for="phone" class="block text-sm font-bold text-gray-800 mb-2">
                                    Phone Number <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 left-4 flex items-center pointer-events-none text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                                        </svg>
                                    </div>
                                    <input type="number" id="phone" name="phone" class="form-input w-full pl-12 pr-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-green-500 focus:ring-4 focus:ring-green-100 outline-none transition-all duration-200 font-medium" placeholder="0547623711" wire:model="contact">
                                </div>
                                @error('contact')
                                <div class="text-red-600 text-sm font-semibold mt-1 flex items-center gap-1">
                                    ⚠️ {{$message}}
                                </div>
                                @enderror
                            </div>

                            <!-- Message Field -->
                            <div class="group">
                                <label for="message" class="block text-sm font-bold text-gray-800 mb-2">
                                    Your Message <span class="text-red-500">*</span>
                                </label>
                                <div class="relative">
                                    <div class="absolute left-4 top-4 flex items-start pointer-events-none text-gray-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                                        </svg>
                                    </div>
                                    <textarea id="message" name="message" rows="5" class="form-input w-full pl-12 pr-4 py-3.5 rounded-xl border-2 border-gray-200 focus:border-pink-500 focus:ring-4 focus:ring-pink-100 outline-none transition-all duration-200 resize-none font-medium" placeholder="Tell us about your event..." wire:model="message"></textarea>
                                </div>
                                @error('message')
                                <div class="text-red-600 text-sm font-semibold mt-1 flex items-center gap-1">
                                    ⚠️ {{$message}}
                                </div>
                                @enderror
                            </div>

                            <!-- Submit Button -->
                            <div class="pt-4">
                                <button type="submit" class="submit-button w-full bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 hover:from-blue-700 hover:via-purple-700 hover:to-pink-700 text-white font-bold py-4 px-6 rounded-xl transition-all duration-300 transform hover:scale-[1.02] hover:shadow-2xl focus:ring-4 focus:ring-purple-300 flex items-center justify-center space-x-3">
                                    <span class="relative z-10">Send Message</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" class="relative z-10">
                                        <path d="m22 2-7 20-4-9-9-4Z"/>
                                        <path d="M22 2 11 13"/>
                                    </svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
