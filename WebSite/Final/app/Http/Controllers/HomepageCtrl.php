<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\park;

class HomepageCtrl extends Controller
{

    public function index()
    {
        $parks = park::all();
        $highlightedPark = $parks->random();
        return view('homepage', compact('highlightedPark'));
        //compact:  ['highlightedPark' => $highlightedPark] (tableau associatif)
    }
}
