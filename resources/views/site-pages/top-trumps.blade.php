{{-- <x-base-layout title="Login"> --}}
{{-- </x-base-layout> --}}

@extends('components.base-layout')

@section('content')
  
    <div class="mt-[20px] flex relative justify-center">

        <div>
            <img class="h-[400px] w-[400px] rounded-lg object-cover" src="{{ url('images/carousel/pic6.png') }}">
        </div>

    </div>
    
    <div class="mt-[20px] flex relative justify-center">
        <button class="btn h-[50px] w-[600px] bg-primary rounded-lg text-white animte animate-bounce">Download Top Trumps</button>
    </div>
@endsection
