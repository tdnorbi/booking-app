<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Accommodation;

class AccommodationController extends Controller
{
    public function index()
    {
    	$accommodations = Accommodation::all();
    	//dd($accommodations);
    	return view('accommodations.index', ['accommodations' => $accommodations]);
    }
}
