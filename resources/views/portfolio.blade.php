@extends('layout')
@section('title', 'Portfolio')
@section('content')
<h1>Projectos</h1>
<ul>
	@forelse($projects as $item)
	<li>{{ $item->title }}</li>
	@empty
	<li>No hay proyectos</li>
	@endforelse
</ul>
@endsection