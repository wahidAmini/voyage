<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::all();
        return view('admin/dashboard', ['trips' => $trips]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/addtrip');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Trip::create([
            // here in $request->title => "title is the name of our input in form" and 'title' is the the DB column
            'city' => $request->city,
            'country' => $request->country,
            'continent' => $request->continent,
            'price' => $request->price,
            'organizer' => $request->organizer,
            'rating' => $request->rating,
            'img' => $request->image,
            'description' => $request->description,
        ]);
        return redirect('trips');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trip = Trip::find($id);
        // dd($trip);
        return view('tripdetail', ['trip' => $trip]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trip = Trip::find($id);
        // dd($editpost);
        return view('admin/updatetrip', ['edit' => $trip]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $trip = Trip::find($id);
        $trip->city = $request->city;
        $trip->country = $request->country;
        $trip->continent = $request->continent;
        $trip->price = $request->price;
        $trip->organizer = $request->organizer;
        $trip->rating = $request->rating;
        $trip->img = $request->image;
        $trip->description = $request->description;
        $trip->save();

        return redirect('trips');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trip = Trip::find($id);
        $trip->delete();
        return redirect('admin/trips')->with('success', 'Post deleted successfully!');
    }
}
