@extends('layouts.app')

@section('content')
    
    <form action="/bookings" method="post">
        
        {{ csrf_field() }}
        
        <p>
        	Select User:
        	<select name="user">
        		@foreach($users as $user)
        			<option value="{{$user->id}}">{{$user->name}}</option>
        		@endforeach
        	</select>
        </p>

        <p>
        	Select Room:
        	<select name="room">
        		@foreach($rooms as $room)
        			<option value="{{$room->id}}">{{$room->title}}</option>
        		@endforeach
        	</select>
        </p>
        <p>
        	Date Start: <input type="date" name="date_start" value="2018-03-24">
        </p>
        <p>
        	Date Start: <input type="date" name="date_end" value="2018-03-28">
        </p>

        
        {{--  <p>  --}}
            {{--  <select name="accommodation">
                @foreach ($accommodations as $accommodation)
                    <option value="{{ $accommodation->id }}">{{ $accommodation->title}}</option>
                @endforeach
            </select>  --}}
        {{--  </p>  --}}

        <input type="submit" value="Book now">

    </form>
@endsection