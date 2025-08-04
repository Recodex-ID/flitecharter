<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        {!! seo($seoData ?? null) !!}

        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('/site.webmanifest') }}">

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:300,400,500,600,700&display=swap" rel="stylesheet" />
        <link href="https://fonts.bunny.net/css?family=montserrat:400,500,600,700&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-primary bg-white antialiased">
        <!-- Navigation -->
        <nav id="navbar" class="fixed w-full z-50 transition-all duration-300" style="background-color: transparent;">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex items-center h-16 relative">
                    <!-- Hamburger Menu Button (Left) -->
                    <div class="flex items-center">
                        <button type="button" id="sidebar-toggle" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-[var(--color-gold)] hover:bg-white/10 focus:outline-none transition-colors">
                            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            </svg>
                        </button>
                    </div>

                    <!-- Left Navigation -->
                    <div class="hidden md:flex flex-1 ml-8">
                        <div class="flex items-baseline space-x-8">
                            <a href="{{ route('charter') }}" class="text-white hover:text-[var(--color-gold)] px-3 py-2 text-sm font-medium transition-colors">Aircraft Charter</a>
                            <a href="{{ route('fleet') }}" class="text-white hover:text-[var(--color-gold)] px-3 py-2 text-sm font-medium transition-colors">Fleet</a>
                            <a href="{{ route('service') }}" class="text-white hover:text-[var(--color-gold)] px-3 py-2 text-sm font-medium transition-colors">Services</a>
                        </div>
                    </div>

                    <!-- Centered Logo -->
                    <div class="absolute left-1/2 transform -translate-x-1/2">
                        <a href="/" class="flex items-center">
                            <img src="{{ asset('images/logo.png') }}" alt="Flite Charter - Your Instant Air Transport Solutions" class="h-12 w-auto">
                        </a>
                    </div>

                    <!-- Right Navigation -->
                    <div class="hidden md:flex flex-1 justify-end">
                        <div class="flex items-baseline space-x-8">
                            <a href="{{ route('about') }}" class="text-white hover:text-[var(--color-gold)] px-3 py-2 text-sm font-medium transition-colors">About</a>
                            <a href="{{ route('quote') }}" class="inline-flex items-center px-6 py-2 border border-transparent text-sm font-medium rounded-md text-white hover:bg-opacity-90 transition-colors" style="background-color: var(--color-gold);">
                                Get Quote
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Sidebar -->
        <div id="sidebar" class="fixed top-0 left-0 h-full w-80 bg-white shadow-lg z-50 transform -translate-x-full transition-transform duration-300 ease-in-out">
            <div class="p-6">
                <!-- Sidebar Header -->
                <div class="flex items-center justify-between mb-8">
                    <div class="flex items-center">
                        <img src="{{ asset('images/logo.png') }}" alt="Flite Charter" class="h-10 w-auto">
                    </div>
                    <button type="button" id="sidebar-close" class="p-2 rounded-md text-gray-400 hover:text-gray-600 hover:bg-gray-100 transition-colors">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Sidebar Navigation -->
                <nav class="space-y-4">
                    <a href="{{ route('charter') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-[var(--color-emerald)] rounded-lg transition-colors">
                        <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                        </svg>
                        Charter Services
                    </a>
                    <a href="{{ route('fleet') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-[var(--color-emerald)] rounded-lg transition-colors">
                        <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                        Our Fleet
                    </a>
                    <a href="{{ route('service') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-[var(--color-emerald)] rounded-lg transition-colors">
                        <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2-2v2m8 0V6a2 2 0 012 2v6M8 6V4a2 2 0 012-2h4a2 2 0 012 2v2m-8 0H6a2 2 0 00-2 2v6a2 2 0 002 2h12a2 2 0 002-2V8a2 2 0 00-2-2h-2"></path>
                        </svg>
                        Services
                    </a>
                    <a href="{{ route('about') }}" class="flex items-center px-4 py-3 text-gray-700 hover:bg-gray-100 hover:text-[var(--color-emerald)] rounded-lg transition-colors">
                        <svg class="h-5 w-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                        About Us
                    </a>
                </nav>

                <!-- CTA Button in Sidebar -->
                <div class="mt-8 pt-8 border-t border-gray-200">
                    <a href="{{ route('quote') }}" class="block w-full text-center px-6 py-3 text-white rounded-lg hover:bg-opacity-90 transition-colors" style="background-color: var(--color-gold);">
                        Get Quote
                    </a>
                </div>

                <!-- Contact Info -->
                <div class="mt-8 p-4 bg-gray-50 rounded-lg">
                    <h4 class="font-semibold text-gray-900 mb-2">24/7 Charter Hotline</h4>
                    <p class="text-sm text-gray-600 mb-2">
                        <a href="tel:+6281298214649" class="hover:text-[var(--color-emerald)] transition-colors">
                            +62 812 9821 4649
                        </a>
                    </p>
                    <p class="text-sm text-gray-600">
                        <a href="mailto:commercial@flitecharter.com" class="hover:text-[var(--color-emerald)] transition-colors">
                            commercial@flitecharter.com
                        </a>
                    </p>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <main>
            {{ $slot }}
        </main>

        <!-- Footer -->
        <footer class="bg-white text-gray-700 border-t border-gray-200">
            <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                    <!-- Company Info -->
                    <div class="col-span-1 md:col-span-2">
                        <div class="font-primary font-bold text-xl mb-2" style="color: var(--color-emerald);">
                            FLITE CHARTER
                        </div>
                        <div class="text-sm text-gray-500 mb-4">
                            YOUR INSTANT AIR TRANSPORT SOLUTIONS
                        </div>
                        <p class="text-gray-600 text-sm leading-relaxed">
                            Premium private jet charter services that prioritize speed, discretion, and comfort.
                            Empowering executives and premium travelers with full control over their travel experience.
                        </p>
                    </div>

                    <!-- Quick Links -->
                    <div>
                        <h3 class="text-sm font-semibold uppercase tracking-wider mb-4" style="color: var(--color-emerald);">Services</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-600 hover:text-[var(--color-emerald)] text-sm transition-colors">Private Charter</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-[var(--color-emerald)] text-sm transition-colors">Corporate Travel</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-[var(--color-emerald)] text-sm transition-colors">Group Charter</a></li>
                            <li><a href="#" class="text-gray-600 hover:text-[var(--color-emerald)] text-sm transition-colors">Aircraft Management</a></li>
                        </ul>
                    </div>

                    <!-- Contact -->
                    <div>
                        <h3 class="text-sm font-semibold uppercase tracking-wider mb-4" style="color: var(--color-emerald);">Contact</h3>
                        <ul class="space-y-2">
                            <li class="text-gray-600 text-sm">24/7 Charter Hotline</li>
                            <li><a href="tel:+6281298214649" class="hover:text-[var(--color-gold)] text-sm transition-colors" style="color: var(--color-emerald);">+62 812 9821 4649</a></li>
                            <li><a href="mailto:commercial@flitecharter.com" class="text-gray-600 hover:text-[var(--color-emerald)] text-sm transition-colors">commercial@flitecharter.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="mt-8 pt-8 border-t border-gray-200">
                    <div class="flex flex-col md:flex-row justify-between items-center">
                        <p class="text-gray-600 text-sm">
                            © {{ date('Y') }} Flite Charter. All rights reserved.
                        </p>
                        <div class="mt-4 md:mt-0 flex space-x-6">
                            <a href="#" class="text-gray-600 hover:text-[var(--color-emerald)] text-sm transition-colors">Privacy Policy</a>
                            <a href="#" class="text-gray-600 hover:text-[var(--color-emerald)] text-sm transition-colors">Terms of Service</a>
                            <a href="#" class="text-gray-600 hover:text-[var(--color-emerald)] text-sm transition-colors">Safety</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        @fluxScripts
    </body>
</html>
