<?php

namespace App\Http\Controllers;

use App\Accommodation;
use Illuminate\Http\Request;

class AccommodationController extends Controller
{

    public function index()
    {
        $accommodations = Accommodation::all();
        //dd($accommodations);
        return view('accommodations.index', ['accommodations' => $accommodations]);
    }

    public function create()
    {
        return view('accommodations.create');
    }

    public function store(Request $request)
    {
        $title = $request->get('title');
        $description = $request->get('description');

        //dd($title);

        $accommodation = new Accommodation;
        $accommodation->title = $title;
        $accommodation->description = $description;

        $accommodation->save();

        return redirect()->action('AccommodationController@index');
    }

    public function show(Accommodation $accommodation)
    {
         return view('accommodations.show', compact('accommodation'));
    }

    public function edit(Accommodation $accommodation)
    {
        return view('accommodations.edit', compact('accommodation'));
    }


    public function update(Request $request, Accommodation $accommodation)
    {
        $accommodation->title = $request->input('title');
        $accommodation->description = $request->input('description');
        $accommodation->save();
        return redirect('/accommodations/'.$accommodation->id);
    }


    public function destroy(Accommodation $accommodation)
    {
        //
    }
}
