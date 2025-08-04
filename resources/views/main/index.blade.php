<x-layouts.main :seoData="$seoData">
    <!-- Navigation Gradient Overlay -->
    <div class="fixed top-0 left-0 right-0 h-32 bg-gradient-to-b from-black/50 via-black/20 to-transparent z-40 pointer-events-none"></div>

    <!-- Hero Carousel Section -->
    <section class="hero-carousel">
        @forelse($heroes as $hero)
            @if($loop->first)
                <div x-data="{
                slides: [
                    @foreach($heroes as $heroItem)
                    {
                        imgSrc: '{{ $heroItem->image ? Storage::url($heroItem->image) : 'https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2074&q=80' }}',
                        imgAlt: '{{ $heroItem->title }}',
                        title: '{{ $heroItem->title }}',
                        ctaUrl: '#fleet',
                        ctaText: 'View Our Fleet',
                    },
                    @endforeach
                ],
                currentSlideIndex: 1,
                autoplayIntervalTime: 5000,
                isPaused: false,
                autoplayInterval: null,

                previous() {
                    if (this.currentSlideIndex > 1) {
                        this.currentSlideIndex = this.currentSlideIndex - 1
                    } else {
                        this.currentSlideIndex = this.slides.length
                    }
                },

                next() {
                    if (this.currentSlideIndex < this.slides.length) {
                        this.currentSlideIndex = this.currentSlideIndex + 1
                    } else {
                        this.currentSlideIndex = 1
                    }
                },

                autoplay() {
                    this.autoplayInterval = setInterval(() => {
                        if (!this.isPaused) {
                            this.next()
                        }
                    }, this.autoplayIntervalTime)
                },

                setAutoplayInterval(newIntervalTime) {
                    clearInterval(this.autoplayInterval)
                    this.autoplayIntervalTime = newIntervalTime
                    this.autoplay()
                },

                formatTitle(title) {
                    const words = title.split(' ');
                    if (words.length <= 2) {
                        return { firstPart: '', lastPart: title };
                    }
                    const midPoint = Math.ceil(words.length / 2);
                    return {
                        firstPart: words.slice(0, midPoint).join(' '),
                        lastPart: words.slice(midPoint).join(' ')
                    };
                }
            }"
                     x-init="autoplay"
                     class="relative w-full overflow-hidden">

                    <!-- Previous Button -->
                    <button type="button"
                            class="absolute left-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/30 backdrop-blur-sm p-3 text-white transition hover:bg-white/50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white active:outline-offset-0"
                            aria-label="previous slide"
                            x-on:click="previous()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-6 pr-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                    </button>

                    <!-- Next Button -->
                    <button type="button"
                            class="absolute right-5 top-1/2 z-20 flex rounded-full -translate-y-1/2 items-center justify-center bg-white/30 backdrop-blur-sm p-3 text-white transition hover:bg-white/50 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white active:outline-offset-0"
                            aria-label="next slide"
                            x-on:click="next()">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="3" class="size-6 pl-0.5" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                        </svg>
                    </button>

                    <!-- Slides Container -->
                    <div class="relative h-screen w-full">
                        <template x-for="(slide, index) in slides" :key="index">
                            <div x-show="currentSlideIndex == index + 1"
                                 class="absolute inset-0"
                                 x-transition:enter="transition-opacity duration-1000 ease-in-out"
                                 x-transition:enter-start="opacity-0"
                                 x-transition:enter-end="opacity-100"
                                 x-transition:leave="transition-opacity duration-1000 ease-in-out"
                                 x-transition:leave-start="opacity-100"
                                 x-transition:leave-end="opacity-0">

                                <!-- Background Image -->
                                <img class="absolute w-full h-full inset-0 object-cover"
                                     x-bind:src="slide.imgSrc"
                                     x-bind:alt="slide.imgAlt" />

                                <!-- Overlay -->
                                <div class="absolute inset-0 bg-black/40"></div>
                                <div class="absolute inset-0 bg-gradient-to-r from-black/30 to-transparent"></div>

                                <!-- Content -->
                                <div class="absolute inset-0 z-10 flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8">
                                    <div class="max-w-4xl mx-auto">
                                        <h1 class="font-primary text-4xl md:text-6xl lg:text-7xl font-bold leading-tight text-white mb-8">
                                            <span x-text="formatTitle(slide.title).firstPart"></span>
                                            <template x-if="formatTitle(slide.title).firstPart && formatTitle(slide.title).lastPart">
                                                <br>
                                            </template>
                                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-400 to-yellow-600"
                                                  x-text="formatTitle(slide.title).lastPart || formatTitle(slide.title).firstPart"></span>
                                        </h1>

                                        <div class="flex flex-col sm:flex-row gap-4 justify-center">
                                            <a x-bind:href="slide.ctaUrl"
                                               class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold border-2 border-white text-white rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300 transform hover:scale-105">
                                                <span x-text="slide.ctaText"></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>

                    <!-- Indicators -->
                    <div class="absolute bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-3 bg-white/20 backdrop-blur-sm px-3 py-2 rounded-full"
                         role="group"
                         aria-label="slides">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button class="size-3 rounded-full transition-all duration-300"
                                    x-on:click="currentSlideIndex = index + 1"
                                    x-bind:class="[currentSlideIndex === index + 1 ? 'bg-yellow-400 scale-125' : 'bg-white/50 hover:bg-white/75']"
                                    x-bind:aria-label="'slide ' + (index + 1)">
                            </button>
                        </template>
                    </div>

                    <!-- Pause/Play Button -->
                    <button type="button"
                            class="absolute bottom-5 right-5 z-20 rounded-full bg-white/20 backdrop-blur-sm p-3 text-white/70 hover:text-white hover:bg-white/30 transition-all duration-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                            aria-label="pause carousel"
                            x-on:click="(isPaused = !isPaused), setAutoplayInterval(autoplayIntervalTime)"
                            x-bind:aria-pressed="isPaused">

                        <!-- Play Icon -->
                        <svg x-cloak x-show="isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm6.39-2.908a.75.75 0 0 1 .766.027l3.5 2.25a.75.75 0 0 1 0 1.262l-3.5 2.25A.75.75 0 0 1 8 12.25v-4.5a.75.75 0 0 1 .39-.658Z" clip-rule="evenodd" />
                        </svg>

                        <!-- Pause Icon -->
                        <svg x-cloak x-show="!isPaused" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                            <path fill-rule="evenodd" d="M2 10a8 8 0 1 1 16 0 8 8 0 0 1-16 0Zm5-2.25A.75.75 0 0 1 7.75 7h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Zm4 0a.75.75 0 0 1 .75-.75h.5a.75.75 0 0 1 .75.75v4.5a.75.75 0 0 1-.75.75h-.5a.75.75 0 0 1-.75-.75v-4.5Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            @endif
        @empty
            <!-- Message when no hero content available -->
            <div class="relative h-screen w-full bg-gradient-to-br from-gray-900 via-gray-800 to-gray-700">
                <!-- Background Pattern -->
                <div class="absolute inset-0 bg-[url('data:image/svg+xml,%3Csvg%20width=%2260%22%20height=%2260%22%20viewBox=%220%200%2060%2060%22%20xmlns=%22http://www.w3.org/2000/svg%22%3E%3Cg%20fill=%22none%22%20fill-rule=%22evenodd%22%3E%3Cg%20fill=%22%239C92AC%22%20fill-opacity=%220.1%22%3E%3Ccircle%20cx=%2230%22%20cy=%2230%22%20r=%222%22/%3E%3C/g%3E%3C/g%3E%3C/svg%3E')] opacity-20"></div>

            <!-- Content -->
            <div class="absolute inset-0 flex flex-col items-center justify-center text-center px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto">
                    <!-- Icon -->
                    <div class="mb-8">
                        <svg class="w-20 h-20 mx-auto text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>

                    <!-- Title -->
                    <h1 class="font-primary text-4xl md:text-5xl font-bold text-white mb-4">
                        No Hero Content Available
                    </h1>

                    <!-- Description -->
                    <p class="text-xl text-gray-300 mb-8 max-w-lg mx-auto">
                        The hero section is currently being updated. Please check back later or contact us for more information.
                    </p>

                    <!-- Action Button -->
                    <div class="flex justify-center">
                        <a href="#services"
                           class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold border-2 border-white text-white rounded-lg hover:bg-white hover:text-gray-900 transition-all duration-300 transform hover:scale-105">
                            View Our Services
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforelse
    </section>

    <!-- Services Section -->
    <section id="services">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
            @forelse($services as $service)
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
                                <span class="text-sm font-medium">Learn More</span>
                            </div>
                        </div>
                    </div>

                    <!-- Link -->
                    <a href="{{ route('service.detail', $service) }}" class="absolute inset-0"></a>
                </div>
            @empty
                <!-- Message when no services available -->
                <div class="col-span-4 text-center py-12">
                    <div class="bg-white p-8">
                        <svg class="w-16 h-16 mx-auto mb-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        <h3 class="font-primary text-2xl font-bold mb-2 text-gray-600">No Services Available</h3>
                        <p class="text-gray-500">
                            Our services are currently being updated. Please check back later or contact us for more information.
                        </p>
                    </div>
                </div>
            @endforelse
        </div>
    </section>

    <!-- Our Fleet Section -->
    <section id="fleet" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Our Premium Fleet</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Choose from our diverse collection of meticulously maintained aircraft, each offering unparalleled comfort, safety, and performance for your journey.
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
                                    @foreach($fleet->features as $feature)
                                        <li class="flex items-center">
                                            <svg class="w-4 h-4 mr-2" style="color: var(--color-gold);" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                            </svg>
                                            {{ $feature }}
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            <a href="{{ route('fleet.detail', $fleet) }}" class="block w-full text-center px-6 py-3 text-white rounded-lg hover:bg-opacity-90 transition-colors" style="background-color: var(--color-emerald);">
                                View Details
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full text-center py-12">
                        <svg class="mx-auto h-12 w-12 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                        </svg>
                        <h3 class="mt-2 text-sm font-medium text-gray-900">No fleets available</h3>
                        <p class="mt-1 text-sm text-gray-500">Fleet information will be displayed here once added.</p>
                    </div>
                @endforelse
            </div>

            <!-- CTA Button -->
            <div class="text-center mt-12">
                <button type="button" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                    View Complete Fleet
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- About Us Section -->
    <section id="about" class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="font-primary text-4xl font-bold mb-6" style="color: var(--color-emerald);">About Flite Charter</h2>
                    <p class="text-xl text-gray-600 mb-8">
                        With over 10 years of experience in the private aviation industry, Flite Charter has become the premier choice for luxury jet charter services.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-primary text-xl font-bold mb-2" style="color: var(--color-emerald);">Trusted Experience</h3>
                                <p class="text-gray-600">Serving thousands of corporate and individual clients with consistent and reliable service standards.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-primary text-xl font-bold mb-2" style="color: var(--color-emerald);">Professional Team</h3>
                                <p class="text-gray-600">Supported by experienced pilots and trained crew members dedicated to providing the best service.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-primary text-xl font-bold mb-2" style="color: var(--color-emerald);">Global Reach</h3>
                                <p class="text-gray-600">Serving domestic and international routes with access to over 5,000 airports worldwide.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1556388158-158ea5ccacbd?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                             alt="Flite Charter Team"
                             class="w-full h-96 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent"></div>
                        <div class="absolute bottom-8 left-8 text-white">
                            <h4 class="font-primary text-2xl font-bold mb-2">Our Mission</h4>
                            <p class="text-gray-200">To provide safe, comfortable, and unforgettable flight experiences for every journey you take.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Statistics -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 mt-16 text-center">
                <div>
                    <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">10+</div>
                    <div class="text-gray-600">Years Experience</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">500+</div>
                    <div class="text-gray-600">Successful Flights</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">50+</div>
                    <div class="text-gray-600">Available Fleet</div>
                </div>
                <div>
                    <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">100%</div>
                    <div class="text-gray-600">Safety Record</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Safety Section -->
    <section id="safety" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="font-primary text-4xl font-bold mb-4" style="color: var(--color-emerald);">Our Safety Commitment</h2>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Safety is our top priority. With the highest safety standards and strict protocols, we ensure every flight is safe and reliable.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center mb-16">
                <!-- Safety Content -->
                <div>
                    <div class="space-y-8">
                        <div class="flex items-start space-x-4">
                            <div class="w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-emerald);">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.25-1.5a4.5 4.5 0 00-9 0v1.032c0 .307-.036.607-.106.893.073.199.163.398.275.588.113.19.249.369.407.525C8.93 14.54 10.426 15 12 15s3.07-.46 4.124-1.462c.158-.156.294-.335.407-.525.112-.19.202-.389.275-.588a4.492 4.492 0 00-.106-.893V9.5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-primary text-2xl font-bold mb-3" style="color: var(--color-emerald);">International Certification</h3>
                                <p class="text-gray-600">All our fleet have international safety certifications and undergo routine inspections to ensure optimal conditions.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-primary text-2xl font-bold mb-3" style="color: var(--color-emerald);">Experienced Pilots</h3>
                                <p class="text-gray-600">Our pilot team has an average flight experience of over 5,000 hours and undergoes continuous safety training.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-16 h-16 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-brown);">
                                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-primary text-2xl font-bold mb-3" style="color: var(--color-emerald);">Premium Maintenance</h3>
                                <p class="text-gray-600">Comprehensive preventive maintenance program with certified technicians and original spare parts to maintain optimal performance.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Safety Image -->
                <div class="relative">
                    <div class="bg-gradient-to-br from-gray-100 to-gray-200 rounded-2xl overflow-hidden shadow-2xl">
                        <img src="https://images.unsplash.com/photo-1540962351504-03099e0a754b?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80"
                             alt="Aircraft Safety Check"
                             class="w-full h-96 object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-transparent to-transparent"></div>
                        <div class="absolute bottom-8 left-8 text-white">
                            <h4 class="font-primary text-2xl font-bold mb-2">Comprehensive Inspection</h4>
                            <p class="text-gray-200">Every aircraft undergoes strict inspection before each flight to ensure maximum safety.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Safety Statistics -->
            <div class="bg-gray-50 rounded-2xl p-8">
                <h3 class="font-primary text-3xl font-bold text-center mb-12" style="color: var(--color-emerald);">Our Safety Record</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">100%</div>
                        <div class="text-gray-600">Safety Record</div>
                        <div class="text-sm text-gray-500 mt-1">No Incidents</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">5000+</div>
                        <div class="text-gray-600">Pilot Flight Hours</div>
                        <div class="text-sm text-gray-500 mt-1">Average Experience</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">24/7</div>
                        <div class="text-gray-600">Technical Support</div>
                        <div class="text-sm text-gray-500 mt-1">Always Ready</div>
                    </div>
                    <div>
                        <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">ISO</div>
                        <div class="text-gray-600">Certified</div>
                        <div class="text-sm text-gray-500 mt-1">International Standards</div>
                    </div>
                </div>
            </div>

            <!-- Safety Features -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-16">
                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-emerald);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Weather Monitoring</h3>
                    <p class="text-gray-600 text-center">Real-time weather monitoring system to ensure optimal flying conditions on every route.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-gold);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.111 16.404a5.5 5.5 0 017.778 0M12 20h.01m-7.08-7.071c3.904-3.905 10.236-3.905 14.141 0M1.394 9.393c5.857-5.857 15.355-5.857 21.213 0"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Advanced Navigation</h3>
                    <p class="text-gray-600 text-center">State-of-the-art navigation technology with GPS and radar systems for high precision in every flight.</p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-lg hover:shadow-xl transition-all duration-300 border">
                    <div class="w-16 h-16 rounded-full mx-auto mb-6 flex items-center justify-center" style="background-color: var(--color-brown);">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                        </svg>
                    </div>
                    <h3 class="font-primary text-xl font-bold text-center mb-4" style="color: var(--color-emerald);">Emergency Protocols</h3>
                    <p class="text-gray-600 text-center">Comprehensive emergency protocols and trained crew to handle various emergency situations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="font-primary text-4xl font-bold mb-6" style="color: var(--color-emerald);">
                        Why Choose Flite Charter?
                    </h2>
                    <p class="text-xl text-gray-600 mb-8">
                        Experience the difference with our commitment to excellence, safety, and personalized service that elevates every journey.
                    </p>

                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-primary text-xl font-bold mb-2" style="color: var(--color-emerald);">Elite Safety Standards</h3>
                                <p class="text-gray-600">Comprehensive safety protocols and rigorous maintenance ensure the highest level of security for every flight.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-primary text-xl font-bold mb-2" style="color: var(--color-emerald);">Instant Response</h3>
                                <p class="text-gray-600">Quick turnaround times with dedicated concierge service available 24/7 for immediate assistance.</p>
                            </div>
                        </div>

                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 rounded-full flex items-center justify-center flex-shrink-0" style="background-color: var(--color-gold);">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-primary text-xl font-bold mb-2" style="color: var(--color-emerald);">Luxury Experience</h3>
                                <p class="text-gray-600">Premium amenities, personalized service, and attention to every detail for an exceptional travel experience.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-100 rounded-2xl p-8">
                    <div class="grid grid-cols-2 gap-8">
                        <div class="text-center">
                            <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">500+</div>
                            <div class="text-gray-600">Successful Flights</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">50+</div>
                            <div class="text-gray-600">Aircraft Available</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">24/7</div>
                            <div class="text-gray-600">Customer Support</div>
                        </div>
                        <div class="text-center">
                            <div class="text-4xl font-bold mb-2" style="color: var(--color-emerald);">100%</div>
                            <div class="text-gray-600">Safety Record</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 relative">
        <!-- Background Image -->
        <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('https://images.unsplash.com/photo-1436491865332-7a61a109cc05?ixlib=rb-4.0.3&auto=format&fit=crop&w=2000&q=80');"></div>
        
        <!-- Overlay -->
        <div class="absolute inset-0" style="background-color: var(--color-emerald); opacity: 0.9;"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-black/20 to-transparent"></div>

        <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8 relative z-10">
            <h2 class="font-primary text-4xl font-bold text-white mb-6">
                Ready to Experience Luxury Aviation?
            </h2>
            <p class="text-xl text-gray-200 mb-8">
                Join thousands of satisfied clients who trust Flite Charter for their premium air travel needs.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="#" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold text-white rounded-lg hover:bg-opacity-90 transition-all duration-300 transform hover:scale-105" style="background-color: var(--color-gold);">
                    Book Your Flight Now
                    <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path>
                    </svg>
                </a>
                <a href="tel:+6281298214649" class="inline-flex items-center justify-center px-8 py-4 text-lg font-semibold border-2 border-white text-white rounded-lg hover:bg-white hover:text-[var(--color-emerald)] transition-all duration-300">
                    <svg class="mr-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                    Call Now: +62 812 9821 4649
                </a>
            </div>
        </div>
    </section>
</x-layouts.main>
