@extends('base')
@section('content')
<img src="{{asset('/images/flagmaroc.jpg')}}" alt="flag maroc"/>
@section('title', config('app.name'))
<h1>Hello from maroc</h1>
<p>It's currently {{date('H:i A')}}</p>
@endsection