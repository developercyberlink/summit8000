@extends('themes.default.common.master')
@section('content')
<!-- hero section -->
<section class="relative h-screen w-full overflow-hidden">
    <!-- Swiper -->
    <div class="hero h-full w-full">
        <div class="swiper-wrapper">

            <!-- Slide 1 -->
            <div class="swiper-slide relative h-full w-full">
                <img src="{{ asset('theme-assets/hero/1.jpg') }}" loading="lazy"
                    class="lazy-image absolute inset-0 w-full h-full object-cover object-center"
                    alt="Manaslu Base Camp">
                <div class="absolute inset-0 bg-black/40"></div>

                <!-- Bottom Caption -->
                <div class="absolute bottom-0 left-0 w-full px-4 sm:px-8 lg:px-44 py-6 sm:py-10 z-30">
                    <div
                        class="flex flex-col md:flex-row items-center justify-between gap-4 md:gap-0 text-center md:text-left">
                        <div class="flex items-center gap-2 text-white flex-1 justify-center md:justify-start">
                            <svg class="w-5 h-5 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-base font-medium tracking-wide">Manaslu Base Camp</span>
                        </div>

                        <div class="flex-1 flex justify-center">
                            <a href="trip-details.php" class="border border-white/60 hover:border-white hover:bg-white/10
                                      text-white px-8 py-2 rounded-xl text-sm font-medium
                                      transition-all backdrop-blur-sm">
                                Explore Manaslu
                            </a>
                        </div>

                        <div class="flex-1 hidden md:block"></div>
                    </div>
                </div>
            </div>

            <!-- Slide 2 -->
            <div class="swiper-slide relative h-full w-full">
                <img src="{{ asset('theme-assets/hero/2.jpg') }}" loading="lazy"
                    class="lazy-image absolute inset-0 w-full h-full object-cover object-center"
                    alt="Everest Base Camp">
                <div class="absolute inset-0 bg-black/40"></div>

                <div class="absolute bottom-0 left-0 w-full px-4 sm:px-8 lg:px-44 py-6 sm:py-10 z-30">
                    <div
                        class="flex flex-col md:flex-row items-center justify-between gap-4 md:gap-0 text-center md:text-left">
                        <div class="flex items-center gap-2 text-white flex-1 justify-center md:justify-start">
                            <svg class="w-5 h-5 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-base font-medium tracking-wide">Everest Base Camp (EBC)</span>
                        </div>

                        <div class="flex-1 flex justify-center">
                            <a href="trip-details.php" class="border border-white/60 hover:border-white hover:bg-white/10
                                      text-white px-8 py-2 rounded-xl text-sm font-medium
                                      transition-all backdrop-blur-sm">
                                Explore Everest
                            </a>
                        </div>

                        <div class="flex-1 hidden md:block"></div>
                    </div>
                </div>
            </div>

            <!-- Slide 3 -->
            <div class="swiper-slide relative h-full w-full">
                <img src="assets/hero/3.jpg" loading="lazy"
                    class="lazy-image absolute inset-0 w-full h-full object-cover object-center"
                    alt="Annapurna Base Camp">
                <div class="absolute inset-0 bg-black/40"></div>

                <div class="absolute bottom-0 left-0 w-full px-4 sm:px-8 lg:px-44 py-6 sm:py-10 z-30">
                    <div
                        class="flex flex-col md:flex-row items-center justify-between gap-4 md:gap-0 text-center md:text-left">
                        <div class="flex items-center gap-2 text-white flex-1 justify-center md:justify-start">
                            <svg class="w-5 h-5 text-brand" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                            <span class="text-base font-medium tracking-wide">Annapurna Base Camp (ABC)</span>
                        </div>

                        <div class="flex-1 flex justify-center">
                            <a href="trip-details.php" class="border border-white/60 hover:border-white hover:bg-white/10
                                      text-white px-8 py-2 rounded-xl text-sm font-medium
                                      transition-all backdrop-blur-sm">
                                Explore Annapurna
                            </a>
                        </div>

                        <div class="flex-1 hidden md:block"></div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Navigation buttons -->
        <div class="absolute bottom-6 right-6 sm:right-28 flex items-center space-x-4 z-40">
            <button id="custom-prev"
                class="w-10 h-10 rounded-full border border-white/60 hover:border-white hover:bg-white/10 text-white backdrop-blur-sm flex items-center justify-center">
                <i class="fa fa-chevron-left text-sm"></i>
            </button>
            <button id="custom-next"
                class="w-10 h-10 rounded-full border border-white/60 hover:border-white hover:bg-white/10 text-white backdrop-blur-sm flex items-center justify-center">
                <i class="fa fa-chevron-right text-sm"></i>
            </button>
        </div>
    </div>

    <!-- Center Static Content -->
    <div class="absolute inset-0 flex flex-col items-center justify-center px-4 z-30 pointer-events-none">
        <h1
            class="text-white text-5xl sm:text-4xl md:text-6xl lg:text-[82px] font-extrabold text-center mb-7 max-w-4xl drop-shadow-2xl">
            Adventure Travel Guided by Experts
        </h1>

        <div class="pointer-events-auto w-full">
            <form class="max-w-3xl mx-auto w-full px-4 sm:px-0">
                <label for="search" class="block mb-2.5 text-sm font-medium text-heading sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-body" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-width="2"
                                d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input type="search" id="search"
                        class="block w-full h-[68px] p-4 ps-9 bg-white border-2 outline-0 text-heading text-sm rounded-xl focus:ring-blue-300 focus:border-blue-300 shadow-xs placeholder:text-base"
                        placeholder="Search" required />
                    <button type="button"
                        class="absolute end-2 bottom-2 h-[54px] text-white bg-blue-400 hover:bg-blue-500 box-border border border-transparent focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-xl text-base px-4 py-1.5 focus:outline-none">Search</button>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- end hero section -->
