@extends('layout')
@section('title', 'Portfolio')
@section('content')
<h1>Projectos</h1>
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