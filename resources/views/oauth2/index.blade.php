<!-- resources/views/oauth2/generateToken.blade.php -->
@extends('master')

@section('title')
	Laravel - Generowanie tokena OAuth2
@endsection

@section('content')

    <h1>Generowanie dostępu - token'a</h1>

    <h3>Portal muzyczny prosi o dostęp do danych</h3>

    <p>
        <a style="font-size: 18px;" href="{{ url('oauth2/generate_token') }}">Generowanie klucza token</a>
    </p>

    <p>
        Powyższy klucz, zostanie wygenerowany na okres czasu 3600 sekund, 
        zgodnie z konfiguracją config\oauth2.php
    </p>

@endsection