<!-- section -->
<section class="py-16 bg-white pattern-white relative">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Large Card: 8000m -->
            <a href="trip-list.php"
                class="group relative overflow-hidden rounded-2xl h-[400px] lg:col-span-2 cursor-pointer transition-all duration-500">
                <img src="assets/trip/8000.jpg" alt="8000m Expedition" loading="lazy"
                    class="lazy-image absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <div class="flex items-end justify-between">
                        <div>
                            <h3 class="text-3xl font-bold transition-transform duration-500 group-hover:-translate-y-2">
                                8000m</h3>
                            <!-- using hidden and group-hover:block for description -->
                            <div class="hidden group-hover:block transition-all duration-500 mt-2">
                                <p class="text-base text-gray-200 line-clamp-2 max-w-xl">
                                    Challenge the world's highest mountains with expertly guided 8000-meter expeditions.
                                    From Everest to other Himalayan giants.
                                </p>
                            </div>
                        </div>
                        <!-- button is now a visible circle icon only -->
                        <div>
                            <button
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white/50 bg-white/10 hover:bg-white hover:text-black transition-all duration-300 backdrop-blur-sm">
                                <i class="fas fa-angle-right text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Card: 7000m -->
            <a href="trip-list.php" class="group relative overflow-hidden rounded-2xl h-[400px] cursor-pointer">
                <img src="assets/trip/7000.jpg" alt="7000m Expedition" loading="lazy"
                    class="lazy-image absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500"></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                    <div class="flex items-end justify-between">
                        <div>
                            <h3 class="text-2xl font-bold transition-transform duration-500 group-hover:-translate-y-2">
                                7000m</h3>
                            <!-- description hidden until hover -->
                            <div class="hidden group-hover:block mt-2">
                                <p class="text-base text-gray-200 line-clamp-2 max-w-md">
                                    Perfect stepping stones for high-altitude climbers seeking to test their
                                    limits.Perfect stepping stones for high-altitude climbers seeking to test their
                                    limits.
                                </p>
                            </div>
                        </div>
                        <div>
                            <button
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white/50 bg-white/10 hover:bg-white hover:text-black transition-all duration-300 backdrop-blur-sm">
                                <i class="fas fa-angle-right text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Small Card: 6000m -->
            <a href="trip-list.php" class="group relative overflow-hidden rounded-2xl h-[300px] cursor-pointer">
                <img src="assets/trip/6000.jpg" alt="6000m Peaks" loading="lazy"
                    class="lazy-image absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <div class="flex items-end justify-between">
                        <div>
                            <h3 class="text-xl font-bold transition-transform duration-500 group-hover:-translate-y-2">
                                6000m</h3>
                            <div class="hidden group-hover:block mt-1">
                                <p class="text-base text-gray-200 line-clamp-2 max-w-md">
                                    Accessible yet challenging peaks for
                                    intermediates.</p>
                            </div>
                        </div>
                        <div>
                            <button
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white/50 bg-white/10 hover:bg-white hover:text-black transition-all duration-300 backdrop-blur-sm">
                                <i class="fas fa-angle-right text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Small Card: 7Summit -->
            <a href="trip-list.php" class="group relative overflow-hidden rounded-2xl h-[300px] cursor-pointer">
                <img src="assets/trip/7summit.jpg" alt="7Summit" loading="lazy"
                    class="lazy-image absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <div class="flex items-end justify-between">
                        <div>
                            <h3 class="text-xl font-bold transition-transform duration-500 group-hover:-translate-y-2">
                                7Summit</h3>
                            <div class="hidden group-hover:block mt-1">
                                <p class="text-base text-gray-200 line-clamp-2 max-w-md">
                                    The quest for the highest peak on every
                                    continent.</p>
                            </div>
                        </div>
                        <div>
                            <button
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white/50 bg-white/10 hover:bg-white hover:text-black transition-all duration-300 backdrop-blur-sm">
                                <i class="fas fa-angle-right text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </a>

            <!-- Small Card: 14 Peaks -->
            <a href="trip-list.php" class="group relative overflow-hidden rounded-2xl h-[300px] cursor-pointer">
                <img src="assets/trip/14peaks.jpg" alt="14 Peaks" loading="lazy"
                    class="lazy-image absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500"></div>
                <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                    <div class="flex items-end justify-between">
                        <div>
                            <h3 class="text-xl font-bold transition-transform duration-500 group-hover:-translate-y-2">
                                14 Peaks</h3>
                            <div class="hidden group-hover:block mt-1">
                                <p class="text-base text-gray-200 line-clamp-2 max-w-md">
                                    Ultimate challenge for high-altitude climbers.</p>
                            </div>
                        </div>
                        <div>
                            <button
                                class="flex items-center justify-center w-10 h-10 rounded-full border border-white/50 bg-white/10 hover:bg-white hover:text-black transition-all duration-300 backdrop-blur-sm">
                                <i class="fas fa-angle-right text-sm"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="   relative overflow-hidden rounded-2xl   cursor-pointer extra-card hidden
         opacity-0 translate-y-6 scale-95
         transition-all duration-500 ease-out extra-card  mt-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">


                <!-- Small Card:  Treks in Nepal -->
                <a href="trip-list.php" class="group relative overflow-hidden rounded-2xl h-[300px] cursor-pointer">
                    <img src="assets/trip/treks-in-nepal.jpg" alt="6000m Peaks" loading="lazy"
                        class="lazy-image absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <div class="flex items-end justify-between">
                            <div>
                                <h3
                                    class="text-xl font-bold transition-transform duration-500 group-hover:-translate-y-2">
                                    Treks in Nepal</h3>
                                <div class="hidden group-hover:block mt-1">
                                    <p class="text-base text-gray-200 line-clamp-2 max-w-md">
                                        Accessible yet challenging peaks for
                                        intermediates.</p>
                                </div>
                            </div>
                            <div>
                                <button
                                    class="flex items-center justify-center w-10 h-10 rounded-full border border-white/50 bg-white/10 hover:bg-white hover:text-black transition-all duration-300 backdrop-blur-sm">
                                    <i class="fas fa-angle-right "></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Small Card: Popular Treks -->
                <a href="trip-list.php" class="group relative overflow-hidden rounded-2xl h-[300px] cursor-pointer">
                    <img src="assets/trip/popular-treks.jpg" alt="7Summit" loading="lazy"
                        class="lazy-image absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <div class="flex items-end justify-between">
                            <div>
                                <h3
                                    class="text-xl font-bold transition-transform duration-500 group-hover:-translate-y-2">
                                    Popular Treks</h3>
                                <div class="hidden group-hover:block mt-1">
                                    <p class="text-base text-gray-200 line-clamp-2 max-w-md">
                                        The quest for the highest peak on every
                                        continent.</p>
                                </div>
                            </div>
                            <div>
                                <button
                                    class="flex items-center justify-center w-10 h-10 rounded-full border border-white/50 bg-white/10 hover:bg-white hover:text-black transition-all duration-300 backdrop-blur-sm">
                                    <i class="fas fa-angle-right "></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Small Card: Nepal Tours -->
                <a href="trip-list.php" class="group relative overflow-hidden rounded-2xl h-[300px] cursor-pointer">
                    <img src="assets/trip/nepal-tours.jpg" alt="14 Peaks" loading="lazy"
                        class="lazy-image absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <div class="flex items-end justify-between">
                            <div>
                                <h3
                                    class="text-xl font-bold transition-transform duration-500 group-hover:-translate-y-2">
                                    Nepal Tours</h3>
                                <div class="hidden group-hover:block mt-1">
                                    <p class="text-base text-gray-200 line-clamp-2 max-w-md">
                                        Ultimate challenge for high-altitude climbers.</p>
                                </div>
                            </div>
                            <div>
                                <button
                                    class="flex items-center justify-center w-10 h-10 rounded-full border border-white/50 bg-white/10 hover:bg-white hover:text-black transition-all duration-300 backdrop-blur-sm">
                                    <i class="fas fa-angle-right "></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- Small Card: Bhutan Tours -->
                <a href="trip-list.php" class="group relative overflow-hidden rounded-2xl h-[300px] cursor-pointer">
                    <img src="assets/trip/bhutan-tours.jpg" alt="14 Peaks" loading="lazy"
                        class="lazy-image absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <div class="flex items-end justify-between">
                            <div>
                                <h3
                                    class="text-xl font-bold transition-transform duration-500 group-hover:-translate-y-2">
                                    Bhutan Tours</h3>
                                <div class="hidden group-hover:block mt-1">
                                    <p class="text-base text-gray-200 line-clamp-2 max-w-md">
                                        Ultimate challenge for high-altitude climbers.</p>
                                </div>
                            </div>
                            <div>
                                <button
                                    class="flex items-center justify-center w-10 h-10 rounded-full border border-white/50 bg-white/10 hover:bg-white hover:text-black transition-all duration-300 backdrop-blur-sm">
                                    <i class="fas fa-angle-right "></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Small Card: Tibet Tours -->
                <a href="trip-list.php" class="group relative overflow-hidden rounded-2xl h-[300px] cursor-pointer">
                    <img src="assets/trip/tibet-tours.jpg" alt="14 Peaks" loading="lazy"
                        class="lazy-image absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <div class="flex items-end justify-between">
                            <div>
                                <h3
                                    class="text-xl font-bold transition-transform duration-500 group-hover:-translate-y-2">
                                    Tibet Tours</h3>
                                <div class="hidden group-hover:block mt-1">
                                    <p class="text-base text-gray-200 line-clamp-2 max-w-md">
                                        Ultimate challenge for high-altitude climbers.</p>
                                </div>
                            </div>
                            <div>
                                <button
                                    class="flex items-center justify-center w-10 h-10 rounded-full border border-white/50 bg-white/10 hover:bg-white hover:text-black transition-all duration-300 backdrop-blur-sm">
                                    <i class="fas fa-angle-right "></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </a>

                <!-- Small Card: India Tours -->
                <a href="trip-list.php" class="group relative overflow-hidden rounded-2xl h-[300px] cursor-pointer">
                    <img src="assets/trip/india-tours.jpg" alt="14 Peaks" loading="lazy"
                        class="lazy-image absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                    <div class="absolute inset-0 bg-black/30 group-hover:bg-black/60 transition-colors duration-500">
                    </div>
                    <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
                        <div class="flex items-end justify-between">
                            <div>
                                <h3
                                    class="text-xl font-bold transition-transform duration-500 group-hover:-translate-y-2">
                                    India Tours</h3>
                                <div class="hidden group-hover:block mt-1">
                                    <p class="text-base text-gray-200 line-clamp-2 max-w-md">
                                        Ultimate challenge for high-altitude climbers.</p>
                                </div>
                            </div>
                            <div>
                                <button
                                    class="flex items-center justify-center w-10 h-10 rounded-full border border-white/50 bg-white/10 hover:bg-white hover:text-black transition-all duration-300 backdrop-blur-sm">
                                    <i class="fas fa-angle-right "></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </a>


            </div>
        </div>

        <!-- Show More Button -->


        <div class="mt-12 flex item-center justify-center">
            <!-- CTA Button -->
            <button id="showMoreBtn" class="hidden sm:inline-flex text-white bg-brand-400 hover:bg-brand-500
               font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm">
                Show More

            </button>
        </div>
    </div>
