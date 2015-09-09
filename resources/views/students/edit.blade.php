@extends('master')

@section('title')
	Laravel - Edycja danych studenta
@endsection

@section('content')
    <h1>Edycja danych</h1>
    {!! Form::model($student, ['action' => 'StudentController@store', 'class'=>'form-horizontal']) !!}
        <div class="form-group">
            {!! Form::label('imie', 'Imię') !!}
            {!! Form::text('imie', null, ['class'=>'form-control']) !!} 
        </div>
        <div class="form-group">
            {!! Form::label('nazwisko', 'Nazwisko') !!}
            {!! Form::text('nazwisko', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('adres', 'Adres') !!}
            {!! Form::text('adres', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('kod_pocztowy', 'Kod pocztowy') !!}
            {!! Form::text('kod_pocztowy', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('miejscowosc', 'Miejscowość') !!}
            {!! Form::text('miejscowosc', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('telefon', 'Telefon') !!}
            {!! Form::text('telefon', null, ['class'=>'form-control']) !!}
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
