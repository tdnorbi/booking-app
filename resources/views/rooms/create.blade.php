@extends('layouts.app')

@section('content')
	<h1>Add room to {{$accommodation->title}}</h1>
	<form action="/rooms" method="post">
	{{ csrf_field() }}
		<p>Title <input type="text" name="title"></p>
		{{-- <p>Accommodation:  --}}
			<input type="text" name="accommodation" value="{{$accommodation->id}}" hidden="">
			{{-- <select name="accommodation">
				@foreach ($accommodations as $accommodation)
					<option value="{{$accommodation->id}}">{{$accommodation->title}}</option>
				@endforeach
			</select> --}}
		{{-- </p> --}}
		<input type="submit" name="submit">
	</form>
@endsection