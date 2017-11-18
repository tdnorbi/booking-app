@extends('layouts.app')

@section('content')
	<h1>Accomodations</h1>
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Description</th>
			<th>Actions</th>
		</tr>
	@foreach ($accommodations as $accommodation)
		<tr>
			<td>{{$accommodation->id}}</td>
			<td>{{$accommodation->title}}</td>
			<td>{{$accommodation->description}}</td>
			<td>{{$accommodation->id}}</td>
		</tr>
	@endforeach
	</table>
@endsection