</section>
<!-- end section -->
<!-- Section: Best Seller Trips -->
<section class="py-16 pattern-light bg-brand-50 relative">
    <div class="container">
        <div class="flex justify-between items-end mb-10">
            <div>
                <p class="text-sky-500 font-bold text-xs uppercase tracking-widest flex items-center mb-2">
                    <span class="w-8 h-[2px] bg-sky-500 mr-2"></span>
                    Trending Holidays
                    <!-- <span class="w-8 h-[2px] bg-sky-500 ml-2"></span> -->
                </p>
                <h2 class="text-4xl font-extrabold text-slate-900">Best Seller Trips</h2>
            </div>
            <div class="flex gap-3">
                <!-- Previous Button -->
                <button
                    class="prevBtn w-10 h-10 rounded-full bg-white border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-blue-500 hover:text-white transition-all duration-300 shadow-sm">
                    <i class="fa fa-chevron-left text-sm"></i>
                </button>

                <!-- Next Button -->
                <button
                    class="nextBtn w-10 h-10 rounded-full bg-white border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-blue-500 hover:text-white transition-all duration-300 shadow-sm">
                    <i class="fa fa-chevron-right text-sm"></i>
                </button>
            </div>
        </div>

        <!-- Grid of Cards -->
        <!-- Swiper Container -->
        <div class="sliderContainer swiper  w-full ">
            <div class="swiper-wrapper  ">

                <!--  -->
                <div class="swiper-slide">
                    <a href="trip-details.php"
                        class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                        <div class="relative h-64 overflow-hidden">
                            <img src="assets/trip/1.jpg" alt="Everest" loading="lazy"
                                class="lazy-image w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-1 mb-2">
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star-half text-yellow-400 text-xs"></i>
                                <span class="text-slate-400 text-xs ml-1">1547 reviews</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Everest Base Camp (EBC)</h3>
                            <div
                                class="flex justify-between items-center text-xs text-slate-500 mb-6 pb-6 border-b border-slate-100">
                                <span class="flex items-center gap-1 text-xs">
                                    <img src="assets/icons/map-point.svg" class="h-4" alt=""> Nepal,
                                    Khumbu</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/clock.svg" class="h-4"
                                        alt=""> 50
                                    Days</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/summer.svg" class="h-4"
                                        alt="">
                                    Autumn</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-sm text-slate-400 font-medium">50 days from</p>
                                    <p class="text-xl font-bold text-slate-900">US$ 1350</p>
                                </div>
                                <button
                                    class="text-white bg-brand-400 hover:bg-brand-500  font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm">More
                                    Info</button>
                            </div>
                        </div>
                    </a>
                </div>
                <!--  -->
                <!--  -->
                <div class="swiper-slide">
                    <a href="trip-details.php"
                        class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                        <div class="relative h-64 overflow-hidden">
                            <img src="assets/trip/2.jpg" alt="Everest" loading="lazy"
                                class="lazy-image w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-1 mb-2">
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star-half text-yellow-400 text-xs"></i>
                                <span class="text-slate-400 text-xs ml-1">4.0 (10 reviews)</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">North Everest Express Expedition</h3>
                            <div
                                class="flex justify-between items-center text-xs text-slate-500 mb-6 pb-6 border-b border-slate-100">
                                <span class="flex items-center gap-1 text-xs">
                                    <img src="assets/icons/map-point.svg" class="h-4" alt=""> Nepal,
                                    Khumbu</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/clock.svg" class="h-4"
                                        alt=""> 33
                                    Days</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/spring.svg" class="h-4"
                                        alt="">
                                    Spring</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-sm text-slate-400 font-medium">33 days from</p>
                                    <p class="text-xl font-bold text-slate-900">US$ 999</p>
                                </div>
                                <button
                                    class="text-white bg-brand-400 hover:bg-brand-500  font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm">More
                                    Info</button>
                            </div>
                        </div>
                    </a>
                </div>
                <!--  -->
                <!--  -->
                <div class="swiper-slide">
                    <a href="trip-details.php"
                        class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                        <div class="relative h-64 overflow-hidden">
                            <img src="assets/trip/3.jpg" alt="Everest" loading="lazy"
                                class="lazy-image w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-1 mb-2">
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star-half text-yellow-400 text-xs"></i>
                                <span class="text-slate-400 text-xs ml-1">4.5 (500 reviews)</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Mt. K2 Expedition</h3>
                            <div
                                class="flex justify-between items-center text-xs text-slate-500 mb-6 pb-6 border-b border-slate-100">
                                <span class="flex items-center gap-1 text-xs">
                                    <img src="assets/icons/map-point.svg" class="h-4" alt=""> Nepal,
                                    Khumbu</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/clock.svg" class="h-4"
                                        alt=""> 40
                                    Days</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/summer.svg" class="h-4"
                                        alt="">
                                    Summer</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-sm text-slate-400 font-medium">40 days from</p>
                                    <p class="text-xl font-bold text-slate-900">US$ 1599</p>
                                </div>
                                <button
                                    class="text-white bg-brand-400 hover:bg-brand-500  font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm">More
                                    Info</button>

                            </div>
                        </div>
                    </a>
                </div>
                <!--  -->
                <!--  -->
                <div class="swiper-slide">
                    <a href="trip-details.php"
                        class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                        <div class="relative h-64 overflow-hidden">
                            <img src="assets/trip/2.jpg" alt="Everest" loading="lazy"
                                class="lazy-image w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-1 mb-2">
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star-half text-yellow-400 text-xs"></i>
                                <span class="text-slate-400 text-xs ml-1">4.0 (10 reviews)</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">North Everest Express Expedition</h3>
                            <div
                                class="flex justify-between items-center text-xs text-slate-500 mb-6 pb-6 border-b border-slate-100">
                                <span class="flex items-center gap-1 text-xs">
                                    <img src="assets/icons/map-point.svg" class="h-4" alt=""> Nepal,
                                    Khumbu</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/clock.svg" class="h-4"
                                        alt=""> 33
                                    Days</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/spring.svg" class="h-4"
                                        alt="">
                                    Spring</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-sm text-slate-400 font-medium">33 days from</p>
                                    <p class="text-xl font-bold text-slate-900">US$ 999</p>
                                </div>
                                <button
                                    class="text-white bg-brand-400 hover:bg-brand-500  font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm">More
                                    Info</button>
                            </div>
                        </div>
                    </a>
                </div>
                <!--  -->

            </div>
        </div>
    </div>
