@extends('layout')
@section('title', 'Portfolio')
@section('content')
<h1>Projectos</h1>
<a href="{{ route('projects.create') }}">Create project</a>
<ul>
	@forelse($projects as $item)
	<li>
		<a href="{{ route('projects.show', $item) }}">{{ $item->title }}</a>
	</li>
	@empty
	<li>No hay proyectos</li>
	@endforelse
</ul>
@endsection