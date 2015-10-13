<h4>Ustalenie nowego hasła</h4>

{!! Form::open(['url' => 'profil/password/reset']) !!}
    <input type="hidden" name="token" value="{{ $token }}">

            <input type="email" name="email" class="form-control"  value="{{ old('email') }}" placeholder="Email">


            <input type="password" name="password" class="form-control" placeholder="Nowe hasło">

            <input type="password" name="password_confirmation" class="form-control" placeholder="Powtórzenie nowego hasła">

        {!! Form::submit('Zatwierdzenie', ['class'=>'btn btn-primary btn-flat center-block']) !!}

{!! Form::close() !!}
@if (count($errors) > 0)
	<ul>
	@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
@endif