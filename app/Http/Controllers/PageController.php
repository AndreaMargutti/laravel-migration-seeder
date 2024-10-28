<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home() {

        $day = '2024-10-05';
        // $trains = Train::where('departure_day', $day)->get();
        $trains = Train::all();

        return view('pages.home', compact('trains', 'day'));
    }
}