<!-- resources/views/auth/login.blade.php -->
@extends('master')

@section('title')
	Laravel - Start
@endsection


@section('content')
        Login customer
        @if (count($errors) > 0)
	<ul>
	@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
@endif
        <form method="POST" action="/profil/login">
        {!! csrf_field() !!}
        <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
        </div>
        <div>
        Password
        <input type="password" name="password" id="password">
        </div>
        <div>
        <input type="checkbox" name="remember"> Remember Me
        </div>
        <div>
        <button type="submit">Login</button>
        </div>
        </form>
        <a href="{{ url('profil/password/email') }}">Przypominanie hasła</a>
@endsection
