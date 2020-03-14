@extends('backend.template.app')

@section('content')

<div class="container-fluid">

<table class="table table-bordered">
		<thead>
			<tr>
				<th>Id</th>
				<th>Post Title</th>
				<th>Post Description</th>
			</tr>
		</thead>
		<tr>
			<td>{{ $post->id}}</td>
			<td>{{ $post->title}}</td>
			<td>{{ $post->description}}</td>	
		</tr>
	</table>
</div>

@endsection