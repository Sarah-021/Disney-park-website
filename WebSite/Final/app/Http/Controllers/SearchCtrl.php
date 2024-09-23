<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\park;
use App\Models\Destination;

class SearchCtrl extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        $parks = park::where('name', 'like', "%{$query}%")->get();
        $destinations = Destination::where('name', 'like', "%{$query}%")->get();
        return view('search');
    }
}

