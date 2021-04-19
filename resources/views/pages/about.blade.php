@extends('base')
@section('content')
@section('title','About Us | '.config('app.name'))

<h2>About us</h2>
<img src="{{asset('/images/globaltech.jpg')}}" alt="globaltech" class="mt-12 h-80 w-50 rounded shadow-md"/>

    <h2 class="text-gray mt-5 mb-5">
        Bouild with <span class="text-pink-500">&hearts;</span> by GLobalt technologies
    </h2>
    <h2>
        <a href="{{route('home')}} " class="text-lg text-indigo-600 underline">
        home page</a>
    </h2>

@endsection