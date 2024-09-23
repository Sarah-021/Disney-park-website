<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ride;

class RidesCtrl extends Controller
{
    public function index()
    {
        $rides = Ride::all(); // Récupérer toutes les attractions depuis la base de données
        return view('rides', ['rides' => $rides]); // Passer les attractions à la vue rides.index
    }

}
