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
	<button>{{ $btnText }}</button>
</div>