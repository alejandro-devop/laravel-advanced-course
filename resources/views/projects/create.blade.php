@extends('layout')
@section('title', 'Create project')
@section('content')
	<h1>Create project</h1>
	@if($errors->any())
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	@endif
	<form action="{{ route('projects.store') }}" method='POST'>
		@csrf
		<div>
			<label for="title">
				Name: 
				<input type="text" name="title">
			</label>
		</div>
		<div>
			<label for="url">
				url: 
				<input type="text" name="url">
			</label>
		</div>
		<div>
			<label for="title">
				description: 
				<textarea name="description"></textarea>
			</label>
		</div>
		<div>
			<button>Enviar</button>
		</div>
	</form>
@endsection