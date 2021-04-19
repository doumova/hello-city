@extends('base')
@section('content')
<img src="{{asset('/images/flagmaroc.jpg')}}" alt="flag maroc" class="mt-12 h-25 w-30 rounded shadow-md"/>
@section('title', config('app.name'))
<h1 class="mt-5 text-indigo-600 text-5xl">Hello from maroc</h1>
<p class="text-gray-800 text-lg">It's currently {{date('H:i A')}}</p>
@endsection