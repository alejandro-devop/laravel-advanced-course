@extends('layout')
@section('title', 'Contact')
@section('content')
	<h1>{{ __('Contact') }}</h1>
	<form method="post" action="{{ route('contact') }}">
		@csrf
		{{-- @if($errors->any())
			@foreach($errors->all() as $error)
			<p>{{ $error }}</p>
			@endforeach
		@endif --}}
		<input name="name" type="text" placeholder="Nombre" value="{{ old('name') }}"><br />
		{!! $errors->first('name', '<small>:message</small></br>') !!}
		<input name="subject" type="text" placeholder="Subject" value="{{ old('subject') }}"><br />
		{!! $errors->first('subject', '<small>:message</small></br>') !!}
		<input name="email" type="text" placeholder="Email" value="{{ old('email') }}"><br />
		{!! $errors->first('email', '<small>:message</small></br>') !!}
		<textarea name="content">{{ old('content') }}</textarea><br />
		{!! $errors->first('content', '<small>:message</small></br>') !!}
		<button type="submit">@lang('Send')</button>
	</form>
@endsection