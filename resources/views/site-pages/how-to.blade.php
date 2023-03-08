{{-- <x-base-layout title="Login"> --}}
{{-- </x-base-layout> --}}

@extends('components.base-layout')

@section('content')
<div class="mt-[40px] flex relative justify-center ">
        <h1 class="animate-bounce text-4xl text-white">Watch how to play!</h1>    
</div>
<div class="mt-[20px] flex relative justify-center ">
  
    <div>
    <iframe class="rounded-xl"  width="1280" height="720" src="https://www.youtube.com/embed/6RNtB--oGiw" title="Top Trumps - How to Play"
     frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
      allowfullscreen></iframe>
    </div>
    
</div>
@endsection
