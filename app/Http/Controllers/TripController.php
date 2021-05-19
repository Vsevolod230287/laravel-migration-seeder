<?php

namespace App\Http\Controllers;       // i controller

use Illuminate\Http\Request;
use App\Trip;              //i model

class TripController extends Controller
{
    public function index()
    {
        $trips = Trip::all();
        return view('home', compact('trips'));
    }
}
