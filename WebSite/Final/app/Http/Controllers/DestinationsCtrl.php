<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationsCtrl extends Controller
{
    public function getAll()
    {
        $destinations = Destination::with('parks')->get();
        return view("destinations", ["destinations" => $destinations]);
    }
}