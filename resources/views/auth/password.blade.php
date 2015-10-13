
<h4>Przypominanie hasła</h4>

{!! Form::open(['url' => 'profil/password/email']) !!}

    <input type="email" name="email" class="form-control"  value="{{ old('email') }}" placeholder="Email">

{!! Form::submit('Przypomnienie', ['class'=>'btn btn-primary btn-flat center-block']) !!}

{!! Form::close() !!}

@if (count($errors) > 0)
	<ul>
	@foreach ($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
	</ul>
@endif

