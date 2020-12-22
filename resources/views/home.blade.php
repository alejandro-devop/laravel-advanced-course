@extends('layout')

@section('content')
<div class="container">
	@auth
    {{auth()->user()->name}}
    @endauth
</div>
@endsection
