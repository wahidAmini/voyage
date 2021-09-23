<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home()
    {
        return view('voyage/home');
    }
    public function trips()
    {
        return view('voyage/trips');
    }
    public function trip($id = null)
    {
        return view('voyage/tripdetail', [['tripId' => $id]]);
    }
}