</section>

<!-- Section: About Summit 8000 -->
<section class="relative pt-16 pb-0 bg-brand-50">
    <div class="max-w-4xl mx-auto px-4 text-center relative z-10">
        <p class="text-sky-500 font-bold text-xs uppercase tracking-widest flex items-center justify-center mb-4">
            <span class="w-8 h-[2px] bg-sky-500 mr-2"></span>
            Who we are?
            <span class="w-8 h-[2px] bg-sky-500 ml-2"></span>
        </p>
        <h2 class="text-4xl font-extrabold text-slate-900 mb-12 leading-tight">
            Expand Your Horizons. Reach Higher.<br>Explore with Summit 8000.
        </h2>

        <div class="space-y-6 text-slate-600 leading-relaxed max-w-3xl mx-auto">
            <p>
                For decades, Nepal has inspired adventurers with its towering Himalayan peaks, rich cultures, and
                legendary trekking routes. Since the early days of mountaineering in the 1950s, explorers from across
                the globe have been drawn to this land of high mountains and timeless traditions.
            </p>
            <p>
                Summit 8000 was founded with a deep passion for the Himalayas and a commitment to sharing Nepal's most
                extraordinary landscapes with the world. Built by experienced mountain professionals, the company
                reflects generations of local knowledge, strong community connections, and an unwavering respect for the
                mountains. Our roots run deep in the Himalayas, allowing us to offer authentic journeys that go far
                beyond ordinary travel experiences.
            </p>
            <p>
                Recognized among the top tour and trekking companies in Nepal, Summit 8000 has helped thousands of
                trekkers and climbers transform lifelong dreams into unforgettable achievements. Every journey with us
                is designed to leave you with lasting memories, meaningful cultural encounters, and a true sense of
                accomplishment.
            </p>
        </div>

        <div class="mt-10 mb-20">
            <a href="who-we-are.php" class=" text-white bg-brand-400 hover:bg-brand-500
               font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm">
                Read more
            </a>
        </div>
    </div>

    <!-- Mountain Background Bottom -->
    <div class="w-full h-[500px] mt-[-100px] bg-bottom bg-no-repeat bg-cover pointer-events-none"
        style="background-image: url('assets/about-banner.jpg'); opacity: 0.4; mix-blend-mode: multiply;">
    </div>
    <div class="absolute bottom-0 left-0 w-full h-24 bg-gradient-to-t from-white to-transparent"></div>
