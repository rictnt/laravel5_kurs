<!-- resources/views/oauth2/generateToken.blade.php -->
@extends('master')

@section('title')
	Laravel - Dostęp do danych
@endsection

@section('content')

    <h1>Uzyskanie dostępu do danych z użyciem token'a</h1>
    
    <p>
        <b>Wygenerowany token: </b>{{ $token['access_token'] }}
    </p>
    <p>
        <a style="font-size: 18px;" href="{{ url('oauth2/get_user') }}?access_token={{ $token['access_token'] }}">
            Pobranie danych o użytkowniku
        </a>
    </p>
    <p>
        <b>Klucz będzie aktywny przez {{ $token['expires_in'] }} sekund.</b>
    </p>
    <p>
        Dane o użytkowniku generującego token, będą pobrane bez użycia loginu i hasła,
        wyłącznie na podstawie tokenu. Portal muzyczny na pobranie danych ma 3600 sekund,
        od chwili wygenerowania token'a.
    </p>

@endsection
