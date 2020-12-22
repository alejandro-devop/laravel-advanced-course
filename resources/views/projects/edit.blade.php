@extends('layout')
@section('title', 'Create project')
@section('content')
	<h1>Editar projecto</h1>
	@if($errors->any())
	<ul>
		@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
		@endforeach
	</ul>
	@endif
	<form action="{{ route('projects.update', $project) }}" method='POST'>
		@csrf @method('PATCH')
		<div>
			<label for="title">
				Name: 
				<input type="text" name="title" value="{{ old('title', $project->title) }}">
			</label>
		</div>
		<div>
			<label for="url">
				url: 
				<input type="text" name="url" value="{{ old('url', $project->url) }}">
			</label>
		</div>
		<div>
			<label for="description">
				description: 
				<textarea name="description">{{  old('description', $project->description) }}</textarea>
			</label>
		</div>
		<div>
			<button>Actualizar</button>
		</div>
	</form>
@endsection