</section>

<!-- section -->
<section class="bg-brand-800 pattern-dark relative pt-16 pb-32 px-4 md:px-8">
    <div class="container">
        <div class=" flex flex-col gap-4
             md:flex-row md:items-end md:justify-between mb-8">
            <div>
                <h3 class="text-brand-400 text-sm font-semibold flex items-center gap-2 mb-4">Testimonials <span
                        class="w-8 h-[2px] bg-brand-400"></span>
                </h3>
                <h1 class="text-4xl md:text-5xl font-bold text-white tracking-tight"> Stories from Happy Trekkers</h1>
            </div>
            <!-- Actions -->
            <div>
                <div class="flex flex-col sm:flex-row gap-3 w-full md:w-auto">
                    <a href="reviews.php" class="text-center
                 bg-brand-400 hover:bg-brand-500
                 text-white
                 font-medium
                 rounded-xl
                 px-5 py-2.5
                 shadow-sm transition">
                        All Stories
                    </a>

                    <!-- <select class="w-full sm:w-auto
                 px-5 py-2.5 pr-8 block
                 text-xs
                 border border-gray-200
                 rounded-xl
                 focus:ring-2 focus:ring-brand-400 outline-none">
                        <option>Select Month, Year</option>
                        <option>Dec, 2025</option>
                        <option>Jan, 2026</option>
                        <option>Feb, 2026</option>
                    </select> -->
                </div>
            </div>
        </div>




        <!-- Table -->
        <div class="relative bg-transparent  rounded-2xl shadow-none   overflow-hidden overflow-hidden -mb-96">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">



                <div class="bg-gray-50 p-6 rounded-2xl border  relative overflow-hidden">
                    <i class="fas fa-quote-right absolute top-4 right-4 text-6xl text-gray-200"></i>
                    <h3 class="font-bold text-xl mb-4 pr-5 text-brand-900">Everest Base Camp – An Unforgettable
                        Himalayan Journey</h3>
                    <div class="flex items-center text-yellow-400 text-sm mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="ml-2 text-gray-400 font-normal">Excellent</span>
                    </div>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-4">
                        <p>My husband (52 years old) and I (50 years old) completed the Everest Base Camp Trek from
                            April 6 to April 18. The weather was mostly clear, though we experienced some light snow
                            around Dingboche. Despite the challenges, the views of Everest, Nuptse, and Ama Dablam were
                            breathtaking and made every step worthwhile.</p>
                        <p>Our guide, <b>Pemba Sherpa</b>, played a vital role in our success. He was extremely caring,
                            knowledgeable, and always attentive to our pace and well-being. His encouragement and
                            positive attitude kept our spirits high throughout the trek. </p>
                    </div>
                    <div class="mt-8 flex items-center">
                        <div
                            class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-500">
                            S</div>
                        <div class="ml-4">
                            <p class="text-sm font-bold">Mrs. Susan Miller</p>
                            <p class="text-xs text-gray-400 uppercase">20th April 2025</p>
                        </div>
                    </div>
                </div>
                <div class="bg-gray-50 p-6 rounded-2xl border  relative overflow-hidden">
                    <i class="fas fa-quote-right absolute top-4 right-4 text-6xl text-gray-200"></i>
                    <h3 class="font-bold text-xl mb-4 pr-5 text-brand-900">Everest Base Camp – A Truly Rewarding Trek
                    </h3>
                    <div class="flex items-center text-yellow-400 text-sm mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="ml-2 text-gray-400 font-normal">Excellent</span>
                    </div>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-4">
                        <p>I (45 years old) joined the Everest Base Camp Trek from March 22 to April 3 as a solo
                            traveler. While the trail was busy in some sections, the overall experience was incredibly
                            rewarding. The gradual ascent allowed proper acclimatization, and the mountain scenery was
                            beyond my expectations.</p>
                        <p>I am especially grateful to our guide, <b>Lakpa Tamang</b>, whose professionalism and calm
                            demeanor made the trek smooth and enjoyable. He was always ready to help and share insights
                            about local culture and the region. </p>
                    </div>
                    <div class="mt-8 flex items-center">
                        <div
                            class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-500">
                            D</div>
                        <div class="ml-4">
                            <p class="text-sm font-bold">Mr. David Thompson</p>
                            <p class="text-xs text-gray-400 uppercase">30th October 2025</p>
                        </div>
                    </div>
                </div>

                <div class="bg-gray-50 p-6 rounded-2xl border relative overflow-hidden">
                    <i class="fas fa-quote-right absolute top-4 right-4 text-6xl text-gray-200"></i>
                    <h3 class="font-bold text-xl mb-4 pr-5 text-brand-900">Everest Base Camp – An Unforgettable
                        Himalayan Journey</h3>
                    <div class="flex items-center text-yellow-400 text-sm mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <span class="ml-2 text-gray-400 font-normal">Excellent</span>
                    </div>
                    <div class="text-sm text-gray-600 leading-relaxed space-y-4">
                        <p>My husband (52 years old) and I (50 years old) completed the Everest Base Camp Trek from
                            April 6 to April 18. The weather was mostly clear, though we experienced some light snow
                            around Dingboche. Despite the challenges, the views of Everest, Nuptse, and Ama Dablam were
                            breathtaking and made every step worthwhile.</p>
                        <p>Our guide, <b>Pemba Sherpa</b>, played a vital role in our success. He was extremely caring,
                            knowledgeable, and always attentive to our pace and well-being. His encouragement and
                            positive attitude kept our spirits high throughout the trek. </p>
                    </div>
                    <div class="mt-8 flex items-center">
                        <div
                            class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-500">
                            S</div>
                        <div class="ml-4">
                            <p class="text-sm font-bold">Mrs. Susan Miller</p>
                            <p class="text-xs text-gray-400 uppercase">20th April 2025</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
