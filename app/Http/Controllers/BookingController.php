<?php

namespace App\Http\Controllers;

use App\Booking;
use Illuminate\Http\Request;
use App\Room;
use App\User;

class BookingController extends Controller
{

    public function index()
    {
        $bookings = Booking::all();
        return view('bookings.index', ['bookings' => $bookings]);
    }

    public function create()
    {
        $rooms = Room::all();
        $users = User::all();
        return view('bookings.create', compact(['rooms', 'users']));
    }

    public function store(Request $request)
    {
        $booking = new Booking();

        $booking->user_id = $request->input('user');
        $booking->room_id = $request->input('room');
        $booking->date_start = $request->input('date_start');
        $booking->date_end = $request->input('date_end');

        $booking->save();

        return redirect('/bookings');
    }

    public function show(Booking $booking)
    {
        //
    }

    public function edit(Booking $booking)
    {
        //
    }

    public function update(Request $request, Booking $booking)
    {
        //
    }

    public function destroy(Booking $booking)
    {
        //
    }
}
