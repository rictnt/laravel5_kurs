<!--/resources/views/students/index.blade.php -->
@extends('master')

@section('title')
	Laravel - Studenci
@endsection

@section('content')
    <div><a href="{{ action('StudentController@create') }}">Create Student</a></div>
    <h1>Students</h1>
    @foreach ($students as $student)
            <div>
                    <h2>{{ $student->imie }} {{ $student->nazwisko }}</h2>
                    <p>{{ $student->miejscowosc }} {{ $student->telefon }}</p>
                    <a href="{{ action('StudentController@edit', ['id' => $student->id]) }}">Edit</a>
            </div>
    @endforeach
@endsection 
