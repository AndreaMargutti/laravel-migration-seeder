<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    //
    public function index () {
        $passengers = Passenger::all();
        return view('passenger.index', compact('passengers'));
    }
}