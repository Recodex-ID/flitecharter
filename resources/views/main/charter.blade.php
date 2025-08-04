<x-layouts.main :seoData="$seoData">
    <!-- Hero Section -->
    <section class="relative h-screen w-full">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1540962351504-03099e0a754b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');"></div>
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-transparent"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8 z-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="font-primary text-4xl md:text-6xl lg:text-7xl font-bold leading-tight text-white mb-6">
                    Aircraft <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Charter</span> Services
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto">
                    Experience the ultimate in luxury aviation with our premium charter services. Fly on your schedule to any destination worldwide.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('quote') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                        Get Instant Quote
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

    <!-- Charter Types Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Charter Solutions</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Customized aviation solutions designed to meet your specific travel requirements and preferences.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Private Charter -->
                <div class="bg-gray-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Private Charter</h3>
                    <p class="text-gray-600 text-center mb-6">Exclusive private flights for individuals and families seeking privacy, comfort, and convenience.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Personalized service
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Flexible scheduling
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Direct routing
                        </li>
                    </ul>
                </div>

                <!-- Corporate Charter -->
                <div class="bg-gray-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Corporate Charter</h3>
                    <p class="text-gray-600 text-center mb-6">Efficient business travel solutions for executives and corporate teams with productivity in mind.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Wi-Fi connectivity
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Meeting facilities
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Multiple destinations
                        </li>
                    </ul>
                </div>

                <!-- Group Charter -->
                <div class="bg-gray-50 rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-brown);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Group Charter</h3>
                    <p class="text-gray-600 text-center mb-6">Perfect for events, conferences, and group travel with customized arrangements for larger parties.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Large capacity aircraft
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Coordinated logistics
                        </li>
                        <li class="flex items-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Special arrangements
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Charter Process Section -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">How Charter Works</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Simple, straightforward process to get you in the air quickly and efficiently.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Step 1 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center text-2xl font-bold text-white" style="background-color: var(--color-emerald);">
                        1
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Request Quote</h3>
                    <p class="text-gray-600">Submit your travel requirements including destinations, dates, and passenger count.</p>
                </div>

                <!-- Step 2 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center text-2xl font-bold text-white" style="background-color: var(--color-gold);">
                        2
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Aircraft Selection</h3>
                    <p class="text-gray-600">We recommend the best aircraft for your journey and provide transparent pricing.</p>
                </div>

                <!-- Step 3 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center text-2xl font-bold text-white" style="background-color: var(--color-brown);">
                        3
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Confirmation</h3>
                    <p class="text-gray-600">Secure your booking with confirmation of all flight details and services.</p>
                </div>

                <!-- Step 4 -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center text-2xl font-bold text-white" style="background-color: var(--color-emerald);">
                        4
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Fly in Comfort</h3>
                    <p class="text-gray-600">Enjoy your premium flight experience with dedicated crew and luxury amenities.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Available Fleet Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Available Aircraft</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Choose from our diverse fleet of meticulously maintained aircraft for your charter needs.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($fleets as $fleet)
                    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="h-64 bg-gradient-to-br from-gray-100 to-gray-200 relative overflow-hidden">
                            @if($fleet->image)
                                <img src="{{ Storage::url($fleet->image) }}"
                                     alt="{{ $fleet->title }}"
                                     class="w-full h-full object-cover hover:scale-105 transition-transform duration-300">
                                
                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-black/20"></div>
                                <div class="absolute inset-0 bg-gradient-to-t from-black/30 to-transparent"></div>
                            @else
                                <div class="w-full h-full flex items-center justify-center bg-gray-200">
                                    <svg class="w-16 h-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                    </svg>
                                </div>
                            @endif
                            <div class="absolute top-4 right-4 bg-white bg-opacity-90 backdrop-blur px-3 py-1 rounded-full">
                                <span class="text-sm font-semibold" style="color: var(--color-emerald);">{{ $fleet->category }}</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-primary text-xl font-bold mb-3" style="color: var(--color-emerald);">{{ $fleet->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ $fleet->description }}</p>

                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold" style="color: var(--color-gold);">{{ $fleet->passengers }}</div>
                                    <div class="text-xs text-gray-500">Passengers</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold" style="color: var(--color-gold);">{{ number_format($fleet->range) }}</div>
                                    <div class="text-xs text-gray-500">Range (nm)</div>
                                </div>
                            </div>

                            <div class="flex gap-3">
                                <a href="{{ route('fleet.detail', $fleet) }}" class="flex-1 text-center px-4 py-2 text-white rounded-lg hover:bg-opacity-90 transition-colors" style="background-color: var(--color-emerald);">
                                    View Details
                                </a>
                                <a href="{{ route('quote') }}" class="flex-1 text-center px-4 py-2 text-white rounded-lg hover:bg-opacity-90 transition-colors" style="background-color: var(--color-gold);">
                                    Get Quote
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <p class="text-gray-500">Fleet information will be displayed here once added.</p>
                    </div>
                @endforelse
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('fleet') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-emerald);">
                    View Complete Fleet
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 relative">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1556388158-158ea5ccacbd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');"></div>
        
        <!-- Overlay -->
        <div class="absolute inset-0" style="background-color: var(--color-emerald); opacity: 0.9;"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-transparent"></div>

        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10">
            <h2 class="font-primary text-4xl font-bold text-white mb-6">
                Ready to Charter Your Flight?
            </h2>
            <p class="text-xl text-gray-200 mb-8">
                Get instant quote for your charter requirements. Our team is available 24/7 to assist you.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('quote') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                    Get Charter Quote
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