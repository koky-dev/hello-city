@extends('app')
@section('title')
    About me | {{ config('app.name') }}
@endsection
@section('content')
    <img src="{{ asset('images/me.jpeg') }}" alt="" style="width: 150px; height:150px" class="my-12 rounded-full shadow-md">
    <h2 class="mb-5 text-gray-700">Buit with <span class="text-pink-500">&hearts;</span> by Koky Dramé with the help <br> of Les Teachers Du Net</h2>
    <p><a href="/" class="text-indigo-500 hover:text-indigo-600 underline">Revenir à la page d'accueil</a></p>

@endsection
