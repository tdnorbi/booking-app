@extends('layouts.app')

@section('content')
	<h1>Edit {{$accommodation->title}}</h1>
	<form action="/accommodations/{{$accommodation->id}}" method="post">
	{{ csrf_field() }}
	{{ method_field('put') }}
		<p>Title <input type="text" name="title" value="{{ $accommodation->title }}"></p>
		<p>Description: <input type="text" name="description" value="{{ $accommodation->description }}"></p>
		<input type="submit" name="submit" value="Update">
	</form>
@endsection