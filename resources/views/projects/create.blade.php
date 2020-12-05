@extends('layout')
@section('title', 'Create project')
@section('content')
	<h1>Create project</h1>
	<form action="">
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
	</form>
@endsection