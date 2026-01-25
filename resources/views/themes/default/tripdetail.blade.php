@extends('themes.default.common.master')
@section('title', $data->meta_title ? $data->meta_title : $data->trip_title)
@section('meta_keyword', $data->meta_keyword)
@section('meta_description', $data->meta_description)
@section('thumbnail', $data->thumbnail)
@section('content')
<!-- hero section -->
<section class="relative  ">
    <div class="container">
        <!-- Breadcrumbs -->
        <nav aria-label="Breadcrumb" class="mx-auto px-4 my-6 text-xs sm:text-sm text-gray-500">
            <ol class="flex flex-wrap items-center gap-x-1 gap-y-2">
                <!-- Home -->
                <li class="flex items-center">
                    <a href="{{ url('/') }}" class="hover:text-brand transition flex items-center">
                        <i class="fas fa-home mr-1"></i>
                        <span class="hidden sm:inline">Home</span>
                    </a>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-chevron-right mx-2 text-[8px]"></i>
                    <span>Trekking</span>
                </li>
                <!-- Popular Treks -->
                <li class="flex items-center">
                    <i class="fas fa-chevron-right mx-2 text-[8px]"></i>
                    <a href="trip-list.php" class="hover:text-brand transition"> Popular Treks </a>
                </li>
                <!-- Current Page -->
                <li class="flex items-center max-w-full">
                    <i class="fas fa-chevron-right mx-2 text-[8px]"></i>
                    <span class="text-brand font-medium truncate max-w-[220px] sm:max-w-none"> 
                        {{ $data->trip_title }}
                    </span>
                </li>
            </ol>
        </nav>
        <div class="flex flex-col lg:flex-row gap-9">
            <div class="w-full lg:w-2/3 ">
                <div class="grid grid-cols-1 gap-4">
                    {{-- @foreach ($photos as $photo)
                    <div>
                        <a href="{{ asset('/uploads/original/' . $photo->thumbnail) }}" data-fancybox="trip-gallery" data-caption="Caption">
                            <div class="relative rounded-2xl overflow-hidden group cursor-pointer h-full md:h-[480px]">
                                <img src="assets/trip/8000.jpg" alt="Everest Base Camp" loading="lazy"
                                    class="lazy-image w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors">
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach --}}
                    <div class="grid grid-cols-3 gap-4">
                         @foreach ($photos as $photo)
                        <div>
                            <a href="{{ asset('/uploads/original/' . $photo->thumbnail) }}" data-fancybox="trip-gallery" data-caption="Caption">
                                <div
                                    class="relative rounded-2xl overflow-hidden group cursor-pointer h-full aspect-video">
                                    <img src="{{ asset('/uploads/original/' . $photo->thumbnail) }}" alt="Prayer Flags" loading="lazy"
                                        class="lazy-image w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                                    <div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors">
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                      
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/3">
                <div class=" space-y-8">
                    <!-- Price Card -->
                    <div class="bg-white overflow-hidden">
                        <div class=" ">
                            <div class=" ">
                                <div class="flex items-center mb-2">
                                    <div class="flex text-yellow-400 text-xs">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <a class="ml-2 text-xs text-gray-500" href="#reviews">4.5 (1500 reviews)</a>
                                </div>
                                <h1 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                                    {{ $data->trip_title }}
                                </h1>
                                <p class="text-gray-600 leading-relaxed mb-4">
                                    {{ $data->sub_title }}
                                </p>
                            </div>
                            <div class="grid grid-cols-2 md:grid-cols-2 gap-6  mb-5">
                                <div class="flex items-start space-x-2">
                                    <div class="inline-flex items-center justify-center text-brand-400">
                                        <i class="fas fa-map-marker-alt text-brand"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 font-medium">Destination</p>
                                        <p class="text-sm font-semibold text-black/80">Nepal</p>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-2">
                                    <div class="inline-flex items-center justify-center text-brand-400">
                                        <i class="far fa-clock text-brand"></i>
                                    </div>
                                    <div>
                                        <p class="text-xs text-gray-500 font-medium">Duration</p>
                                        <p class="text-sm font-semibold text-black/80">{{ $data->duration }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full p-5 bg-gray-50 rounded-xl border border-brand-100 space-y-7">
                                <!-- Accommodation Selection -->
                                <div>
                                    <label for="accommodation"
                                        class="block text-sm font-semibold text-gray-700 mb-3 tracking-wide"> Select
                                        Accommodation </label>
                                    <select id="accommodation"
                                        class="block w-full mb-4 px-4 py-3 bg-white border border-gray-300 text-gray-700 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 shadow-sm transition">
                                        <option value="5star" data-price="1525">5 Star Hotel Accommodation</option>
                                        <option value="4star" data-price="1025">4 Star Hotel Accommodation</option>
                                        <option value="3star" data-price="725">3 Star Hotel Accommodation</option>
                                    </select>
                                </div>
                                <div>
                                    <!-- All Inclusive Price -->
                                    <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1"> All
                                        Inclusive Price </p>
                                    <div class="flex items-baseline justify-start mb-2">
                                        <span id="price" class="text-4xl font-extrabold text-blue-600">$1525</span>
                                        <span class="text-lg font-bold text-gray-500 ml-2">USD</span>
                                    </div>
                                    <!-- Duration -->
                                    <p class="text-sm text-gray-500 flex items-center  ">
                                        <i class="far fa-clock mr-2"></i> 15 Nights 16 Days
                                    </p>
                                </div>
                                <div class="flex flex-col gap-3 w-full">
                                    <!-- Bigger Button -->
                                    <a href="booking.php"
                                        class="w-full currsor-pointer text-center text-white bg-brand-400 hover:bg-brand-500 font-medium px-5 py-4 rounded-xl transition hover:bg-brand/90">
                                        Book Now </a>
                                    <div class="flex gap-4">
                                        <button data-modal-target="inquiry" data-modal-toggle="inquiry"
                                            class="w-full text-brand-400 border border-brand-400 hover:bg-brand-100  font-medium rounded-xl text-sm  px-5 py-2.5 transition shadow-sm">
                                            Private Departures </button>
                                        <button data-modal-target="TellAFriend" data-modal-toggle="TellAFriend"
                                            class="w-full text-brand-400 border border-brand-400 hover:bg-brand-100  font-medium rounded-xl text-sm  px-5 py-2.5 transition shadow-sm">
                                            Tell a Friend </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Actions Row -->
                    <div class="flex justify-between px-2 text-xs font-bold text-gray-500">
                        <a href="plan-your-trip.php" class="flex items-center hover:text-brand-400">
                            <i class="fas fa-sliders-h mr-2"></i>Plan Your Trip </a>
                        <a href="#" class="flex items-center hover:text-brand-400">
                            <i class="fas fa-file-pdf mr-2"></i> Download PDF </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end -->
<style>
/* Active state */
.trip-link.active {
    background-color: var(--color-brand-soft);
    color: var(--color-blue-400);
    font-weight: 600;
}
</style>
<section class="py-12">
    <!-- MOBILE SELECT (visible on small screens) -->
    <div class="lg:hidden sticky top-[80px] z-40 bg-brand-50 border-b flex items-center mb-6 py-2">
        <div class="container flex items-center gap-2">
            <label for="tripSelect">Section:</label>
            <select id="tripSelect"
                class="w-full   text-base font-semibold text-brand-400 border-none  bg-transparent border-0">
                <option value="#overview">Overview</option>
                <option value="#itinerary">Itinerary</option>
                <option value="#price-includes">Price Includes</option>
                <option value="#departures">Fixed Departures</option>
                <option value="#RouteMapVideo">Route Map / Video</option>
                <option value="#gears">Gears</option>
                <option value="#reviews">Reviews</option>
                <option value="#faqs">FAQs</option>
                <option value="#SimilarTrips">Similar Trips</option>
            </select>
        </div>
    </div>
    <div class="container">
        <!-- DESKTOP LEFT SIDEBAR -->
        <div class="  flex gap-8">
            <aside id="secondaryNav"
                class="hidden lg:block w-64 sticky top-[96px] border rounded-xl h-fit bg-white   p-4">
                <nav class="space-y-2 text-base font-medium">
                    <a href="#overview"
                        class="trip-link flex items-center gap-3 px-3 py-2 rounded-xl text-gray-900 hover:bg-brand-soft hover:text-brand-light">
                        <i class="far fa-eye w-5"></i> Overview </a>
                    <a href="#itinerary"
                        class="trip-link flex items-center gap-3 px-3 py-2 rounded-xl text-gray-900 hover:bg-brand-soft hover:text-brand-light">
                        <i class="far fa-map w-5"></i> Itinerary </a>
                    <a href="#price-includes"
                        class="trip-link flex items-center gap-3 px-3 py-2 rounded-xl text-gray-900 hover:bg-brand-soft hover:text-brand-light">
                        <i class="fas fa-tags w-5"></i> Price Includes </a>
                    <a href="#departures"
                        class="trip-link flex items-center gap-3 px-3 py-2 rounded-xl text-gray-900 hover:bg-brand-soft hover:text-brand-light">
                        <i class="fas fa-calendar-alt w-5"></i> Fixed Departures </a>
                    <a href="#RouteMapVideo"
                        class="trip-link flex items-center gap-3 px-3 py-2 rounded-xl text-gray-900 hover:bg-brand-soft hover:text-brand-light">
                        <i class="fas fa-video w-5"></i> Route Map / Video </a>
                    <a href="#gears"
                        class="trip-link flex items-center gap-3 px-3 py-2 rounded-xl text-gray-900 hover:bg-brand-soft hover:text-brand-light">
                        <i class="fas fa-hiking w-5"></i> Gears </a>
                    <a href="#reviews"
                        class="trip-link flex items-center gap-3 px-3 py-2 rounded-xl text-gray-900 hover:bg-brand-soft hover:text-brand-light">
                        <i class="fas fa-star w-5"></i> Reviews </a>
                    <a href="#faqs"
                        class="trip-link flex items-center gap-3 px-3 py-2 rounded-xl text-gray-900 hover:bg-brand-soft hover:text-brand-light">
                        <i class="far fa-question-circle w-5"></i> FAQs </a>
                    <a href="#SimilarTrips"
                        class="trip-link flex items-center gap-3 px-3 py-2 rounded-xl text-gray-900 hover:bg-brand-soft hover:text-brand-light">
                        <i class="fa-solid fa-mountain w-5"></i> Similar Trips </a>
                </nav>
            </aside>
            <!-- MAIN CONTENT -->
            <div class="flex-1 ">
                <!-- overview -->
                <section class="pb-6" id="overview">
                    <div class="  space-y-6">
                        <!-- Quick Facts Grid -->
                        <h2 class="text-2xl  font-bold text-gray-900 text-gray-900">Quick Facts
                        </h2>
                        <div
                            class="grid grid-cols-2 md:grid-cols-3 gap-6 bg-brand-50 p-6 rounded-xl border border-brand-100 mb-10">
                            <div class="flex items-start space-x-2">
                                <div class="inline-flex items-center justify-center text-brand-400">
                                    <i class="fas fa-map-marker-alt text-brand"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Destination</p>
                                    <p class="text-base font-semibold text-black/80">Nepal</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="inline-flex items-center justify-center text-brand-400">
                                    <i class="far fa-clock text-brand"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Duration</p>
                                    <p class="text-base font-semibold text-black/80">{{ $data->duration }}</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="inline-flex items-center justify-center text-brand-400">
                                    <i class="fas fa-tachometer-alt text-brand"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Trip Difficulty</p>
                                    <p class="text-base font-semibold text-black/80">{{ $data->best_season}}</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="inline-flex items-center justify-center text-brand-400">
                                    <i class="fas fa-hotel text-brand"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Accommodation</p>
                                    <p class="text-base font-semibold text-black/80">{{ $data->accommodation }}</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="inline-flex items-center justify-center text-brand-400">
                                    <i class="fas fa-utensils text-brand"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Meals</p>
                                    <p class="text-base font-semibold text-black/80">B, L, D</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="inline-flex items-center justify-center text-brand-400">
                                    <i class="fas fa-chart-line text-brand"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Max. Elevation</p>
                                    <p class="text-base font-semibold text-black/80">{{ $data->max_altitude }}</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="inline-flex items-center justify-center text-brand-400">
                                    <i class="fas fa-users text-brand"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Group Size</p>
                                    <p class="text-base font-semibold text-black/80">{{ $data->group_size }}</p>
                                </div>
                            </div>
                            <div class="flex items-start space-x-2">
                                <div class="inline-flex items-center justify-center text-brand-400">
                                    <i class="far fa-calendar-check text-brand"></i>
                                </div>
                                <div>
                                    <p class="text-sm text-gray-500 font-medium">Best Time</p>
                                    <p class="text-base font-semibold text-black/80">{{$data->best_season}}</p>
                                </div>
                            </div>
                        </div>
                        <!-- end -->
                        <!-- Text Content Sections -->
                        <div class=" max-w-none text-gray-700 space-y-6 ">
                            <h2 class="text-2xl  font-bold text-gray-900 text-gray-900">
                                {{ $data->trip_title }} Overview</h2>
                            <p>The Everest Base Camp Trek is one of Nepal's most legendary and iconic mountain
                                adventures, following the same historic trail used by Sir Edmund Hillary and Tenzing
                                Norgay on their journey to Everest Base Camp before the first successful summit of Mount
                                Everest.</p>
                            <p>The journey begins with an adventurous 30-minute flight to Lukla Airport. From Lukla, the
                                trail winds through renowned Sherpa villages such as Namche Bazaar, Tengboche, and
                                Dingboche, gradually ascending through the heart of the Khumbu region until you reach
                                the ultimate destination, Everest Base Camp. </p>
                            <h2 class="text-2xl font-bold text-gray-900 text-gray-900 mt-12">Key
                                Highlights of Everest Base Camp Trek </h2>
                            <p>The Everest Base Camp Trek brings together iconic viewpoints, towering Himalayan peaks,
                                Sherpa culture, and protected alpine landscapes.</p>
                            <h3 class="text-lg font-bold text-gray-900">Iconic Landmarks and Viewpoints</h3>
                            <ul class="list-disc pl-5 space-y-3">
                                <li>Stand at Everest Base Camp (5,364m), the legendary South Camp at the foot of the
                                    world's highest mountain.</li>
                                <li>Climb Kala Patthar (5,545m) at sunrise for close-up views of Everest, Lhotse,
                                    Nuptse, Pumori, the Khumbu Glacier, and even Tibet.</li>
                                <li>Take an acclimatization hike to Nagkartsang Hill (5,083m) in Dingboche, with
                                    wide-ranging views of Makalu and Island Peak.</li>
                                <li>Hike to Everest View Hotel (3,880m), the world's highest luxury hotel, for early
                                    views of Everest, Ama Dablam, and Lhotse.</li>
                            </ul>
                            <h3 class="text-lg font-bold text-gray-900">8,000-Meter Peaks Visible on the EBC Trek Route
                            </h3>
                            <p>Only a few trekking trails offer three eight-thousanders in a single trek.</p>
                            <ul class="list-disc pl-5 space-y-3">
                                <li>Mount Everest (8,848.86m) – The world’s highest mountain, visible from Namche
                                    Bazaar, Everest View Hotel, Kala Patthar, and Everest Base Camp.</li>
                                <li>Lhotse (8,516m) – The fourth-highest mountain in the world, Everest’s dramatic
                                    neighbor, best seen from the upper Khumbu Valley and Kala Patthar.</li>
                                <li>Makalu (8,481m) – The fifth-highest mountain in the world, visible
                                    from Dingboche and Nangkartshang Hill.</li>
                            </ul>
                            <h3 class="text-lg font-bold text-gray-900">Scenic Lukla Flight</h3>
                            <p>Fly into Tenzing–Hillary Airport, Lukla (2,860m), the official starting point of the
                                Everest Base Camp trek, known for its short runway, rapidly changing Himalayan weather,
                                and reputation as one of the world’s most thrilling mountain flights.</p>
                            <h3 class="text-lg font-bold text-gray-900">Sacred Monasteries & Sherpa Culture</h3>
                            <ul class="list-disc pl-5 space-y-3">
                                <li>Visit Tengboche Monastery (Tengboche Gompa), the largest in Khumbu, and join evening
                                    prayers and meditation with the monks as they chant enchanting mantras.</li>
                                <li>Explore historic sites such as Pangboche, the oldest monastery in the
                                    Khumbu; Khumjung Monastery, known for housing a purported Yeti scalp; and the
                                    monastery in Namche Bazaar. </li>
                                <li>Witness rare monastery ceremonies, sacred mask dances, and vibrant local
                                    participation as you trek through Tengboche during Mani Rimdu in late October or
                                    early November, adding deep cultural meaning to your Everest Base Camp journey.</li>
                                <li>Acclimatize in Namche Bazaar (3,440m), the cultural and commercial heart of the
                                    Khumbu region. </li>
                            </ul>
                            <h3 class="text-lg font-bold text-gray-900">Sagarmatha National Park & Wildlife</h3>
                            <ul class="list-disc pl-5 space-y-3">
                                <li>Trek through Sagarmatha National Park (UNESCO World Heritage Site), following
                                    ancient trails across forests, moraines, and alpine landscapes.</li>
                                <li>Spot blue sheep, yaks, rare birds, and the Himalayan Monal (Danphe), Nepal’s
                                    national bird. </li>
                            </ul>
                        </div>
                        <!-- Text Content Sections -->
                    </div>
                </section>
                <!-- end -->
                <!-- WhyWithSummit8000 -->
                <section class="rounded-xl p-5 bg-brand-50  text-gray-700" id="WhyWithSummit8000"> 
                    <div class=" space-y-3">
                        <h2 class="text-2xl font-bold text-brand-400">Why with Summit 8000?</h2>
                        <p>ecause Summit 8000 is a trekking and expedition company built on experience, passion, and a
                            commitment to safety. It combines expert local knowledge with personalized service to guide
                            adventurers through some of the world’s most breathtaking and challenging landscapes,
                            ensuring every journey is well-planned, culturally respectful, and unforgettable—from the
                            first step on the trail to the summit and back.</p>
                    </div>
                </section>
                <!-- end WhyWithSummit8000 -->
                <!-- Itinerary -->
                <section class="py-6" id="itinerary">
                    <div class=" space-y-3">
                        <div class="accordion-wrapper" id="">
                            <div
                                class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-3">
                                <h2 class="text-2xl font-bold text-gray-900">Detailed Itinerary</h2>
                                <button
                                    class="toggle-accordion text-brand-400 border border-brand-400 hover:bg-brand-50 transition-colors font-medium rounded-xl text-sm px-4 py-2.5 transition shadow-sm">Expand
                                    All</button>
                            </div>
                            <div id="accordion-itinerary" data-accordion="collapse"
                                class="rounded-base border border-default overflow-hidden shadow-xs">
                                <!--  -->
                                <div id="heading-1">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-semibold  rtl:text-right text-base rounded-t-base border border-t-0 border-x-0 border-b-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 text-left"
                                        data-accordion-target="#body-1" aria-expanded="true" aria-controls="body-1">
                                        <span class="text-brand-900">
                                            <span class="text-brand-400 mr-1">Day 1:</span> Arrival in Kathmandu and
                                            Transfer to Hotel </span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="body-1" class="hidden border border-s-0 border-e-0 border-t-0 border-b-default"
                                    aria-labelledby="heading-1">
                                    <div
                                        class="space-y-3 py-5 text-base font-normal text-gray-700 p-4 md:p-5 p-4 md:p-5">
                                        <p>Welcome to Nepal! Upon arrival at Tribhuvan International Airport - TIA,
                                            you'll complete immigration and baggage collection before exiting the
                                            terminal. One of our representatives will be waiting outside the airport
                                            with a placard reading “Nepal Hiking Team” and will provide you with a
                                            transfer to your hotel.</p>
                                        <p>The ride into the city gives you a first, honest look at Kathmandu as people
                                            go about their day, shops open their doors, and traffic weaves through the
                                            streets.</p>
                                        <div class="flex items-start   p-4 mb-4 text-sm text-fg-brand-strong rounded-base bg-brand-50"
                                            role="alert">
                                            <i class="fa fa-info-circle me-2 shrink-0 mt-0.5 sm:mt-0"></i>
                                            <p>You can weigh your handbag and duffel bag at the hotel. Lukla flights
                                                allow a combined 15 kg for hand luggage and a duffel bag. Excess baggage
                                                costs approximately NPR 150 per kilogram, subject to airline approval.
                                                Due to strict safety rules for small aircraft, additional weight may be
                                                limited or denied, regardless of payment. These restrictions ensure safe
                                                operations on Lukla’s short, high-altitude airstrip. </p>
                                        </div>
                                        <div
                                            class="flex flex-wrap gap-4 mt-4 text-sm text-fg-brand-strong rounded-full bg-brand-100 p-1">
                                            <div class="flex items-center">
                                                <span
                                                    class="  text-gray-900 px-2 py-0.5 rounded mr-2 text-sm">Accommodation:</span>
                                                <span class="font-semibold">Hotel</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span
                                                    class="  text-gray-900 px-2 py-0.5 rounded mr-2 text-sm">Meals:</span>
                                                <span class="font-semibold">Breakfast Included</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--  -->
                                <!-- Day 2 -->
                                <div id="heading-2">
                                    <button type="button"
                                        class="flex items-center justify-between w-full p-5 font-semibold  rtl:text-right text-base rounded-t-base border border-t-0 border-x-0 border-b-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 text-left"
                                        data-accordion-target="#body-2" aria-expanded="false" aria-controls="body-2">
                                        <span class="text-brand-900">
                                            <span class="text-brand-400 mr-1">Day 2:</span> Free Day in Kathmandu – Trip
                                            Briefing and Trek Preparation </span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="body-2" class="hidden border border-s-0 border-e-0 border-t-0 border-b-default"
                                    aria-labelledby="heading-2">
                                    <div class="space-y-3 py-5 text-base font-normal text-gray-700 p-4 md:p-5">
                                        <p> Today is reserved for rest and final preparation. You will attend a detailed
                                            trek briefing where your guide explains the route, altitude concerns, and
                                            safety measures. </p>
                                        <p> Equipment check and last-minute shopping can be done in Thamel. Overnight in
                                            Kathmandu. </p>
                                        <div
                                            class="flex flex-wrap gap-4 mt-4 text-sm text-fg-brand-strong rounded-full bg-brand-100 p-1">
                                            <div class="flex items-center">
                                                <span class="text-gray-900 px-2 py-0.5 mr-2">Accommodation:</span>
                                                <span class="font-semibold">Hotel</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="text-gray-900 px-2 py-0.5 mr-2">Meals:</span>
                                                <span class="font-semibold">Breakfast Included</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                    aria-labelledby="heading-3">
                                    <div class="space-y-3 py-5 text-base font-normal text-gray-700 p-4 md:p-5">
                                        <p> Early morning scenic flight to Lukla, one of the most adventurous airstrips
                                            in the world. Meet the trekking crew and begin your walk. </p>
                                        <p> The trail follows the Dudh Koshi River to Phakding, passing mani stones and
                                            suspension bridges. </p>
                                        <div
                                            class="flex flex-wrap gap-4 mt-4 text-sm text-fg-brand-strong rounded-full bg-brand-100 p-1">
                                            <div class="flex items-center">
                                                <span class="text-gray-900 px-2 py-0.5 mr-2">Accommodation:</span>
                                                <span class="font-semibold">Teahouse</span>
                                            </div>
                                            <div class="flex items-center">
                                                <span class="text-gray-900 px-2 py-0.5 mr-2">Meals:</span>
                                                <span class="font-semibold">Breakfast, Lunch & Dinner</span>
                                            </div>
                                        </div>
                                    </div>
                 
                            </div>
                        </div>
                        <div>
                            <div id="alert-additional-content-1"
                                class="p-4 mb-4 text-sm text-brand-900 rounded-base bg-brand-50 border border-brand-100"
                                role="alert">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-start">
                                        <svg class="w-4 h-4 shrink-0 me-2" aria-hidden="true"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                            viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2"
                                                d="M10 11h2v5m-2 0h3m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                        </svg>
                                        <span class="sr-only">Info</span>
                                        <div>
                                            <h3 class="font-medium">If the above Everest Base Camp Trek itinerary does
                                                not meet your needs, we can design individualized travel plans based on
                                                your preferences and specifications.</h3>
                                            <a href="customized-trip.php" class="hidden sm:inline-flex text-white bg-brand-400 hover:bg-brand-500 mt-2
                                             font-medium rounded-xl text-sm px-5 py-2.5 transition shadow-sm"> Customized Trip </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end -->
                <!-- Cost Includes -->
                <section class="py-6" id="price-includes">
                    <div class="">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 ">
                            <div class="bg-green-50 p-6 rounded-2xl border border-green-100">
                                <h2 class="text-2xl font-bold text-gray-900 mb-8">Cost Includes</h2>
                                <div class="space-y-8">
                                    <div>
                                        <h3 class="font-bold text-sm uppercase text-brand-900 mb-4 tracking-wider">
                                            Accommodation </h3>
                                        <ul class="space-y-3 text-sm">
                                            <li class="flex items-start">
                                                <i class="far fa-check-circle text-green-500 mt-1 mr-3 shrink-0"></i>
                                                <span>
                                                    <span class="font-bold">In Kathmandu:</span> Four nights of
                                                    twin-sharing/double accommodation at a 3-star hotel in Kathmandu
                                                    with breakfast (two nights before and two nights after the trek).
                                                </span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-check-circle text-green-500 mt-1 mr-3 shrink-0"></i>
                                                <span>
                                                    <span class="font-bold">During the Trek:</span> Best selective
                                                    comfortable lodge accommodation on a twin-sharing basis at altitude
                                                    which include private bathrooms and hot showers in Phakding, Namche,
                                                    and Lukla. </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-sm uppercase text-brand-900 mb-4 tracking-wider">Meals
                                        </h3>
                                        <ul class="space-y-3 text-sm">
                                            <li class="flex items-start">
                                                <i class="far fa-check-circle text-green-500 mt-1 mr-3 shrink-0"></i>
                                                <span>
                                                    <span class="font-bold">Breakfast in Kathmandu</span> Four
                                                    breakfasts in Kathmandu </span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-check-circle text-green-500 mt-1 mr-3 shrink-0"></i>
                                                <span>
                                                    <span class="font-bold">Full Board Meals During the Trek</span> All
                                                    standard meals served during the 11 days of trek—breakfast, lunch,
                                                    and dinner </span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div>
                                        <h3 class="font-bold text-sm uppercase text-brand-900 mb-4 tracking-wider">
                                            Transportation and Flights</h3>
                                        <ul class="space-y-3 text-sm">
                                            <li class="flex items-start">
                                                <i class="far fa-check-circle text-green-500 mt-1 mr-3 shrink-0"></i>
                                                <span>
                                                    <span class="font-bold">All airport transfers</span> (pickup and
                                                    drop-off) and ground transportation in a private tourist vehicle.
                                                </span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-check-circle text-green-500 mt-1 mr-3 shrink-0"></i>
                                                <span>
                                                    <span class="font-bold">Round-trip ground transportation
                                                    </span>between Kathmandu and Ramechhap during peak trekking season.
                                                </span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-check-circle text-green-500 mt-1 mr-3 shrink-0"></i>
                                                <span>
                                                    <span class="font-bold">Round-trip flights</span> to and from Lukla.
                                                </span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-red-50 p-6 rounded-2xl border border-red-100">
                                <h2 class="text-2xl font-bold text-gray-900 mb-8">Cost Excludes</h2>
                                <div class="space-y-8">
                                    <div>
                                        <ul class="space-y-3 text-sm">
                                            <li class="flex items-start">
                                                <i class="far fa-times-circle text-red-500 mt-1 mr-3 shrink-0"></i>
                                                <span>Lunches and dinners while in Kathmandu</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-times-circle text-red-500 mt-1 mr-3 shrink-0"></i>
                                                <span>International airfare to and from Nepal</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-times-circle text-red-500 mt-1 mr-3 shrink-0"></i>
                                                <span>Nepal entry visa (available upon arrival at the airport)</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-times-circle text-red-500 mt-1 mr-3 shrink-0"></i>
                                                <span>Personal travel insurance that includes high-altitude trekking and
                                                    emergency evacuation</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-times-circle text-red-500 mt-1 mr-3 shrink-0"></i>
                                                <span>Personal trekking gear, equipment, and clothing</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-times-circle text-red-500 mt-1 mr-3 shrink-0"></i>
                                                <span>Hot showers at lodges that charge a fee (except in Phakding,
                                                    Namche, and Lukla)</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-times-circle text-red-500 mt-1 mr-3 shrink-0"></i>
                                                <span>Wi-Fi access, mobile calls, and charging fees unless provided free
                                                    by the lodge</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-times-circle text-red-500 mt-1 mr-3 shrink-0"></i>
                                                <span>Extra snacks, alcoholic drinks, bottled beverages, drinking water,
                                                    and other personal purchases during the trek</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-times-circle text-red-500 mt-1 mr-3 shrink-0"></i>
                                                <span>Excess baggage charges on domestic flights if you exceed 15
                                                    kg</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-times-circle text-red-500 mt-1 mr-3 shrink-0"></i>
                                                <span>Optional helicopter upgrade to or from Lukla (extra approx. USD
                                                    450 per person from Kathmandu or Ramechhap)</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-times-circle text-red-500 mt-1 mr-3 shrink-0"></i>
                                                <span>Extra nights in Kathmandu if you arrive early, depart later, or
                                                    return from the mountains ahead of schedule.</span>
                                            </li>
                                            <li class="flex items-start">
                                                <i class="far fa-times-circle text-red-500 mt-1 mr-3 shrink-0"></i>
                                                <span>Tips and gratuities for your guide, porter, and driver</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end -->
                <!-- Dates Table -->
                <section class="py-6" id="departures">
                    <div class="">
                        <div class="mb-8">
                            <div class="flex justify-between items-center mb-6">
                                <h2 class="text-2xl font-bold text-gray-900">Cost and Date</h2>
                            </div>
                            <div
                                class="p-4 mb-4 text-sm text-brand-900 rounded-base bg-brand-50 border border-brand-100   ">
                                <b> Start dates</b> indicate your arrival in Nepal, and <b>end dates</b> reflect your
                                Departures from Nepal. The scheduled Departuress for the Everest Base Camp Trek are
                                specifically organized for group joining option. If the listed dates do not fit your
                                availability, please reach out to us, and our team will provide alternative date
                                options.
                            </div>
                            <div class="relative overflow-x-auto border rounded-xl shadow-sm">
                                <form class="p-4  bg-white border-b gap-4">
                                    <select
                                        class="block md:w-3xl bg-gray-50  px-4 max-w-4xl py-2 text-xs border rounded-lg focus:ring-2 focus:ring-brand-400 outline-0 pr-12">
                                        <option>Select Month, Year</option>
                                        <option value="2025-12">Dec, 2025</option>
                                        <option value="2026-01">Jan, 2026</option>
                                        <option value="2026-02">Feb, 2026</option>
                                        <option value="2026-03">Mar, 2026</option>
                                        <option value="2026-04">Apr, 2026</option>
                                        <option value="2026-05">May, 2026</option>
                                        <option value="2026-06">Jun, 2026</option>
                                        <option value="2026-07">Jul, 2026</option>
                                        <option value="2026-08">Aug, 2026</option>
                                        <option value="2026-09">Sep, 2026</option>
                                        <option value="2026-10">Oct, 2026</option>
                                        <option value="2026-11">Nov, 2026</option>
                                        <option value="2026-12">Dec, 2026</option>
                                        <option value="2027-01">Jan, 2027</option>
                                        <option value="2027-02">Feb, 2027</option>
                                        <option value="2027-03">Mar, 2027</option>
                                        <option value="2027-04">Apr, 2027</option>
                                        <option value="2027-05">May, 2027</option>
                                        <option value="2027-06">Jun, 2027</option>
                                        <option value="2027-07">Jul, 2027</option>
                                        <option value="2027-08">Aug, 2027</option>
                                        <option value="2027-09">Sep, 2027</option>
                                        <option value="2027-10">Oct, 2027</option>
                                        <option value="2027-11">Nov, 2027</option>
                                    </select>
                                </form>
                                <div class="Departures-list bg-white shadow-base py-3">
                                    <!--  -->
                                    <ul class="[&amp;&gt;li+li]:border-t [&amp;&gt;li+li]:border-t-border">
                                        <li>
                                            <div
                                                class="item items-center leading-[1.35] p-6 grid grid-cols-2 md:grid-cols-5 gap-3 lg:px-6 rounded-sm text-headings/80 hover:bg-secondary/10 group transition-all duration-200">
                                                <div class="col">
                                                    <span class="text-xs   block pb-0.5">Start Date</span>
                                                    <span class="text-brand-900 font-semibold">1st Mar 2026</span>
                                                </div>
                                                <div class="col">
                                                    <span class="text-xs block pb-0.5">End Date</span>
                                                    <span class="text-brand-900 font-semibold">15th Mar 2026</span>
                                                </div>
                                                <div class="col">
                                                    <div class="availability">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="inline-flex items-center px-2 py-1 rounded-xl bg-green-50 text-green-600 text-xs font-medium border border-green-200">
                                                                <i class="fa fa-check mr-1"></i> Guaranteed </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col md:text-center">
                                                    <span class="price text-brand-400 font-bold text-base">US
                                                        $2800</span>
                                                    <span class="text-headings text-xs block">Per person</span>
                                                </div>
                                                <div class="col lg:ml-auto">
                                                    <a href="booking.php"
                                                        class="cursor-pointer  group-hover:bg-brand-400 group-hover:text-white  text-brand-400 border border-brand-400 transition-colors font-medium rounded-xl text-sm  transition  px-4 py-2.5">Book
                                                        Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="item items-center leading-[1.35] p-6 grid grid-cols-2 md:grid-cols-5 gap-3 lg:px-6 rounded-sm text-headings/80 hover:bg-secondary/10 group transition-all duration-200">
                                                <div class="col">
                                                    <span class="text-xs block pb-0.5">Start Date</span>
                                                    <span class="text-brand-900 font-semibold">3rd Mar 2026</span>
                                                </div>
                                                <div class="col">
                                                    <span class="text-xs block pb-0.5">End Date</span>
                                                    <span class="text-brand-900 font-semibold">17th Mar 2026</span>
                                                </div>
                                                <div class="col">
                                                    <div class="availability">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="inline-flex items-center px-2 py-1 rounded-xl bg-green-50 text-green-600 text-xs font-medium border border-green-200">
                                                                <i class="fa fa-check mr-1"></i> Guaranteed </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col md:text-center">
                                                    <span class="price text-brand-400 font-bold text-base">US
                                                        $2800</span>
                                                    <span class="text-headings text-xs block">Per person</span>
                                                </div>
                                                <div class="col lg:ml-auto">
                                                    <a href="booking.php"
                                                        class="cursor-pointer  group-hover:bg-brand-400 group-hover:text-white  text-brand-400 border border-brand-400 transition-colors font-medium rounded-xl text-sm  transition  px-4 py-2.5">Book
                                                        Now</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div
                                                class="item items-center leading-[1.35] p-6 grid grid-cols-2 md:grid-cols-5 gap-3 lg:px-6 rounded-sm text-headings/80 hover:bg-secondary/10 group transition-all duration-200">
                                                <div class="col">
                                                    <span class="text-xs block pb-0.5">Start Date</span>
                                                    <span class="text-brand-900 font-semibold">5th Mar 2026</span>
                                                </div>
                                                <div class="col">
                                                    <span class="text-xs block pb-0.5">End Date</span>
                                                    <span class="text-brand-900 font-semibold">19th Mar 2026</span>
                                                </div>
                                                <div class="col">
                                                    <div class="availability">
                                                        <div class="flex items-center gap-x-2">
                                                            <span
                                                                class="inline-flex items-center px-2 py-1 rounded-xl bg-green-50 text-green-600 text-xs font-medium border border-green-200">
                                                                <i class="fa fa-check mr-1"></i> Guaranteed </span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col md:text-center">
                                                    <span class="price text-brand-400  font-bold text-base">US
                                                        $2800</span>
                                                    <span class="text-headings text-xs block">Per person</span>
                                                </div>
                                                <div class="col lg:ml-auto">
                                                    <a href="booking.php"
                                                        class="cursor-pointer  group-hover:bg-brand-400 group-hover:text-white  text-brand-400 border border-brand-400 transition-colors font-medium rounded-xl text-sm  transition  px-4 py-2.5">Book
                                                        Now</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <!--  -->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end -->
                <!-- video and map -->
                <section class="py-6" id="RouteMapVideo">
                    <div class="">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-12">
                            <!-- Route Map -->
                            <div id="route-map">
                                <div class="flex justify-between items-center mb-6">
                                    <h2 class="text-2xl font-bold text-gray-900">Route Map</h2>
                                    <button
                                        class="text-gray-500 border px-4 py-1.5 rounded-md text-xs flex items-center hover:bg-brand-400 hover:text-white hover:border-brand-400">
                                        <i class="fas fa-download mr-2"></i> Download </button>
                                </div>
                                <div class="rounded-xl overflow-hidden border  aspect-video">
                                    <a href="assets/trip/map.jpg" data-fancybox="gallery"
                                        data-caption="Everest Base Camp Trek Route Map">
                                        <img src="assets/trip/map.jpg" alt="Route Map" loading="lazy"
                                            class="lazy-image w-full h-auto">
                                    </a>
                                </div>
                            </div>
                            <!-- Video Section -->
                            <div id="video">
                                <h2 class="text-2xl font-bold text-gray-900 mb-6">Trek Video</h2>
                                <div
                                    class="relative group cursor-pointer rounded-2xl overflow-hidden shadow-2xl aspect-video">
                                    <img src="https://i.ytimg.com/vi/bFy6jTEHlzQ/hqdefault.jpg" alt="Video"
                                        loading="lazy" class="lazy-image w-full h-full object-cover">
                                    <div
                                        class="absolute inset-0 bg-black/20 flex items-center justify-center transition group-hover:bg-black/40">
                                        <a href="https://www.youtube.com/watch?v=bFy6jTEHlzQ" data-fancybox
                                            class="w-20 h-20 bg-white/30 backdrop-blur-md rounded-full flex items-center justify-center border-2 border-white/50 group-hover:scale-110 transition duration-300">
                                            <i class="fas fa-play text-white text-3xl ml-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end -->
                <!-- gears -->
                <section class="py-6" id="gears">
                    <div class=" space-y-3">
                        <div class="mb-8" id="gears">
                            <h2 class="text-2xl font-bold text-gray-900 mb-6">Gears List</h2>
                            <p class="font-bold text-lg mb-4">You must bring the following items:</p>
                            <ul class="show-more-list grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8" data-visible="1">
                                <li class="flex items-center space-x-1 text-base">
                                    <i class="far fa-check-circle text-brand-400"></i>
                                    <span>Hiking boots (must be waterproof)</span>
                                </li>
                                <li class="flex items-center space-x-1 text-base">
                                    <i class="far fa-check-circle text-brand-400"></i>
                                    <span>Trekking poles (see notes)</span>
                                </li>
                                <li class="flex items-center space-x-1 text-base">
                                    <i class="far fa-check-circle text-brand-400"></i>
                                    <span>Microspikes (Kahtoola or similar) footwear traction (see notes)</span>
                                </li>
                                <li class="flex items-center space-x-1 text-base">
                                    <i class="far fa-check-circle text-brand-400"></i>
                                    <span>Trekking trousers</span>
                                </li>
                                <li class="flex items-center space-x-1 text-base">
                                    <i class="far fa-check-circle text-brand-400"></i>
                                    <span>Waterproof overtrousers</span>
                                </li>
                            </ul>
                            <p class="font-bold text-lg mb-4">The following items are optional:</p>
                            <ul class="show-more-list grid grid-cols-1 sm:grid-cols-2 gap-4 mb-8" data-visible="1">
                                <li class="flex items-center space-x-1 text-base">
                                    <i class="far fa-check-circle text-brand-400"></i>
                                    <span>Trainers or similar for use in lodges</span>
                                </li>
                                <li class="flex items-center space-x-1 text-base">
                                    <i class="far fa-check-circle text-brand-400"></i>
                                    <span>Swimwear (for the hotel pool in Kathmandu)</span>
                                </li>
                                <li class="flex items-center space-x-1 text-base">
                                    <i class="far fa-check-circle text-brand-400"></i>
                                    <span>Earplugs (particularly if you are not eh one snoring)</span>
                                </li>
                                <li class="flex items-center space-x-1 text-base">
                                    <i class="far fa-check-circle text-brand-400"></i>
                                    <span>Pen-knife (remember to pack sharp objects in hold baggage)</span>
                                </li>
                                <li class="flex items-center space-x-1 text-base">
                                    <i class="far fa-check-circle text-brand-400"></i>
                                    <span>Reusable cloth bag for shopping (to avoid plastic bags)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>
                <!-- end -->
                <!-- review -->
                <section class="py-6" id="reviews">
                    <div class="">
                        <!-- Reviews -->
                        <div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-4">Travellers' Reviews</h2>
                            <p class="text-xs text-gray-500 mb-8">Read our <span class="font-bold text-gray-800">genuine
                                    feedback</span> from past travelers with <span
                                    class="font-bold text-gray-800">Summit 8000 Team</span> sourced from <span
                                    class="font-bold text-gray-800">TripAdvisor, Google, Facebook, and
                                    Trustpilot.</span>
                            </p> <?php /*?>
                            <!-- Video Reviews -->
                            <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
                                <a href="https://www.youtube.com/watch?v=fHh29py_Uoc" data-fancybox
                                    class="relative rounded-xl overflow-hidden group block cursor-pointer aspect-video">
                                    <img src="https://i.ytimg.com/vi/fHh29py_Uoc/hqdefault.jpg"
                                        class="w-full h-full object-cover" alt="Video thumbnail">
                                    <!-- Gradient overlay -->
                                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center "></div>
                                    <!-- Text -->
                                    <div class="absolute bottom-4 left-4 text-white z-10">
                                        <p class="font-bold text-sm">Luke Korns</p>
                                        <p class="text-sm">Australia</p>
                                    </div>
                                    <!-- PERFECTLY CENTERED Play button -->
                                    <div class="absolute inset-0 flex items-start justify-start z-10 p-4">
                                        <div class="w-9 h-9 bg-white/20 backdrop-blur
                   rounded-full flex items-center justify-center
                   border border-white/40
                   group-hover:scale-110 transition-transform duration-300">
                                            <i class="fas fa-play text-white text-sm"></i>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://www.youtube.com/watch?v=hWvVUud3gO0" data-fancybox
                                    class="relative rounded-xl overflow-hidden group block cursor-pointer aspect-video">
                                    <img src="https://i.ytimg.com/vi/hWvVUud3gO0/hqdefault.jpg"
                                        class="w-full h-full object-cover" alt="Video thumbnail">
                                    <!-- Gradient overlay -->
                                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center "></div>
                                    <!-- Text -->
                                    <div class="absolute bottom-4 left-4 text-white z-10">
                                        <p class="font-bold text-sm">Ramesh Adhikari</p>
                                        <p class="text-sm">United Arab Emirates</p>
                                    </div>
                                    <!-- PERFECTLY CENTERED Play button -->
                                    <div class="absolute inset-0 flex items-start justify-start z-10 p-4">
                                        <div class="w-9 h-9 bg-white/20 backdrop-blur
                   rounded-full flex items-center justify-center
                   border border-white/40
                   group-hover:scale-110 transition-transform duration-300">
                                            <i class="fas fa-play text-white text-sm"></i>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://www.youtube.com/watch?v=JgVMFS-N-GM" data-fancybox
                                    class="relative rounded-xl overflow-hidden group block cursor-pointer aspect-video">
                                    <img src="https://i.ytimg.com/vi/JgVMFS-N-GM/hqdefault.jpg"
                                        class="w-full h-full object-cover" alt="Video thumbnail">
                                    <!-- Gradient overlay -->
                                    <div class="absolute inset-0 bg-black/40 flex items-center justify-center "></div>
                                    <!-- Text -->
                                    <div class="absolute bottom-4 left-4 text-white z-10">
                                        <p class="font-bold text-sm">Ramesh Adhikari</p>
                                        <p class="text-sm">Nepal</p>
                                    </div>
                                    <!-- PERFECTLY CENTERED Play button -->
                                    <div class="absolute inset-0 flex items-start justify-start z-10 p-4">
                                        <div class="w-9 h-9 bg-white/20 backdrop-blur
                   rounded-full flex items-center justify-center
                   border border-white/40
                   group-hover:scale-110 transition-transform duration-300">
                                            <i class="fas fa-play text-white text-sm"></i>
                                        </div>
                                    </div>
                                </a>
                            </div> <?php */?>
                            <!-- Text Review Card -->
                            <div class="bg-gray-50 p-6 rounded-2xl border mb-8 relative overflow-hidden">
                                <i class="fas fa-quote-right absolute top-4 right-4 text-6xl text-gray-200"></i>
                                <h3 class="font-bold text-lg mb-4 pr-14">Everest Base Camp- A wonderful hiking
                                    experience </h3>
                                <div class="flex items-center text-yellow-400 text-sm mb-4">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="ml-2 text-gray-400 font-normal">Excellent</span>
                                </div>
                                <div class="text-sm text-gray-600 leading-relaxed space-y-4">
                                    <p>My wife (57y old) and I (63y) did the Everest Base Camp Trek between Oct 28- Nov
                                        8, which was expected to be a dry season. Unfortunately, we suffered many rains
                                        in the first 4 days and could only see the Himalayas mountains when we reached
                                        Deboche. Luckily, the rest days were clear, which allowed us to enjoy the
                                        stunning mountain views.</p>
                                    <p>A huge part of our successful journey goes to our guide, Vishnu Bhatta. He was a
                                        genuinely kind and thoughtful person. His steady encouragement, patience, and
                                        support were instrumental in helping us complete the trek comfortably and
                                        confidently.</p>
                                </div>
                                <div class="mt-8 flex items-center">
                                    <div
                                        class="w-10 h-10 bg-gray-200 rounded-full flex items-center justify-center font-bold text-gray-500">
                                        H</div>
                                    <div class="ml-4">
                                        <p class="text-sm font-bold">Mr. Hao Ding</p>
                                        <p class="text-xs text-gray-400 uppercase">12th Nov 2025</p>
                                    </div>
                                </div>
                            </div>
                            <div class="bg-gray-50 p-6 rounded-2xl border mb-8 relative overflow-hidden">
                                <i class="fas fa-quote-right absolute top-4 right-4 text-6xl text-gray-200"></i>
                                <h3 class="font-bold text-lg mb-4 pr-14">Everest Base Camp – An Unforgettable Himalayan
                                    Journey </h3>
                                <div class="flex items-center text-yellow-400 text-sm mb-4">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="ml-2 text-gray-400 font-normal">Excellent</span>
                                </div>
                                <div class="text-sm text-gray-600 leading-relaxed space-y-4">
                                    <p>My husband (52 years old) and I (50 years old) completed the Everest Base Camp
                                        Trek from April 6 to April 18. The weather was mostly clear, though we
                                        experienced some light snow around Dingboche. Despite the challenges, the views
                                        of Everest, Nuptse, and Ama Dablam were breathtaking and made every step
                                        worthwhile.</p>
                                    <p>Our guide, <b>Pemba Sherpa</b>, played a vital role in our success. He was
                                        extremely caring, knowledgeable, and always attentive to our pace and
                                        well-being. His encouragement and positive attitude kept our spirits high
                                        throughout the trek. </p>
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
                            <div class="bg-gray-50 p-6 rounded-2xl border mb-6 relative overflow-hidden">
                                <i class="fas fa-quote-right absolute top-4 right-4 text-6xl text-gray-200"></i>
                                <h3 class="font-bold text-lg mb-4 pr-14">Everest Base Camp – A Truly Rewarding Trek</h3>
                                <div class="flex items-center text-yellow-400 text-sm mb-4">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="ml-2 text-gray-400 font-normal">Excellent</span>
                                </div>
                                <div class="text-sm text-gray-600 leading-relaxed space-y-4">
                                    <p>I (45 years old) joined the Everest Base Camp Trek from March 22 to April 3 as a
                                        solo traveler. While the trail was busy in some sections, the overall experience
                                        was incredibly rewarding. The gradual ascent allowed proper acclimatization, and
                                        the mountain scenery was beyond my expectations.</p>
                                    <p>I am especially grateful to our guide, <b>Lakpa Tamang</b>, whose professionalism
                                        and calm demeanor made the trek smooth and enjoyable. He was always ready to
                                        help and share insights about local culture and the region. </p>
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
                        </div>
                    </div>
                </section>
                <!-- end -->
                <!-- faq -->
                <section class="py-5" id="faqs">
                    <div class="">
                        <!-- FAQs -->
                        <div class="accordion-wrapper">
                            <div
                                class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-3">
                                <h2 class="text-2xl font-bold text-gray-900">Everest Base Camp Trek FAQs
                                </h2>
                                <button
                                    class="toggle-accordion text-brand-400 border border-brand-400 hover:bg-brand-50 transition-colors font-medium rounded-xl text-sm px-4 py-2.5 transition shadow-sm">Expand
                                    All</button>
                            </div>
                            <div id="accordion-card" data-accordion="collapse">
                                <!-- FAQ 1 -->
                                <div id="accordion-card-heading-1">
                                    <button type="button"
                                        class="text-left flex items-center justify-between w-full p-4 font-medium text-body rounded-base shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none [&[aria-expanded='true']]:shadow-none"
                                        data-accordion-target="#accordion-card-body-1" aria-expanded="false"
                                        aria-controls="accordion-card-body-1">
                                        <span>Why should I choose Summit8000 for the Everest Base Camp Trek?</span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="accordion-card-body-1"
                                    class="hidden border border-t-0 border-default rounded-b-base shadow-xs"
                                    aria-labelledby="accordion-card-heading-1">
                                    <div class="p-4 text-body"> With over 17 years of experience, licensed Sherpa guides
                                        from the Khumbu region, personalized service, assured safety, and thousands of
                                        five-star reviews, Summit8000 offers an authentic and well-supported Everest
                                        Base Camp trekking experience. :contentReference[oaicite:1]{index=1} </div>
                                </div>
                                <!-- FAQ 2 -->
                                <div id="accordion-card-heading-2" class="mt-4">
                                    <button type="button"
                                        class="text-left flex items-center justify-between w-full p-4 font-medium text-body rounded-base shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none [&[aria-expanded='true']]:shadow-none"
                                        data-accordion-target="#accordion-card-body-2" aria-expanded="false"
                                        aria-controls="accordion-card-body-2">
                                        <span>What is the group size for the Everest Base Camp Trek? Is Departures
                                            guaranteed?</span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="accordion-card-body-2"
                                    class="hidden border border-t-0 border-default rounded-b-base shadow-xs"
                                    aria-labelledby="accordion-card-heading-2">
                                    <div class="p-4 text-body"> The trek typically hosts 2–10 trekkers (average ~8), and
                                        Departuress are **guaranteed** regardless of group size. Solo travelers can also
                                        opt for a personalized trek. :contentReference[oaicite:2]{index=2} </div>
                                </div>
                                <!-- FAQ 3 -->
                                <div id="accordion-card-heading-3" class="mt-4">
                                    <button type="button"
                                        class="text-left flex items-center justify-between w-full p-4 font-medium text-body rounded-base shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none [&[aria-expanded='true']]:shadow-none"
                                        data-accordion-target="#accordion-card-body-3" aria-expanded="false"
                                        aria-controls="accordion-card-body-3">
                                        <span>Where will I stay in Kathmandu? Can I upgrade the hotel?</span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="accordion-card-body-3"
                                    class="hidden border border-t-0 border-default rounded-b-base shadow-xs"
                                    aria-labelledby="accordion-card-heading-3">
                                    <div class="p-4 text-body"> The package includes a 3-star hotel in Thamel (e.g.,
                                        Woodapple Hotel & Spa). You **can upgrade** to 4- or 5-star accommodations at
                                        extra cost. :contentReference[oaicite:3]{index=3} </div>
                                </div>
                                <!-- FAQ 4 -->
                                <div id="accordion-card-heading-4" class="mt-4">
                                    <button type="button"
                                        class="text-left flex items-center justify-between w-full p-4 font-medium text-body rounded-base shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none [&[aria-expanded='true']]:shadow-none"
                                        data-accordion-target="#accordion-card-body-4" aria-expanded="false"
                                        aria-controls="accordion-card-body-4">
                                        <span>How much does an extra night’s accommodation in Kathmandu cost?</span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="accordion-card-body-4"
                                    class="hidden border border-t-0 border-default rounded-b-base shadow-xs"
                                    aria-labelledby="accordion-card-heading-4">
                                    <div class="p-4 text-body"> Extra nights cost approximately **USD 45 single** or
                                        **USD 50 twin/double**, including breakfast and taxes.
                                        :contentReference[oaicite:4]{index=4} </div>
                                </div>
                                <!-- FAQ 5 -->
                                <div id="accordion-card-heading-5" class="mt-4">
                                    <button type="button"
                                        class="text-left flex items-center justify-between w-full p-4 font-medium text-body rounded-base shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none [&[aria-expanded='true']]:shadow-none"
                                        data-accordion-target="#accordion-card-body-5" aria-expanded="false"
                                        aria-controls="accordion-card-body-5">
                                        <span>What happens during the pre-trek briefing in Kathmandu?</span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="accordion-card-body-5"
                                    class="hidden border border-t-0 border-default rounded-b-base shadow-xs"
                                    aria-labelledby="accordion-card-heading-5">
                                    <div class="p-4 text-body"> You meet your guide, hand over passport/insurance
                                        details, finalize balance, and receive gear — down jacket, sleeping bag, cap,
                                        trek map, and duffel bag — and can ask any questions. </div>
                                </div>
                                <!-- FAQ 6 -->
                                <div id="accordion-card-heading-6" class="mt-4">
                                    <button type="button"
                                        class="text-left flex items-center justify-between w-full p-4 font-medium text-body rounded-base shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none [&[aria-expanded='true']]:shadow-none"
                                        data-accordion-target="#accordion-card-body-6" aria-expanded="false"
                                        aria-controls="accordion-card-body-6">
                                        <span>How do I book and pay for the Everest Base Camp Trek?</span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="accordion-card-body-6"
                                    class="hidden border border-t-0 border-default rounded-b-base shadow-xs"
                                    aria-labelledby="accordion-card-heading-6">
                                    <div class="p-4 text-body"> Booking requires filling trip info and paying a **20%
                                        deposit** to confirm. Remaining balance can be paid in Kathmandu by card or
                                        cash. </div>
                                </div>
                                <!-- FAQ 7 -->
                                <div id="accordion-card-heading-7" class="mt-4">
                                    <button type="button"
                                        class="text-left flex items-center justify-between w-full p-4 font-medium text-body rounded-base shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none [&[aria-expanded='true']]:shadow-none"
                                        data-accordion-target="#accordion-card-body-7" aria-expanded="false"
                                        aria-controls="accordion-card-body-7">
                                        <span>Can I store extra luggage in Kathmandu?</span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="accordion-card-body-7"
                                    class="hidden border border-t-0 border-default rounded-b-base shadow-xs"
                                    aria-labelledby="accordion-card-heading-7">
                                    <div class="p-4 text-body"> Yes — you can store extra luggage at your Kathmandu
                                        hotel for free and retrieve it when you return from the trek.
                                        :contentReference[oaicite:7]{index=7} </div>
                                </div>
                                <!-- FAQ 8 -->
                                <div id="accordion-card-heading-8" class="mt-4">
                                    <button type="button"
                                        class="text-left flex items-center justify-between w-full p-4 font-medium text-body rounded-base shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none [&[aria-expanded='true']]:shadow-none"
                                        data-accordion-target="#accordion-card-body-8" aria-expanded="false"
                                        aria-controls="accordion-card-body-8">
                                        <span>Do you provide trekking gear?</span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="accordion-card-body-8"
                                    class="hidden border border-t-0 border-default rounded-b-base shadow-xs"
                                    aria-labelledby="accordion-card-heading-8">
                                    <div class="p-4 text-body"> Yes — sleeping bag, down jacket, duffel bag, trek map,
                                        T-shirt, and cap are provided. :contentReference[oaicite:8]{index=8} </div>
                                </div>
                                <!-- FAQ 9 -->
                                <div id="accordion-card-heading-9" class="mt-4">
                                    <button type="button"
                                        class="text-left flex items-center justify-between w-full p-4 font-medium text-body rounded-base shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none [&[aria-expanded='true']]:shadow-none"
                                        data-accordion-target="#accordion-card-body-9" aria-expanded="false"
                                        aria-controls="accordion-card-body-9">
                                        <span>What accommodation is available on the trek?</span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="accordion-card-body-9"
                                    class="hidden border border-t-0 border-default rounded-b-base shadow-xs"
                                    aria-labelledby="accordion-card-heading-9">
                                    <div class="p-4 text-body"> You stay in twin-sharing lodges with proper beds and
                                        private bathrooms lower down. Higher up, rooms become simpler with shared
                                        toilets. :contentReference[oaicite:9]{index=9} </div>
                                </div>
                                <!-- FAQ 10 -->
                                <div id="accordion-card-heading-10" class="mt-4">
                                    <button type="button"
                                        class="text-left flex items-center justify-between w-full p-4 font-medium text-body rounded-base shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none [&[aria-expanded='true']]:shadow-none"
                                        data-accordion-target="#accordion-card-body-10" aria-expanded="false"
                                        aria-controls="accordion-card-body-10">
                                        <span>Is there Wi-Fi and phone connectivity on the trek?</span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="accordion-card-body-10"
                                    class="hidden border border-t-0 border-default rounded-b-base shadow-xs"
                                    aria-labelledby="accordion-card-heading-10">
                                    <div class="p-4 text-body"> Yes — Wi-Fi and phone data are available at most
                                        teahouses (paid). You can buy local SIM or data from Everest Link/Ncell.
                                        :contentReference[oaicite:10]{index=10} </div>
                                </div>
                                <!-- FAQ 11 -->
                                <div id="accordion-card-heading-11" class="mt-4">
                                    <button type="button"
                                        class="text-left flex items-center justify-between w-full p-4 font-medium text-body rounded-base shadow-xs border border-default hover:text-heading hover:bg-neutral-secondary-medium gap-3 [&[aria-expanded='true']]:rounded-b-none [&[aria-expanded='true']]:shadow-none"
                                        data-accordion-target="#accordion-card-body-11" aria-expanded="false"
                                        aria-controls="accordion-card-body-11">
                                        <span>Can I charge my devices on the trek?</span>
                                        <i data-accordion-icon
                                            class=" fa fa-chevron-down transition-transform duration-300 rotate-90 text-sm text-brand-400"></i>
                                    </button>
                                </div>
                                <div id="accordion-card-body-11"
                                    class="hidden border border-t-0 border-default rounded-b-base shadow-xs"
                                    aria-labelledby="accordion-card-heading-11">
                                    <div class="p-4 text-body"> Yes — charging is available at most teahouses (fee).
                                        Weather at high altitude can affect power so carry a power bank too.
                                        :contentReference[oaicite:11]{index=11} </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- end faq -->
                <div class="sticky bottom-0 left-0 z-30 w-full h-16 bg-neutral-primary-soft border-t border-default">
                    <div class="grid h-full max-w-xl grid-cols-2 mx-auto font-medium items-center px-4 gap-5">
                        <div>
                            <a href="#departures"
                                class="w-full block text-center text-white bg-brand-400 hover:bg-brand-500  px-5 py-3 rounded-xl text-sm transition hover:bg-brand/90">
                                Fixed Departures </a>
                        </div>
                        <div>
                            <button data-modal-target="inquiry" data-modal-toggle="inquiry"
                                class="w-full text-brand-400 border border-brand-400 hover:bg-brand-100   rounded-xl text-sm  px-5 py-3 transition shadow-sm">
                                Private Departures </button>
                        </div>
                    </div>
                </div>
                <!-- Section: Related -->
                <section class="py-16  relative" id="SimilarTrips">
                    <div class="">
                        <div class="flex justify-between items-end mb-10">
                            <div>
                                <h2 class="text-2xl font-bold text-gray-900">Similar Trips</h2>
                            </div>
                        </div>
                        <!-- Grid of Cards -->
                        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            <!--  -->
                            <a href="trip-details.php"
                                class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="assets/trip/2.jpg" alt="Everest" class="w-full h-full object-cover">
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
                                    <h3 class="text-xl font-bold text-slate-900 mb-4">North Everest Express Expedition
                                    </h3>
                                    <div
                                        class="flex justify-between items-center text-xs text-slate-500 mb-6 pb-6 border-b border-slate-100">
                                        <span class="flex items-center gap-1 text-xs">
                                            <img src="assets/icons/map-point.svg" class="h-4" alt=""> Nepal, Khumbu
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <img src="assets/icons/clock.svg" class="h-4" alt=""> 33 Days </span>
                                        <span class="flex items-center gap-1">
                                            <img src="assets/icons/spring.svg" class="h-4" alt=""> Spring </span>
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
                            <!--  -->
                            <!--  -->
                            <a href="trip-details.php"
                                class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="assets/trip/3.jpg" alt="Everest" class="w-full h-full object-cover">
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
                                            <img src="assets/icons/map-point.svg" class="h-4" alt=""> Nepal, Khumbu
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <img src="assets/icons/clock.svg" class="h-4" alt=""> 40 Days </span>
                                        <span class="flex items-center gap-1">
                                            <img src="assets/icons/summer.svg" class="h-4" alt=""> Summer </span>
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
                            <!--  -->
                            <!--  -->
                            <a href="trip-details.php"
                                class="block bg-white rounded-2xl overflow-hidden shadow-sm border border-slate-100 transition-transform hover:-translate-y-1">
                                <div class="relative h-64 overflow-hidden">
                                    <img src="assets/trip/2.jpg" alt="Everest" class="w-full h-full object-cover">
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
                                    <h3 class="text-xl font-bold text-slate-900 mb-4">North Everest Express Expedition
                                    </h3>
                                    <div
                                        class="flex justify-between items-center text-xs text-slate-500 mb-6 pb-6 border-b border-slate-100">
                                        <span class="flex items-center gap-1 text-xs">
                                            <img src="assets/icons/map-point.svg" class="h-4" alt=""> Nepal, Khumbu
                                        </span>
                                        <span class="flex items-center gap-1">
                                            <img src="assets/icons/clock.svg" class="h-4" alt=""> 33 Days </span>
                                        <span class="flex items-center gap-1">
                                            <img src="assets/icons/spring.svg" class="h-4" alt=""> Spring </span>
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
                            <!--  -->
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<!-- Inquiry modal -->
<div id="inquiry" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed backdrop-blur-sm top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-neutral-primary-soft border border-default rounded-xl shadow-sm  ">
            <!-- Modal header -->
            <div class="flex items-center justify-between border-b border-default p-4  ">
                <h3 class="text-lg font-medium text-heading">Private Trip </h3>
                <button type="button"
                    class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="inquiry">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18 17.94 6M18 18 6.06 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="#">
                <div class="p-5">
                    <div class="grid gap-4 grid-cols-2 ">
                        <div class="col-span-2">
                            <input type="text" name="name" id="name"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:outline-none focus:ring-1 focus:ring-blue-400 focus:border-blue-400 block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Full Name*" required="">
                        </div>
                        <div class="col-span-2">
                            <input type="email" name="email" id="namemaile"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:outline-none focus:ring-1 focus:ring-blue-400 focus:border-blue-400 block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="E-mail*" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <input type="tel" name="phone" id="phone"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:outline-none focus:ring-1 focus:ring-blue-400 focus:border-blue-400 block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Mobile*" required="" min="10">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <input type="number" name="travellers" id="travellers"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:outline-none focus:ring-1 focus:ring-blue-400 focus:border-blue-400 block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="No of Travellers*" required="" min="1">
                        </div>
                        <div class="col-span-2">
                            <textarea id="message" rows="4"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:outline-none focus:ring-1 focus:ring-blue-400 focus:border-blue-400 block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Message*"></textarea>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-4 border-t border-default p-4">
                    <button type="submit" class="flex items-center  text-white bg-brand-400 hover:bg-brand-500
               font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm"> Submit </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Inquiry modal -->
<!-- Tell a Friend modal -->
<div id="TellAFriend" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed backdrop-blur-sm top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-neutral-primary-soft border border-default rounded-xl shadow-sm  ">
            <!-- Modal header -->
            <div class="flex items-center justify-between border-b border-default p-4  ">
                <h3 class="text-lg font-medium text-heading">Tell your Friend About <spane class="text-brand-400">
                        Everest Base Camp Trek</spane>
                </h3>
                <button type="button"
                    class="text-body bg-transparent hover:bg-neutral-tertiary hover:text-heading rounded-base text-sm w-9 h-9 ms-auto inline-flex justify-center items-center"
                    data-modal-hide="TellAFriend">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18 17.94 6M18 18 6.06 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="#">
                <div class="p-5">
                    <div class="grid gap-4 grid-cols-2 ">
                        <div class="col-span-2">
                            <input type="text" name="name" id="name"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:outline-none focus:ring-1 focus:ring-blue-400 focus:border-blue-400 block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Full Name*" required="">
                        </div>
                        <div class="col-span-2">
                            <input type="email" name="email" id="namemaile"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:outline-none focus:ring-1 focus:ring-blue-400 focus:border-blue-400 block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="E-mail*" required="">
                        </div>
                        <div class="col-span-2">
                            <input type="femail" name="femail" id="namemaile"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:outline-none focus:ring-1 focus:ring-blue-400 focus:border-blue-400 block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Friend Email*" required="">
                        </div>
                        <div class="col-span-2">
                            <textarea id="message" rows="4"
                                class="bg-neutral-secondary-medium border border-default-medium text-heading text-sm rounded-base focus:outline-none focus:ring-1 focus:ring-blue-400 focus:border-blue-400 block w-full px-3 py-2.5 shadow-xs placeholder:text-body"
                                placeholder="Message*"></textarea>
                        </div>
                    </div>
                </div>
                <div class="flex items-center space-x-4 border-t border-default p-4">
                    <button type="submit" class="flex items-center  text-white bg-brand-400 hover:bg-brand-500
               font-medium rounded-xl text-sm px-5 py-3 transition shadow-sm"> Submit </button>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
