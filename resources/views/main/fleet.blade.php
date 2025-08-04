<x-layouts.main :seoData="$seoData">
    <!-- Hero Section -->
    <section class="relative h-screen w-full">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1556388158-158ea5ccacbd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');"></div>
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-transparent"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8 z-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="font-primary text-4xl md:text-6xl lg:text-7xl font-bold leading-tight text-white mb-6">
                    Our Premium <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Fleet</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto">
                    Discover our meticulously maintained aircraft collection, each offering unparalleled comfort, safety, and performance for your journey.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('charter') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                        Charter Now
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                        </svg>
                    </a>
                    <a href="{{ route('quote') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold border-2 border-white text-white rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                        Get Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet Statistics -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">{{ $fleets->count() }}+</div>
                    <div class="text-gray-600">Aircraft Available</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">500+</div>
                    <div class="text-gray-600">Successful Flights</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">24/7</div>
                    <div class="text-gray-600">Support Available</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">100%</div>
                    <div class="text-gray-600">Safety Record</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet Categories -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Aircraft Categories</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    From light jets for short trips to heavy jets for transcontinental flights, we have the perfect aircraft for every mission.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
                <!-- Light Jets -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Light Jets</h3>
                    <p class="text-gray-600 text-center mb-6">Perfect for short to medium-range flights with 4-8 passengers. Ideal for business trips and regional travel.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Range: 1,200-2,500 nm
                        </li>
                        <li class="flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Capacity: 4-8 passengers
                        </li>
                    </ul>
                </div>

                <!-- Mid-Size Jets -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Mid-Size Jets</h3>
                    <p class="text-gray-600 text-center mb-6">Excellent balance of range, comfort, and performance. Perfect for coast-to-coast flights and international trips.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Range: 2,500-4,000 nm
                        </li>
                        <li class="flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Capacity: 7-9 passengers
                        </li>
                    </ul>
                </div>

                <!-- Heavy Jets -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-brown);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Heavy Jets</h3>
                    <p class="text-gray-600 text-center mb-6">Ultimate luxury and range for long-distance flights. Spacious cabins with premium amenities and maximum comfort.</p>
                    <ul class="space-y-2 text-sm text-gray-600">
                        <li class="flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Range: 4,000+ nm
                        </li>
                        <li class="flex items-center justify-center">
                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            Capacity: 10-16 passengers
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Fleet Gallery -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Available Aircraft</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Browse our comprehensive fleet of aircraft, each maintained to the highest standards of safety and luxury.
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

                            @if($fleet->features && count($fleet->features) > 0)
                                <ul class="space-y-2 text-sm text-gray-600 mb-6">
                                    @foreach(array_slice($fleet->features, 0, 3) as $feature)
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            <div class="flex gap-3">
                                <a href="{{ route('fleet.detail', $fleet) }}" class="flex-1 text-center px-4 py-2 text-white rounded-lg hover:bg-opacity-90 transition-colors" style="background-color: var(--color-emerald);">
                                    View Details
                                </a>
                                <a href="{{ route('quote') }}" class="flex-1 text-center px-4 py-2 border-2 rounded-lg hover:bg-gray-50 transition-colors" style="border-color: var(--color-gold); color: var(--color-gold);">
                                    Get Quote
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        <h3 class="text-lg font-medium text-gray-900 mb-2">No Aircraft Available</h3>
                        <p class="text-gray-500">Fleet information will be displayed here once added.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Fleet Advantages -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Why Choose Our Fleet</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our commitment to excellence ensures every aircraft in our fleet meets the highest standards of safety, comfort, and performance.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Modern Fleet -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Modern Fleet</h3>
                    <p class="text-gray-600">Latest generation aircraft with advanced avionics and fuel-efficient engines for optimal performance.</p>
                </div>

                <!-- Regular Maintenance -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Regular Maintenance</h3>
                    <p class="text-gray-600">Comprehensive maintenance programs ensure all aircraft are in peak condition for safe and reliable operation.</p>
                </div>

                <!-- Luxury Interiors -->
                <div class="text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-brown);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Luxury Interiors</h3>
                    <p class="text-gray-600">Premium cabin appointments and amenities designed to provide maximum comfort during your flight.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 relative">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1540962351504-03099e0a754b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');"></div>
        
        <!-- Overlay -->
        <div class="absolute inset-0" style="background-color: var(--color-emerald); opacity: 0.9;"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-transparent"></div>

        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10">
            <h2 class="font-primary text-4xl font-bold text-white mb-6">
                Ready to Experience Our Fleet?
            </h2>
            <p class="text-xl text-gray-200 mb-8">
                Choose the perfect aircraft for your journey and experience luxury aviation at its finest.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('charter') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                    Book Charter Flight
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