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
                    About <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600">Flite Charter</span>
                </h1>
                <p class="text-xl md:text-2xl text-gray-200 mb-8 max-w-3xl mx-auto">
                    Your instant air transport solutions. Pioneering excellence in private aviation for over a decade.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('charter') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                        Charter With Us
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

    <!-- Company Overview -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="font-primary text-4xl font-bold mb-6" style="color: var(--color-emerald);">Our Story</h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Founded with a vision to revolutionize private aviation, Flite Charter has grown to become the premier choice for luxury jet charter services across the globe.
                    </p>
                    
                    <div class="space-y-6">
                        <p class="text-gray-600 leading-relaxed">
                            With over 10 years of experience in the private aviation industry, we have built our reputation on three fundamental pillars: uncompromising safety, exceptional service, and operational excellence. Our commitment to these values has made us the trusted partner for thousands of discerning travelers worldwide.
                        </p>
                        
                        <p class="text-gray-600 leading-relaxed">
                            From our humble beginnings with a single aircraft to our current fleet of premium jets, every milestone in our journey has been driven by our dedication to providing seamless, luxurious travel experiences that exceed expectations.
                        </p>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1540962351504-03099e0a754b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                             alt="Flite Charter Aircraft"
                             class="w-full h-96 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                        <div class="absolute bottom-8 left-8 text-white">
                            <h4 class="font-primary text-2xl font-bold mb-2">Excellence in Aviation</h4>
                            <p class="text-gray-200">Delivering superior experiences since 2013</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission & Vision -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Mission & Vision</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Guided by our core values and driven by innovation, we continuously strive to redefine luxury aviation.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <!-- Mission -->
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-2xl font-bold text-center mb-6" style="color: var(--color-emerald);">Our Mission</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        To provide safe, comfortable, and unforgettable flight experiences for every journey you take. We are committed to delivering exceptional service that empowers our clients with complete control over their travel experience while maintaining the highest standards of safety and luxury.
                    </p>
                </div>

                <!-- Vision -->
                <div class="bg-white rounded-xl p-8 shadow-lg">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-2xl font-bold text-center mb-6" style="color: var(--color-emerald);">Our Vision</h3>
                    <p class="text-gray-600 text-center leading-relaxed">
                        To be the global leader in private aviation services, recognized for innovation, reliability, and customer satisfaction. We envision a future where luxury air travel is accessible, sustainable, and seamlessly integrated into the lives of our clients worldwide.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Our Core Values</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    These fundamental principles guide every decision we make and every service we provide.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Safety First -->
                <div class="text-center">
                    <div class="w-20 h-20 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.25-1.5a4.5 4.5 0 00-9 0v1.032c0 .307-.036.607-.106.893.073.199.163.398.275.588.113.19.249.369.407.525C8.93 14.54 10.426 15 12 15s3.07-.46 4.124-1.462c.158-.156.294-.335.407-.525.112-.19.202-.389.275-.588a4.492 4.492 0 00-.106-.893V9.5z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-2xl font-bold mb-4" style="color: var(--color-emerald);">Safety First</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Safety is our top priority and the foundation of everything we do. We maintain rigorous maintenance standards, employ highly trained pilots, and implement comprehensive safety protocols to ensure every flight meets the highest safety standards.
                    </p>
                </div>

                <!-- Excellence -->
                <div class="text-center">
                    <div class="w-20 h-20 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-2xl font-bold mb-4" style="color: var(--color-emerald);">Excellence</h3>
                    <p class="text-gray-600 leading-relaxed">
                        We strive for excellence in every aspect of our service delivery. From aircraft maintenance to customer service, we are committed to exceeding expectations and delivering experiences that set new standards in luxury aviation.
                    </p>
                </div>

                <!-- Integrity -->
                <div class="text-center">
                    <div class="w-20 h-20 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-brown);">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-2xl font-bold mb-4" style="color: var(--color-emerald);">Integrity</h3>
                    <p class="text-gray-600 leading-relaxed">
                        Honesty, transparency, and ethical business practices form the backbone of our operations. We build lasting relationships with our clients through trust, reliability, and consistent delivery of our promises.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Leadership -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Leadership Team</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Meet the experienced professionals who lead our organization with passion and expertise.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- CEO -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="h-64 bg-gradient-to-br from-gray-100 to-gray-200 relative">
                        <div class="w-full h-full flex items-center justify-center bg-gray-200">
                            <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-primary text-xl font-bold mb-2" style="color: var(--color-emerald);">John Anderson</h3>
                        <p class="text-gray-600 mb-4">Chief Executive Officer</p>
                        <p class="text-sm text-gray-500">20+ years in aviation industry with extensive experience in operations and business development.</p>
                    </div>
                </div>

                <!-- COO -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="h-64 bg-gradient-to-br from-gray-100 to-gray-200 relative">
                        <div class="w-full h-full flex items-center justify-center bg-gray-200">
                            <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-primary text-xl font-bold mb-2" style="color: var(--color-emerald);">Sarah Mitchell</h3>
                        <p class="text-gray-600 mb-4">Chief Operating Officer</p>
                        <p class="text-sm text-gray-500">Expert in operational excellence and safety management with 15+ years of aviation experience.</p>
                    </div>
                </div>

                <!-- Head of Safety -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="h-64 bg-gradient-to-br from-gray-100 to-gray-200 relative">
                        <div class="w-full h-full flex items-center justify-center bg-gray-200">
                            <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="p-6 text-center">
                        <h3 class="font-primary text-xl font-bold mb-2" style="color: var(--color-emerald);">Captain David Chen</h3>
                        <p class="text-gray-600 mb-4">Head of Safety & Training</p>
                        <p class="text-sm text-gray-500">Former airline pilot with 25+ years experience and specialist in aviation safety protocols.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Company Statistics -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Our Achievements</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Numbers that reflect our commitment to excellence and the trust our clients place in us.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div>
                    <div class="text-5xl font-bold mb-4" style="color: var(--color-emerald);">10+</div>
                    <div class="text-xl text-gray-600 font-semibold">Years Experience</div>
                    <div class="text-sm text-gray-500 mt-2">Serving the aviation industry</div>
                </div>
                <div>
                    <div class="text-5xl font-bold mb-4" style="color: var(--color-emerald);">500+</div>
                    <div class="text-xl text-gray-600 font-semibold">Successful Flights</div>
                    <div class="text-sm text-gray-500 mt-2">Safe arrivals guaranteed</div>
                </div>
                <div>
                    <div class="text-5xl font-bold mb-4" style="color: var(--color-emerald);">50+</div>
                    <div class="text-xl text-gray-600 font-semibold">Available Fleet</div>
                    <div class="text-sm text-gray-500 mt-2">Modern aircraft ready</div>
                </div>
                <div>
                    <div class="text-5xl font-bold mb-4" style="color: var(--color-emerald);">100%</div>
                    <div class="text-xl text-gray-600 font-semibold">Safety Record</div>
                    <div class="text-sm text-gray-500 mt-2">Zero incidents to date</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Certifications & Awards -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Certifications & Recognition</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Our commitment to excellence is recognized by industry authorities and celebrated by our peers.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- ISO Certification -->
                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-lg font-bold mb-2" style="color: var(--color-emerald);">ISO 9001:2015</h3>
                    <p class="text-sm text-gray-600">Quality Management System Certification</p>
                </div>

                <!-- Safety Certification -->
                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.25-1.5a4.5 4.5 0 00-9 0v1.032c0 .307-.036.607-.106.893.073.199.163.398.275.588.113.19.249.369.407.525C8.93 14.54 10.426 15 12 15s3.07-.46 4.124-1.462c.158-.156.294-.335.407-.525.112-.19.202-.389.275-.588a4.492 4.492 0 00-.106-.893V9.5z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-lg font-bold mb-2" style="color: var(--color-emerald);">IOSA Certified</h3>
                    <p class="text-sm text-gray-600">International Aviation Safety Audit</p>
                </div>

                <!-- Environmental -->
                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center" style="background-color: var(--color-brown);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-lg font-bold mb-2" style="color: var(--color-emerald);">Carbon Neutral</h3>
                    <p class="text-sm text-gray-600">Environmental Responsibility Program</p>
                </div>

                <!-- Industry Award -->
                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 rounded-full mx-auto mb-4 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-lg font-bold mb-2" style="color: var(--color-emerald);">Excellence Award</h3>
                    <p class="text-sm text-gray-600">Private Aviation Industry Recognition</p>
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
                Ready to Experience the Flite Charter Difference?
            </h2>
            <p class="text-xl text-gray-200 mb-8">
                Join thousands of satisfied clients who trust us for their premium air travel needs. Experience excellence in every flight.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="{{ route('quote') }}" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                    Get Your Quote Now
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