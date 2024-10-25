<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home() {

        $trains = Train::where('departure_day', '2024-10-05')->get();

        return view('pages.home', compact('trains'));
    }
}