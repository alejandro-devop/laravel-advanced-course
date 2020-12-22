@extends('layout')
@section('title', 'Create project')
@section('content')
	<h1>Editar projecto</h1>
	@include('partials.validation-errors')
	<form action="{{ route('projects.update', $project) }}" method='POST'>
		@csrf @method('PATCH')
		@include('projects._form', ['btnText' => 'Actualizar'])
	</form>
@endsection