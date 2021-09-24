<?php

namespace App\Http\Controllers;

use App\Models\Trip;
use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home()
    {
        return view('voyage/home');
    }
    public function trips()
    {
        $trips = Trip::all();
        return view('voyage/trips', ['trips' => $trips]);
    }
    public function trip($id = null)
    {
        // return view('voyage/tripdetail', [['tripId' => $id]]);
        $trip = Trip::find($id);
        // dd($trip);
        return view('voyage/tripdetail', ['trip' => $trip]);
    }
}
