@extends('master')

@section('title')
	Laravel - Tworzenie nowego studenta
@endsection

@section('content')
    <h1>Tworzenie nowego studenta</h1>
    {!! Form::open(['action' => 'StudentController@store', 'class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('imie', 'Imię') !!}
            {!! Form::text('imie', '', ['class'=>'form-control']) !!} 
        </div>
        <div class="form-group">
            {!! Form::label('nazwisko', 'Nazwisko') !!}
            {!! Form::text('nazwisko', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('adres', 'Adres') !!}
            {!! Form::text('adres', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('kod_pocztowy', 'Kod pocztowy') !!}
            {!! Form::text('kod_pocztowy', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('miejscowosc', 'Miejscowość') !!}
            {!! Form::text('miejscowosc', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefon', 'Telefon') !!}
            {!! Form::text('telefon', '', ['class'=>'form-control']) !!}
        </div>
        {!! Form::submit('Tworzenie studenta', ['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
    @if (count($errors) > 0)
            <ul>
                    @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                    @endforeach
            </ul>
    @endif
@endsection