</section>
<!-- end section -->

<!-- section -->
<section class="section pt-80 pb-20 bg-brand-50">
    <div class="container">
        <div class="flex justify-between items-end mb-10">
            <div>
                <p class="text-sky-500 font-bold text-xs uppercase tracking-widest flex items-center mb-2">
                    <span class="w-8 h-[2px] bg-sky-500 mr-2"></span>
                    TRAVELLERS' CHOICE
                    <!-- <span class="w-8 h-[2px] bg-sky-500 ml-2"></span> -->
                </p>
                <h2 class="text-4xl font-extrabold text-slate-900">Luxury Trips</h2>
            </div>
            <div class="flex gap-3">
                <!-- Previous Button -->
                <button
                    class="prevBtn w-10 h-10 rounded-full bg-white border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-blue-500 hover:text-white transition-all duration-300 shadow-sm">
                    <i class="fa fa-chevron-left text-sm"></i>
                </button>

                <!-- Next Button -->
                <button
                    class="nextBtn w-10 h-10 rounded-full bg-white border border-gray-300 flex items-center justify-center text-gray-500 hover:bg-blue-500 hover:text-white transition-all duration-300 shadow-sm">
                    <i class="fa fa-chevron-right text-sm"></i>
                </button>
            </div>
        </div>

        <!-- Grid of Cards -->
        <!-- Swiper Container -->
        <div class="sliderContainer swiper  w-full ">
            <div class="swiper-wrapper">

                <!--  -->
                <div class="swiper-slide">
                    <a href="trip-details.php"
                        class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                        <div class="relative h-64 overflow-hidden">
                            <img src="assets/trip/1.jpg" alt="Everest" loading="lazy"
                                class="lazy-image w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-1 mb-2">
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star-half text-yellow-400 text-xs"></i>
                                <span class="text-slate-400 text-xs ml-1">1547 reviews</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Everest Base Camp (EBC)</h3>
                            <div
                                class="flex justify-between items-center text-xs text-slate-500 mb-6 pb-6 border-b border-slate-100">
                                <span class="flex items-center gap-1 text-xs">
                                    <img src="assets/icons/map-point.svg" class="h-4" alt=""> Nepal,
                                    Khumbu</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/clock.svg" class="h-4"
                                        alt=""> 50
                                    Days</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/summer.svg" class="h-4"
                                        alt="">
                                    Autumn</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-sm text-slate-400 font-medium">50 days from</p>
                                    <p class="text-xl font-bold text-slate-900">US$ 1350</p>
                                </div>
                                <button
                                    class="text-white bg-brand-400 hover:bg-brand-500  font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm">More
                                    Info</button>
                            </div>
                        </div>
                    </a>
                </div>
                <!--  -->
                <!--  -->
                <div class="swiper-slide">
                    <a href="trip-details.php"
                        class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                        <div class="relative h-64 overflow-hidden">
                            <img src="assets/trip/2.jpg" alt="Everest" loading="lazy"
                                class="lazy-image w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-1 mb-2">
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star-half text-yellow-400 text-xs"></i>
                                <span class="text-slate-400 text-xs ml-1">4.0 (10 reviews)</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">North Everest Express Expedition</h3>
                            <div
                                class="flex justify-between items-center text-xs text-slate-500 mb-6 pb-6 border-b border-slate-100">
                                <span class="flex items-center gap-1 text-xs">
                                    <img src="assets/icons/map-point.svg" class="h-4" alt=""> Nepal,
                                    Khumbu</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/clock.svg" class="h-4"
                                        alt=""> 33
                                    Days</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/spring.svg" class="h-4"
                                        alt="">
                                    Spring</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-sm text-slate-400 font-medium">33 days from</p>
                                    <p class="text-xl font-bold text-slate-900">US$ 999</p>
                                </div>
                                <button
                                    class="text-white bg-brand-400 hover:bg-brand-500  font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm">More
                                    Info</button>
                            </div>
                        </div>
                    </a>
                </div>
                <!--  -->
                <!--  -->
                <div class="swiper-slide">
                    <a href="trip-details.php"
                        class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                        <div class="relative h-64 overflow-hidden">
                            <img src="assets/trip/3.jpg" alt="Everest" loading="lazy"
                                class="lazy-image w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-1 mb-2">
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star-half text-yellow-400 text-xs"></i>
                                <span class="text-slate-400 text-xs ml-1">4.5 (500 reviews)</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">Mt. K2 Expedition</h3>
                            <div
                                class="flex justify-between items-center text-xs text-slate-500 mb-6 pb-6 border-b border-slate-100">
                                <span class="flex items-center gap-1 text-xs">
                                    <img src="assets/icons/map-point.svg" class="h-4" alt=""> Nepal,
                                    Khumbu</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/clock.svg" class="h-4"
                                        alt=""> 40
                                    Days</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/summer.svg" class="h-4"
                                        alt="">
                                    Summer</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-sm text-slate-400 font-medium">40 days from</p>
                                    <p class="text-xl font-bold text-slate-900">US$ 1599</p>
                                </div>
                                <button
                                    class="text-white bg-brand-400 hover:bg-brand-500  font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm">More
                                    Info</button>

                            </div>
                        </div>
                    </a>
                </div>
                <!--  -->
                <!--  -->
                <div class="swiper-slide">
                    <a href="trip-details.php"
                        class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                        <div class="relative h-64 overflow-hidden">
                            <img src="assets/trip/2.jpg" alt="Everest" loading="lazy"
                                class="lazy-image w-full h-full object-cover">
                        </div>
                        <div class="p-5">
                            <div class="flex items-center gap-1 mb-2">
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star text-yellow-400 text-xs"></i>
                                <i class="fa fa-star-half text-yellow-400 text-xs"></i>
                                <span class="text-slate-400 text-xs ml-1">4.0 (10 reviews)</span>
                            </div>
                            <h3 class="text-xl font-bold text-slate-900 mb-4">North Everest Express Expedition</h3>
                            <div
                                class="flex justify-between items-center text-xs text-slate-500 mb-6 pb-6 border-b border-slate-100">
                                <span class="flex items-center gap-1 text-xs">
                                    <img src="assets/icons/map-point.svg" class="h-4" alt=""> Nepal,
                                    Khumbu</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/clock.svg" class="h-4"
                                        alt=""> 33
                                    Days</span>
                                <span class="flex items-center gap-1"><img src="assets/icons/spring.svg" class="h-4"
                                        alt="">
                                    Spring</span>
                            </div>
                            <div class="flex justify-between items-end">
                                <div>
                                    <p class="text-sm text-slate-400 font-medium">33 days from</p>
                                    <p class="text-xl font-bold text-slate-900">US$ 999</p>
                                </div>
                                <button
                                    class="text-white bg-brand-400 hover:bg-brand-500  font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm">More
                                    Info</button>
                            </div>
                        </div>
                    </a>
                </div>
                <!--  -->

            </div>
        </div>
    </div>

