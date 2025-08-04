<x-layouts.main :seoData="$seoData">
    <!-- Hero Section -->
    <section class="relative h-screen w-full">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ $fleet->image ? Storage::url($fleet->image) : 'https://images.unsplash.com/photo-1556388158-158ea5ccacbd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80' }}');"></div>
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/50"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-transparent"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8 z-10">
            <div class="max-w-4xl mx-auto">
                <!-- Breadcrumb -->
                <nav class="mb-8">
                    <ol class="flex items-center space-x-2 text-gray-300">
                        <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Home</a></li>
                        <li><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></li>
                        <li><a href="{{ route('fleet') }}" class="hover:text-white transition-colors">Fleet</a></li>
                        <li><svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg></li>
                        <li class="text-yellow-400">{{ $fleet->title }}</li>
                    </ol>
                </nav>

                <!-- Aircraft Category Badge -->
                <div class="mb-6">
                    <span class="inline-block px-4 py-2 rounded-full text-sm font-semibold text-white" style="background-color: var(--color-gold);">
                        {{ $fleet->category }}
                    </span>
                </div>

                <h1 class="font-primary text-4xl md:text-6xl lg:text-7xl font-bold leading-tight text-white mb-6">
                    {{ $fleet->title }}
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto">
                    {{ $fleet->description ?? 'Experience the ultimate in luxury aviation with this meticulously maintained aircraft offering unparalleled comfort, safety, and performance.' }}
                </p>
                
                <!-- Key Specs -->
                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-8 max-w-2xl mx-auto">
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-1">{{ $fleet->passengers }}</div>
                        <div class="text-gray-300 text-sm">Passengers</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-1">{{ number_format($fleet->range) }}</div>
                        <div class="text-gray-300 text-sm">Range (nm)</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-1">{{ $fleet->max_speed ?? 'Mach 0.8' }}</div>
                        <div class="text-gray-300 text-sm">Max Speed</div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl font-bold text-white mb-1">{{ $fleet->ceiling ?? '45,000' }}</div>
                        <div class="text-gray-300 text-sm">Ceiling (ft)</div>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('charter') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                        Charter This Aircraft
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

    <!-- Aircraft Overview -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="font-primary text-4xl font-bold mb-6" style="color: var(--color-emerald);">Aircraft Overview</h2>
                    <div class="prose prose-lg text-gray-600">
                        <p class="mb-6">
                            {{ $fleet->description ?? 'This exceptional aircraft represents the pinnacle of aviation engineering, combining cutting-edge technology with luxurious comfort to deliver an unparalleled flying experience.' }}
                        </p>
                        
                        <p class="mb-6">
                            Designed for both efficiency and elegance, this aircraft offers the perfect balance of performance, range, and cabin comfort. Whether you're traveling for business or leisure, every journey becomes a premium experience with state-of-the-art amenities and superior service.
                        </p>

                        <p>
                            Our maintenance team ensures this aircraft meets the highest safety standards, with regular inspections and premium care that guarantee reliability and peace of mind for every flight.
                        </p>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="{{ $fleet->image ? Storage::url($fleet->image) : 'https://images.unsplash.com/photo-1556388158-158ea5ccacbd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80' }}"
                             alt="{{ $fleet->title }}"
                             class="w-full h-96 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
                        <div class="absolute bottom-8 left-8 text-white">
                            <h4 class="font-primary text-2xl font-bold mb-2">{{ $fleet->title }}</h4>
                            <p class="text-gray-200">{{ $fleet->category }} Aircraft</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Aircraft Specifications -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Technical Specifications</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Detailed specifications and performance data for {{ $fleet->title }}.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Performance -->
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Performance</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex justify-between">
                            <span>Max Speed:</span>
                            <span class="font-semibold">{{ $fleet->max_speed ?? 'Mach 0.8' }}</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Range:</span>
                            <span class="font-semibold">{{ number_format($fleet->range) }} nm</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Service Ceiling:</span>
                            <span class="font-semibold">{{ $fleet->ceiling ?? '45,000' }} ft</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Rate of Climb:</span>
                            <span class="font-semibold">{{ $fleet->climb_rate ?? '4,000' }} fpm</span>
                        </li>
                    </ul>
                </div>

                <!-- Capacity -->
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Capacity</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex justify-between">
                            <span>Passengers:</span>
                            <span class="font-semibold">{{ $fleet->passengers }}</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Crew:</span>
                            <span class="font-semibold">{{ $fleet->crew ?? '2' }}</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Baggage:</span>
                            <span class="font-semibold">{{ $fleet->baggage ?? '120' }} cu ft</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Cabin Volume:</span>
                            <span class="font-semibold">{{ $fleet->cabin_volume ?? '650' }} cu ft</span>
                        </li>
                    </ul>
                </div>

                <!-- Dimensions -->
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-brown);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 8V4m0 0h4M4 4l5 5m11-1V4m0 0h-4m4 0l-5 5M4 16v4m0 0h4m-4 0l5-5m11 5l-5-5m5 5v-4m0 4h-4"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Dimensions</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex justify-between">
                            <span>Length:</span>
                            <span class="font-semibold">{{ $fleet->length ?? '65' }} ft</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Height:</span>
                            <span class="font-semibold">{{ $fleet->height ?? '21' }} ft</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Wingspan:</span>
                            <span class="font-semibold">{{ $fleet->wingspan ?? '68' }} ft</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Cabin Length:</span>
                            <span class="font-semibold">{{ $fleet->cabin_length ?? '28' }} ft</span>
                        </li>
                    </ul>
                </div>

                <!-- Engines -->
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Powerplant</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex justify-between">
                            <span>Engines:</span>
                            <span class="font-semibold">{{ $fleet->engines ?? '2x Turbofan' }}</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Thrust:</span>
                            <span class="font-semibold">{{ $fleet->thrust ?? '9,100' }} lbs</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Fuel Capacity:</span>
                            <span class="font-semibold">{{ $fleet->fuel_capacity ?? '15,000' }} lbs</span>
                        </li>
                        <li class="flex justify-between">
                            <span>Fuel Efficiency:</span>
                            <span class="font-semibold">{{ $fleet->fuel_efficiency ?? '250' }} gph</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Aircraft Features -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Luxury Features & Amenities</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Experience premium comfort with state-of-the-art amenities designed for the discerning traveler.
                </p>
            </div>

            @if($fleet->features && count($fleet->features) > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach($fleet->features as $feature)
                        <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
                            <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                                <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div>
                                <p class="text-gray-700 font-medium">{{ $feature }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Default Features -->
                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700 font-medium">Premium Leather Seating</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700 font-medium">High-Speed Wi-Fi Internet</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700 font-medium">Entertainment System</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700 font-medium">Climate Control System</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700 font-medium">Advanced Avionics</p>
                        </div>
                    </div>

                    <div class="flex items-start space-x-4 p-6 bg-gray-50 rounded-xl">
                        <div class="w-8 h-8 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-700 font-medium">Spacious Cabin Layout</p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <!-- Safety Features -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Safety & Maintenance</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    This aircraft meets the highest safety standards with comprehensive maintenance and advanced safety systems.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Maintenance -->
                <div class="bg-white rounded-xl p-8 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Premium Maintenance</h3>
                    <p class="text-gray-600">Comprehensive preventive maintenance program with certified technicians and original manufacturer parts.</p>
                </div>

                <!-- Safety Systems -->
                <div class="bg-white rounded-xl p-8 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.25-1.5a4.5 4.5 0 00-9 0v1.032c0 .307-.036.607-.106.893.073.199.163.398.275.588.113.19.249.369.407.525C8.93 14.54 10.426 15 12 15s3.07-.46 4.124-1.462c.158-.156.294-.335.407-.525.112-.19.202-.389.275-.588a4.492 4.492 0 00-.106-.893V9.5z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Advanced Safety</h3>
                    <p class="text-gray-600">Latest generation safety systems including terrain awareness, weather radar, and emergency protocols.</p>
                </div>

                <!-- Certified Operations -->
                <div class="bg-white rounded-xl p-8 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-brown);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Certified Operations</h3>
                    <p class="text-gray-600">Fully certified for commercial operations with international safety certifications and regular audits.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Similar Aircraft -->
    @if($relatedFleets->count() > 0)
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Similar Aircraft</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Explore other aircraft in our fleet that might interest you.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($relatedFleets as $relatedFleet)
                    <div class="bg-gray-50 rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                        <div class="h-64 bg-gradient-to-br from-gray-100 to-gray-200 relative overflow-hidden">
                            @if($relatedFleet->image)
                                <img src="{{ Storage::url($relatedFleet->image) }}"
                                     alt="{{ $relatedFleet->title }}"
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
                                <span class="text-sm font-semibold" style="color: var(--color-emerald);">{{ $relatedFleet->category }}</span>
                            </div>
                        </div>
                        <div class="p-6">
                            <h3 class="font-primary text-xl font-bold mb-3" style="color: var(--color-emerald);">{{ $relatedFleet->title }}</h3>
                            <p class="text-gray-600 mb-4">{{ $relatedFleet->description }}</p>

                            <div class="grid grid-cols-2 gap-4 mb-4">
                                <div class="text-center">
                                    <div class="text-2xl font-bold" style="color: var(--color-gold);">{{ $relatedFleet->passengers }}</div>
                                    <div class="text-xs text-gray-500">Passengers</div>
                                </div>
                                <div class="text-center">
                                    <div class="text-2xl font-bold" style="color: var(--color-gold);">{{ number_format($relatedFleet->range) }}</div>
                                    <div class="text-xs text-gray-500">Range (nm)</div>
                                </div>
                            </div>

                            <a href="{{ route('fleet.detail', $relatedFleet) }}" class="block w-full text-center px-6 py-3 text-white rounded-lg hover:bg-opacity-90 transition-colors" style="background-color: var(--color-emerald);">
                                View Details
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('fleet') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold border-2 rounded-lg hover:bg-gray-50 transition-all duration-300 transform hover:scale-105" style="border-color: var(--color-emerald); color: var(--color-emerald);">
                    View Complete Fleet
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
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ $fleet->image ? Storage::url($fleet->image) : 'https://images.unsplash.com/photo-1556388158-158ea5ccacbd?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80' }}');"></div>
        
        <!-- Overlay -->
        <div class="absolute inset-0" style="background-color: var(--color-emerald); opacity: 0.9;"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-transparent"></div>

        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10">
            <h2 class="font-primary text-4xl font-bold text-white mb-6">
                Ready to Charter {{ $fleet->title }}?
            </h2>
            <p class="text-xl text-gray-200 mb-8">
                Experience luxury aviation at its finest. Contact us to book this exceptional aircraft for your next journey.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('charter') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                    Charter This Aircraft
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