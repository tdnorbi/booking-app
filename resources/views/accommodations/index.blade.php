@extends('layouts.app')

@section('content')
	<h1>Accomodations</h1>
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Description</th>
			<th>Nr Rooms</th>
			<th>Actions</th>
		</tr>
	@foreach ($accommodations as $accommodation)
		<tr>a
			<td>{{$accommodation->id}}</td>
			<td>{{$accommodation->title}}</td>
			<td>{{$accommodation->description}}</td>
			<td>{{$accommodation->rooms->count()}}</td>
			<td>{{$accommodation->id}}</td>
		</tr>
	@endforeach
	</table>
@endsection