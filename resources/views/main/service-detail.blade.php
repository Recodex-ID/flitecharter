<x-layouts.main :seoData="$seoData">
    <!-- Hero Section -->
    <section class="relative h-screen w-full">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ $service->image ? Storage::url($service->image) : 'https://images.unsplash.com/photo-1540962351504-03099e0a754b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80' }}');"></div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-transparent"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8 z-10">
            <div class="max-w-4xl mx-auto">
                <!-- Breadcrumb -->
                <nav class="mb-8">
                    <ol class="flex items-center space-x-2 text-gray-300">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></li>
                        <li><a href="{{ route('service') }}" class="hover:text-white transition-colors">Services</a></li>
                        <li><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></li>
                        <li class="text-yellow-400">{{ $service->title }}</li>
                    </ol>
                </nav>

                <h1 class="font-primary text-4xl md:text-6xl lg:text-7xl font-bold leading-tight text-white mb-6">
                    {{ $service->title }}
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto">
                    {{ $service->description ?? 'Premium aviation service tailored to meet your specific travel requirements with unmatched luxury and convenience.' }}
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('quote') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                        Request Quote for This Service
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="tel:+6281298214649" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold border-2 border-white text-white rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                        <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Call Now
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="font-primary text-4xl font-bold mb-6" style="color: var(--color-emerald);">Service Overview</h2>
                    <div class="prose prose-lg text-gray-600">
                        <p class="mb-6">
                            {{ $service->description ?? 'This premium aviation service is designed to provide you with the highest level of comfort, safety, and convenience. Our experienced team ensures that every aspect of your journey exceeds your expectations.' }}
                        </p>

                        <p class="mb-6">
                            We understand that every client has unique requirements, which is why we offer personalized solutions tailored to your specific needs. From flight planning to ground transportation, we handle every detail to ensure a seamless travel experience.
                        </p>

                        <p>
                            Our commitment to excellence means you can trust us to deliver exceptional service on every flight, with the flexibility and privacy that only private aviation can provide.
                        </p>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ $service->image ? Storage::url($service->image) : 'https://images.unsplash.com/photo-1540962351504-03099e0a754b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80' }}"
                             alt="{{ $service->title }}"
                             class="w-full h-96 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                        <div class="absolute bottom-8 left-8 text-white">
                            <h4 class="font-primary text-2xl font-bold mb-2">{{ $service->title }}</h4>
                            <p class="text-gray-200">Excellence in Aviation Services</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Features -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Service Features</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Discover the comprehensive features and benefits that make this service exceptional.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Safety First -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.25-1.5a4.5 4.5 0 00-9 0v1.032c0 .307-.036.607-.106.893.073.199.163.398.275.588.113.19.249.369.407.525C8.93 14.54 10.426 15 12 15s3.07-.46 4.124-1.462c.158-.156.294-.335.407-.525.112-.19.202-.389.275-.588a4.492 4.492 0 00-.106-.893V9.5z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Safety Assured</h3>
                    <p class="text-gray-600 text-center">Rigorous safety protocols and comprehensive maintenance ensure the highest level of security for every flight.</p>
                </div>

                <!-- 24/7 Support -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">24/7 Support</h3>
                    <p class="text-gray-600 text-center">Round-the-clock support team available to assist you with any requirements or last-minute changes.</p>
                </div>

                <!-- Luxury Experience -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-brown);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Luxury Experience</h3>
                    <p class="text-gray-600 text-center">Premium amenities and personalized service designed to provide maximum comfort and convenience.</p>
                </div>

                <!-- Flexible Scheduling -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Flexible Scheduling</h3>
                    <p class="text-gray-600 text-center">Depart on your schedule with minimal advance notice and direct routing to your preferred destinations.</p>
                </div>

                <!-- Professional Crew -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Professional Crew</h3>
                    <p class="text-gray-600 text-center">Experienced pilots and trained cabin crew dedicated to ensuring your comfort and safety throughout the journey.</p>
                </div>

                <!-- Transparent Pricing -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-brown);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Transparent Pricing</h3>
                    <p class="text-gray-600 text-center">No hidden fees or surprise charges. All costs are clearly itemized and explained in your comprehensive quote.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">How It Works</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Simple, straightforward process to book this service and get you in the air quickly.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center text-2xl font-bold text-white" style="background-color: var(--color-emerald);">
                        1
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Contact Us</h3>
                    <p class="text-gray-600">Reach out via phone, email, or our online form to discuss your service requirements.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center text-2xl font-bold text-white" style="background-color: var(--color-gold);">
                        2
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Customize Service</h3>
                    <p class="text-gray-600">Work with our specialists to tailor the service to your specific needs and preferences.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center text-2xl font-bold text-white" style="background-color: var(--color-brown);">
                        3
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Confirm Booking</h3>
                    <p class="text-gray-600">Review all details, receive your quote, and confirm your booking with a simple approval.</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center text-2xl font-bold text-white" style="background-color: var(--color-emerald);">
                        4
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Enjoy Service</h3>
                    <p class="text-gray-600">Experience premium service delivery with our dedicated team handling every detail.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Related Services -->
    @if($relatedServices->count() > 0)
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Related Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Explore other aviation services that might interest you.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($relatedServices as $relatedService)
                    <div class="group relative h-80 overflow-hidden border cursor-pointer rounded-xl">
                        <!-- Background Image -->
                        <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                             style="background-image: url('{{ $relatedService->image ? Storage::url($relatedService->image) : 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}');">
                        </div>

                        <!-- Overlay -->
                        <div class="absolute inset-0 bg-black/40"></div>
                        <div class="absolute inset-0 bg-gradient-to-r from-black/30 to-transparent"></div>

                        <!-- Content -->
                        <div class="absolute inset-0 flex flex-col justify-end p-6 text-white">
                            <div class="transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                <h3 class="font-primary text-xl font-bold mb-2 drop-shadow-lg">{{ $relatedService->title }}</h3>

                                <!-- Arrow Icon -->
                                <div class="flex items-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                    <svg class="w-5 h-5" style="color: var(--color-gold);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                    </svg>
                                    <span class="text-sm font-medium">View Details</span>
                                </div>
                            </div>
                        </div>

                        <!-- Link -->
                        <a href="{{ route('service.detail', $relatedService) }}" class="absolute inset-0"></a>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('service') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold border-2 rounded-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105" style="border-color: var(--color-emerald); color: var(--color-emerald);">
                    View All Services
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    @endif

    <!-- CTA Section -->
    <section class="py-20 relative">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ $service->image ? Storage::url($service->image) : 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80' }}');"></div>

        <!-- Overlay -->
        <div class="absolute inset-0" style="background-color: var(--color-emerald); opacity: 0.9;"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-transparent"></div>

        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10">
            <h2 class="font-primary text-4xl font-bold text-white mb-6">
                Ready to Experience {{ $service->title }}?
            </h2>
            <p class="text-xl text-gray-200 mb-8">
                Contact our specialists today to learn more about this service and get a personalized quote.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('quote') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                    Get Quote for This Service
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="tel:+6281298214649" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold border-2 border-white text-white rounded-lg hover:bg-white hover:text-[var(--color-emerald)] transition-all duration-300">
                    <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    Call: +62 812 9821 4649
                </a>
            </div>
        </div>
    </section>
</x-layouts.main>