</section>
<!-- end section -->

<!-- section -->

<section class="py-16">
    <div class="container">

        <!-- Header Section -->
        <div class="flex flex-col md:flex-row md:items-center justify-between mb-12 gap-6">
            <div class="max-w-2xl">
                <h2 class="text-4xl font-extrabold text-slate-900 mb-4">Journey Through Our Travel Blog</h2>
                <p class="text-gray-600 text-lg leading-relaxed">
                    Uncover Nepal's trekking wisdom with practical tips for first-timers, in-depth trail breakdowns, and
                    expert guidance for seasoned mountain adventurers.
                </p>
            </div>
            <div>
                <a href="blog.php"
                    class="text-brand-400 border border-brand-400 hover:bg-brand-50 transition-colors font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm ">
                    Explore more
                </a>
            </div>
        </div>

        <!-- Blog Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <!-- Card 1: Annapurna Circuit Trek -->
            <a href="blog-details.php"
                class="group cursor-pointer overflow-hidden rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="relative overflow-hidden h-64">
                    <img src="assets/trip/1.jpg?height=400&width=400" alt="Annapurna Circuit Trek" loading="lazy"
                        class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                </div>

                <div class="bg-white p-6">
                    <p class="text-sm font-medium text-gray-500 mb-2">Trekking/Hiking | Sep 15, 2025</p>
                    <h3
                        class="text-xl font-bold text-slate-900 group-hover:text-brand-400 transition-colors leading-snug">
                        Annapurna Circuit Trek during Autumn
                    </h3>
                </div>
            </a>

            <!-- Card 2: Langtang Valley Trek -->
            <a href="blog-details.php"
                class="group cursor-pointer overflow-hidden rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="relative overflow-hidden h-64">
                    <img src="assets/trip/2.jpg?height=400&width=400" alt="Langtang Valley" loading="lazy"
                        class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                </div>

                <div class="bg-white p-6">
                    <p class="text-sm font-medium text-gray-500 mb-2">Trekking/Hiking | Sep 2, 2025</p>
                    <h3
                        class="text-xl font-bold text-slate-900  group-hover:text-brand-400 transition-colors leading-snug">
                        Alternative Treks to Langtang Valley
                    </h3>
                </div>
            </a>

            <!-- Card 3: Manaslu Circuit Trek -->
            <a href="blog-details.php"
                class="group cursor-pointer overflow-hidden rounded-2xl shadow-sm hover:shadow-md transition-shadow duration-300">
                <div class="relative overflow-hidden h-64">
                    <img src="assets/trip/3.jpg?height=400&width=400" alt="Manaslu Circuit" loading="lazy"
                        class="lazy-image w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">

                </div>

                <div class="bg-white p-6">
                    <p class="text-sm font-medium text-gray-500 mb-2">Trekking/Hiking | Aug 27, 2025</p>
                    <h3
                        class="text-xl font-bold text-slate-900  group-hover:text-brand-400 transition-colors leading-snug">
                        Best Viewpoints on the Manaslu Circuit
                    </h3>
                </div>
            </a>

        </div>
    </div>
</section>
<!-- end section -->
@stop