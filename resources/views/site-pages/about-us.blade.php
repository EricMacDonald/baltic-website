{{-- <x-base-layout title="Login"> --}}
{{-- </x-base-layout> --}}

@extends('components.base-layout')

@section('content')
    <div class="mt-[200px] grid grid-cols-2">

        <div>
            <img class="h-[500px] w-[500psx] rounded-lg object-cover" src="{{ url('images/carousel/pic4.jpg') }}" alt="" />
        </div>

        <div>
            <p class="mt-40 text-xl text-white "> Top Trumps is a game where ... Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minima voluptatem
                magnam facere animi maiores soluta incidunt, numquam nulla, omnis rem ex tempora sed recusandae earum
                aliquid voluptatum nobis, commodi dolorum.
            </p>
        </div>

    </div>
@endsection
