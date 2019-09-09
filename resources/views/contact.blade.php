@extends('layouts.layout')


@section('title','contact')

@section('content')


<h1>{{ __('Contact') }}</h1>



<form method="POST" action="{{ route('contact') }}">
	@csrf
		<input name="name" placeholder="Nombre..." ><br>
		{!! $errors->first('name','<small>:message</small><br>') !!}

		<input type="email" name="email" placeholder="Email..."><br>
		{!! $errors->first('email','<small>:message</small><br>') !!}

		<input name="subject" placeholder="Asunto..." ><br>
		
		<textarea name="content" placeholder="Mensaje"> </textarea><br>
		<button>Enviar</button>

</form>
@endsection
