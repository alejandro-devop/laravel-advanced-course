@extends('layout')
@section('title', 'Create project')
@section('content')
	<h1>Create project</h1>
	@include('partials.validation-errors')
	<form action="{{ route('projects.store') }}" method='POST'>
		@csrf
		@include('projects._form', ['btnText' => 'Guardar'])
	</form>
@endsection