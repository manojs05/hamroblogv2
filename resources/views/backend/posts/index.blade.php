@extends('backend.template.app')

@section('content')

<div class="container-fluid">

<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Post Title</th>
				<th>Post Description</th>
				<th>Action</th>
			</tr>
		</thead>
		@foreach($posts as $post)
		<tr>
			<td>{{ $post->id}}</td>
			<td>{{ $post->title}}</td>
			<td>{{ $post->description}}</td>
			<td>
				<form method="POST" action="{{ route('posts.destroy', ['post'=>$post->id]) }}">
				<a class="btn btn-info" href="{{ route('posts.show', ['post'=>$post->id])}}">Show</a>
				<a class="btn btn-primary" href="{{ route('posts.edit', ['post'=>$post->id])}}">Edit</a>

				
					@method('DELETE')
					@csrf
					<input type="submit" class="btn btn-danger" value="Delete">
					
				</form>
			</td>	
		</tr>
		@endforeach
	</table>
</div>

@endsection