@extends('themes.default.common.master')
@section('title',$parent->title)
@section('meta_keyword',$parent->title)
@section('meta_description',$parent->brief)
@section('thumbnail',$parent->thumbnail)
@section('content')
<!-- Hero Section -->
<div class="relative h-[480px] bg-cover bg-center flex items-center lazy-image "
    style="background-image: url('assets/trip/8000.jpg');" loading="lazy">
    <div class="absolute inset-0 bg-black/50"></div>
    <div class="relative container  ">
        <div class="max-w-2xl text-white">
            <h1 class="text-5xl font-bold mb-6">8000m</h1>
            <p class="text-lg">
                Push beyond limits with world-class Himalayan expeditions led by experienced climbers and certified
                guides. From 6000-meter training peaks to legendary 8000-meter giants, our expeditions are built on
                precision planning, strong Sherpa support, and uncompromising safety—designed for climbers who seek true
                high-altitude achievement.
            </p>
        </div>
    </div>
</div>

<!-- Product Grid Section -->
<section class="py-16  pattern-white relative">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!--  -->
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
                        <span class="flex items-center gap-1"><img src="assets/icons/clock.svg" class="h-4" alt="">
                            50
                            Days</span>
                        <span class="flex items-center gap-1"><img src="assets/icons/summer.svg" class="h-4" alt="">
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
            <!--  -->
            <!--  -->
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
                        <span class="flex items-center gap-1"><img src="assets/icons/clock.svg" class="h-4" alt="">
                            33
                            Days</span>
                        <span class="flex items-center gap-1"><img src="assets/icons/spring.svg" class="h-4" alt="">
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
            <!--  -->
            <!--  -->
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
                        <span class="flex items-center gap-1"><img src="assets/icons/clock.svg" class="h-4" alt="">
                            40
                            Days</span>
                        <span class="flex items-center gap-1"><img src="assets/icons/summer.svg" class="h-4" alt="">
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
            <!--  -->
            <!--  -->
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
                        <span class="flex items-center gap-1"><img src="assets/icons/clock.svg" class="h-4" alt="">
                            33
                            Days</span>
                        <span class="flex items-center gap-1"><img src="assets/icons/spring.svg" class="h-4" alt="">
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
            <!--  -->

        </div>

        <?php include 'include/pagination.php'; ?>

    </div>
    </div>
</section>
@stop