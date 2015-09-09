@extends('master')

@section('title')
	Laravel - Sale szkolne
@endsection


@section('content')
	<h1>Sale szkolne - REST</h1>
        <hr>
        <div>
            <p><b>{{ URL::to('hall/') }} - Metoda GET</b></p>
            <p><b>Link:</b> <a href="{{ URL::to('hall/') }}"><b>Uruchomienie</b></a>,</p>
            <p><b>Opis:</b> Link do obecnej strony.</p>
            <p><b>Kontroler:</b> Działanie funkcji <b style="color:red;">index</b>.</p>
        </div>
        <hr>
        <div>
            <p><b>{{ URL::to('hall/') }} - Metoda POST</b></p>
            <p>
                <form method="POST" action="{{ URL::to('hall/') }}">
                    {!! csrf_field() !!}
                    <input type="text" name="numerSali" value="nr1">
                    <input type="text" name="pietro" value="parter">
                    <button type="submit">Uruchomienie</button>
                </form>
            </p>
            <p><b>Opis:</b> Odbieranie danych z forumarza create.</p>
            <p><b>Kontroler:</b> Działanie funkcji <b style="color:red;">store</b>.</p>
        </div>
        <hr>
        <div>
            <p><b>{{ URL::to('hall/create') }} - Metoda GET</b></p>
            <p><b>Link:</b> <a href="{{ URL::to('hall/create') }}"><b>Uruchomienie</b></a>,</p>
            <p><b>Opis:</b> Pobieranie widoku z formularzem create.</p>
            <p><b>Kontroler:</b> Działanie funkcji <b style="color:red;">create</b>.</p>
        </div>
        <hr>
        <div>
            <p><b>{{ URL::to('hall/1') }} - Metoda GET</b></p>
            <p><b>Link:</b> <a href="{{ URL::to('hall/1') }}"><b>Uruchomienie</b></a>,</p>
            <p><b>Opis:</b> Pobieranie widoku z danymi o sali numer 1.</p>
            <p><b>Kontroler:</b> Działanie funkcji <b style="color:red;">show</b>.</p>
        </div>
        <hr>
        <div>
            <p><b>{{ URL::to('hall/1') }} - Metoda PUT lub PATCH</b></p>
            <p>
                <form method="POST" action="{{ URL::to('hall/1') }}">
                    {!! method_field('put') !!}
                    {!! csrf_field() !!}
                    <input type="text" name="numerSali" value="nr1">
                    <input type="text" name="pietro" value="parter">
                    <button type="submit">Uruchomienie</button>
                </form>
            </p>
            <p><b>Opis:</b> Odbieranie zaktualizowanych danych z forumarza.</p>
            <p><b>Kontroler:</b> Działanie funkcji <b style="color:red;">update</b>.</p>
        </div>
        <hr>
        <div>
            <p><b>{{ URL::to('hall/1') }} - Metoda DELETE</b></p>
            <p>
                <form method="POST" action="{{ URL::to('hall/1') }}">
                    {!! method_field('delete') !!}
                    {!! csrf_field() !!}
                    <button type="submit">Uruchomienie</button>
                </form>
            </p>
            <p><b>Opis:</b> Polecenie usunięcia danych o sali nr 1.</p>
            <p><b>Kontroler:</b> Działanie funkcji <b style="color:red;">destroy</b>.</p>
        </div>
        <hr>
        <div>
            <p><b>{{ URL::to('hall/1/edit') }}, Metoda GET</b></p>
            <p><b>Link:</b> <a href="{{ URL::to('hall/1/edit') }}"><b>Uruchomienie</b></a>,</p>
            <p><b>Opis:</b> Pobieranie widoku z formularzem edycji sali nr 1. </p>
            <p><b>Kontroler:</b> Działanie funkcji <b style="color:red;">edit</b>.</p>
        </div>
@endsection