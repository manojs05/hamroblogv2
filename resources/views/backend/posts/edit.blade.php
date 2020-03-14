@extends('backend.template.app')

@section('content')

<div class="container">

	<form action="{{ route('posts.update', ['post'=>$post->id]) }}" method="POST">
		@method('PUT')
		@csrf
		<div class="form-group">
		Post Title <input type="text" class="form-control" name="title" value="{{$post->title}}">
	</div>
	<div class="form-group">
		Post Body <textarea class="form-control" name = "description">{{$post->description}}</textarea>
	</div>
		<button type="submit" class="btn btn-primary">Save</button>
	</form>
</div>

@endsection