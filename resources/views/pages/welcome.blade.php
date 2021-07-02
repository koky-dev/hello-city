@extends('app')
@section('title')
    {{ config('app.name') }}
@endsection
@section('content')
    <img src="{{ asset('images/flag.png') }}" alt="" style="width: 150px; height:150px" class="mt-12 rounded shadow-md h-32">
    <h1 class="mt-5 text-3xl sm:text-5xl text-indigo-600 font-semibold">Hello From Sénégal</h1>
    <p class="text-lg text-gray-800">Il est actuellement {{ date('H:i') }} </p>
@endsection
