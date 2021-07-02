@extends('app')
@section('title')
    About me | {{ config('app.name') }}
@endsection
@section('content')
<img src="{{ asset('images/me.jpeg') }}" alt="">
    <p>Buit with &hearts; by Koky Dramé with the help of Les Teachers Du Net</p>
    <p><a href="/">Revenir à la page d'accueil</a></p>

@endsection
