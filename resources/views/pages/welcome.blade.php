@extends('app')
@section('title')
    {{ config('app.name') }}
@endsection
@section('content')
    <img src="{{ asset('images/flag.png') }}" alt="">
    <h1>Hello From Sénégal</h1>

    <p>Il est actuellement {{ date('H:i') }} </p>
@endsection
