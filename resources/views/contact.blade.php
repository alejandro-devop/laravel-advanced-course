@extends('layout')
@section('title', 'Contact')
@section('content')
	<h1>Contact</h1>
	<form method="post" action="{{ route('contact') }}">
		@csrf
		<input name="name" type="text" placeholder="Nombre"><br />
		<input name="subject" type="text" placeholder="Subject"><br />
		<input name="email" type="text" placeholder="Email"><br />
		<textarea name="content"></textarea><br />
		<button type="submit">Enviar</button>
	</form>
@endsection