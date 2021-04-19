@extends('base')
@section('content')
@section('title','About Us | '.config('app.name'))

<h2>About us</h2>
<img src="/images/globaltech.jpg" alt="globaltech"/>

<p>Bouild with &hearts; by GLobalt technologies</p>
<p><a href="{{route('home')}} ">home page</a></p>

@endsection