<x-layouts.main :seoData="$seoData">
    <!-- Hero Section -->
    <section class="relative h-screen w-full">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1540962351504-03099e0a754b?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');"></div>

        <!-- Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-transparent"></div>

        <!-- Content -->
        <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8 z-10">
            <div class="max-w-4xl mx-auto">
                <h1 class="font-primary text-4xl md:text-6xl lg:text-7xl font-bold leading-tight text-white mb-6">
                    Get Your <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Quote</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto">
                    Request a personalized quote for your private jet charter. Our team will respond within 15 minutes with the best options for your journey.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#quote-form" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                        Request Quote Now
                        <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </a>
                    <a href="tel:+6281298214649" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold border-2 border-white text-white rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300">
                        <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        Call for Instant Quote
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Form Section -->
    <section id="quote-form" class="py-20 bg-white">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Request Your Charter Quote</h2>
                <p class="text-xl text-gray-600">
                    Fill out the form below and our charter specialists will provide you with a detailed quote within 15 minutes.
                </p>
            </div>

            <div class="bg-gray-50 rounded-2xl p-8 shadow-lg">
                <form class="space-y-6">
                    <!-- Trip Type -->
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-3">Trip Type</label>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                            <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-white transition-colors">
                                <input type="radio" name="trip_type" value="one_way" class="mr-3" style="accent-color: var(--color-emerald);">
                                <span class="text-gray-700">One Way</span>
                            </label>
                            <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-white transition-colors">
                                <input type="radio" name="trip_type" value="round_trip" class="mr-3" style="accent-color: var(--color-emerald);">
                                <span class="text-gray-700">Round Trip</span>
                            </label>
                            <label class="flex items-center p-4 border rounded-lg cursor-pointer hover:bg-white transition-colors">
                                <input type="radio" name="trip_type" value="multi_leg" class="mr-3" style="accent-color: var(--color-emerald);">
                                <span class="text-gray-700">Multi-Leg</span>
                            </label>
                        </div>
                    </div>

                    <!-- Flight Details -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Departure -->
                        <div>
                            <label for="departure" class="block text-sm font-semibold text-gray-700 mb-2">Departure Airport</label>
                            <input type="text" id="departure" name="departure"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                                   placeholder="City or Airport Code">
                        </div>

                        <!-- Arrival -->
                        <div>
                            <label for="arrival" class="block text-sm font-semibold text-gray-700 mb-2">Arrival Airport</label>
                            <input type="text" id="arrival" name="arrival"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                                   placeholder="City or Airport Code">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Departure Date -->
                        <div>
                            <label for="departure_date" class="block text-sm font-semibold text-gray-700 mb-2">Departure Date</label>
                            <input type="date" id="departure_date" name="departure_date"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors">
                        </div>

                        <!-- Departure Time -->
                        <div>
                            <label for="departure_time" class="block text-sm font-semibold text-gray-700 mb-2">Preferred Departure Time</label>
                            <input type="time" id="departure_time" name="departure_time"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors">
                        </div>
                    </div>

                    <!-- Return Details (for round trip) -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Return Date -->
                        <div>
                            <label for="return_date" class="block text-sm font-semibold text-gray-700 mb-2">Return Date (if applicable)</label>
                            <input type="date" id="return_date" name="return_date"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors">
                        </div>

                        <!-- Return Time -->
                        <div>
                            <label for="return_time" class="block text-sm font-semibold text-gray-700 mb-2">Preferred Return Time</label>
                            <input type="time" id="return_time" name="return_time"
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors">
                        </div>
                    </div>

                    <!-- Passengers and Aircraft -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Number of Passengers -->
                        <div>
                            <label for="passengers" class="block text-sm font-semibold text-gray-700 mb-2">Number of Passengers</label>
                            <select id="passengers" name="passengers"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors">
                                <option value="">Select passengers</option>
                                <option value="1">1 Passenger</option>
                                <option value="2">2 Passengers</option>
                                <option value="3">3 Passengers</option>
                                <option value="4">4 Passengers</option>
                                <option value="5">5 Passengers</option>
                                <option value="6">6 Passengers</option>
                                <option value="7">7 Passengers</option>
                                <option value="8">8 Passengers</option>
                                <option value="9+">9+ Passengers</option>
                            </select>
                        </div>

                        <!-- Preferred Aircraft -->
                        <div>
                            <label for="aircraft_type" class="block text-sm font-semibold text-gray-700 mb-2">Preferred Aircraft Type</label>
                            <select id="aircraft_type" name="aircraft_type"
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors">
                                <option value="">Any aircraft type</option>
                                <option value="light">Light Jet</option>
                                <option value="midsize">Mid-Size Jet</option>
                                <option value="heavy">Heavy Jet</option>
                                <option value="turboprop">Turboprop</option>
                            </select>
                        </div>
                    </div>

                    <!-- Contact Information -->
                    <div class="border-t pt-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Contact Information</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div>
                                <label for="full_name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
                                <input type="text" id="full_name" name="full_name" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                                       placeholder="Your full name">
                            </div>

                            <!-- Company -->
                            <div>
                                <label for="company" class="block text-sm font-semibold text-gray-700 mb-2">Company (Optional)</label>
                                <input type="text" id="company" name="company"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                                       placeholder="Company name">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-6">
                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
                                <input type="email" id="email" name="email" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                                       placeholder="your@email.com">
                            </div>

                            <!-- Phone -->
                            <div>
                                <label for="phone" class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label>
                                <input type="tel" id="phone" name="phone" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                                       placeholder="+62 xxx xxx xxxx">
                            </div>
                        </div>
                    </div>

                    <!-- Special Requirements -->
                    <div>
                        <label for="special_requirements" class="block text-sm font-semibold text-gray-700 mb-2">Special Requirements or Notes</label>
                        <textarea id="special_requirements" name="special_requirements" rows="4"
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors"
                                  placeholder="Please let us know about any special requirements, catering preferences, ground transportation needs, or other requests..."></textarea>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center pt-6">
                        <button type="submit" class="inline-flex items-center justify-center px-12 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                            <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                            </svg>
                            Submit Quote Request
                        </button>
                        <p class="text-sm text-gray-500 mt-3">
                            We'll respond within 15 minutes during business hours
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Why Choose Us for Charter -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Why Get Your Quote From Us?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Experience the advantages of working with Indonesia's premier private aviation provider.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Instant Response -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">15-Minute Response</h3>
                    <p class="text-gray-600">Quick turnaround time with detailed quotes and aircraft options provided within 15 minutes during business hours.</p>
                </div>

                <!-- Transparent Pricing -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Transparent Pricing</h3>
                    <p class="text-gray-600">No hidden fees or surprise charges. All costs are clearly itemized and explained in your comprehensive quote.</p>
                </div>

                <!-- Expert Consultation -->
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-brown);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold mb-4" style="color: var(--color-emerald);">Expert Consultation</h3>
                    <p class="text-gray-600">Our experienced charter specialists provide personalized recommendations based on your specific travel requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Available Services Preview -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Popular Charter Services</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Explore our most requested charter services for your next journey.
                </p>
            </div>

            @if($services->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-0">
                    @foreach($services->take(4) as $service)
                        <div class="group relative h-80 overflow-hidden border cursor-pointer">
                            <!-- Background Image -->
                            <div class="absolute inset-0 bg-cover bg-center transition-transform duration-500 group-hover:scale-110"
                                 style="background-image: url('{{ $service->image ? Storage::url($service->image) : 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80' }}');">
                            </div>

                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-black/40"></div>
                            <div class="absolute inset-0 bg-gradient-to-r from-black/30 to-transparent"></div>

                            <!-- Content -->
                            <div class="absolute inset-0 flex flex-col justify-end p-6 text-white">
                                <div class="transform translate-y-2 group-hover:translate-y-0 transition-transform duration-300">
                                    <h3 class="font-primary text-xl font-bold mb-2 drop-shadow-lg">{{ $service->title }}</h3>

                                    <!-- Arrow Icon -->
                                    <div class="flex items-center space-x-2 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                        <svg class="w-5 h-5" style="color: var(--color-gold);" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                                        </svg>
                                        <span class="text-sm font-medium">Request Quote</span>
                                    </div>
                                </div>
                            </div>

                            <!-- Link -->
                            <a href="{{ route('service.detail', $service) }}" class="absolute inset-0"></a>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-12">
                    <p class="text-gray-500">Service information will be displayed here once added.</p>
                </div>
            @endif

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

    <!-- Contact Alternative -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Prefer to Speak Directly?</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our charter specialists are available 24/7 to discuss your requirements and provide instant quotes over the phone.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <!-- Phone Contact -->
                <div class="bg-white rounded-xl p-8 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-2xl font-bold mb-4" style="color: var(--color-emerald);">24/7 Charter Hotline</h3>
                    <p class="text-gray-600 mb-6">Speak directly with our charter specialists for immediate assistance and instant quotes.</p>
                    <a href="tel:+6281298214649" class="inline-flex items-center justify-center px-8 py-3 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-colors" style="background-color: var(--color-emerald);">
                        <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        +62 812 9821 4649
                    </a>
                </div>

                <!-- Email Contact -->
                <div class="bg-white rounded-xl p-8 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-2xl font-bold mb-4" style="color: var(--color-emerald);">Email Us</h3>
                    <p class="text-gray-600 mb-6">Send us your requirements via email and receive a detailed quote with aircraft options.</p>
                    <a href="mailto:commercial@flitecharter.com" class="inline-flex items-center justify-center px-8 py-3 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-colors" style="background-color: var(--color-gold);">
                        <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                        commercial@flitecharter.com
                    </a>
                </div>
            </div>
        </div>
    </section>
</x-layouts.main>
