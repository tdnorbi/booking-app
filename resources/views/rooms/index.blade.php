@extends('layouts.app')

@section('content')
	<h1>Accomodations</h1>
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Title</th>
			<th>Accomodation ID</th>
			<th>Actions</th>
		</tr>
	@foreach ($rooms as $room)
		<tr>
			<td>{{$room->id}}</td>
			<td>{{$room->title}}</td>
			<td>{{$room->accommodation_id}}</td>
			<td>{{$room->id}}</td>
		</tr>
	@endforeach
	</table>
@endsection