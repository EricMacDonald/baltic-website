{{-- <x-base-layout title="Login"> --}}
{{-- </x-base-layout> --}}

@extends('components.base-layout')

@section('content')
    <div class="mt-[200px] grid grid-cols-2">

        <div class="animate-pulse">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Baltic Apprenticeships</span>
                <br>  Top Trumps</h1>
        </div>

        <div x-init="$nextTick(() => $el._x_swiper = new Swiper($el, { effect: 'cards', grabCursor: true }))" class="swiper h-[500px] w-[500px]">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img class="h-full w-full rounded-lg object-cover" src="{{ url('images/carousel/pic1.webp') }}"
                        alt="" />
                </div>
                <div class="swiper-slide">
                    <img class="h-full w-full rounded-lg object-cover" src="{{ url('images/carousel/pic2.jpg') }}"
                        alt="" />
                </div>
                <div class="swiper-slide">
                    <img class="h-full w-full rounded-lg object-cover" src="{{ url('images/carousel/pic3.webp') }}"
                        alt="" />
                </div>
                <div class="swiper-slide">
                    <img class="h-full w-full rounded-lg object-cover" src="{{ url('images/carousel/pic4.jpg') }}"
                        alt="" />
                </div>
            </div>
        </div>
    </div>
    
@endsection
