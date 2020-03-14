@extends('backend.template.app')

@section('content')

<div class="container">
	
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form action="{{ route('posts.store') }}" method="POST">
		@csrf
		<div class="form-group">
		Post Title <input type="text" class="form-control" name="title">
	</div>
	<div class="form-group">
		Post Body <textarea class="form-control" name = "description"></textarea>
	</div>
		<button type="submit" class="btn btn-primary">Save</button>
	</form>

</div>

@endsection