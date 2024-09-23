<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class DestinationCtrl extends Controller
{
    public function getById($id)
    {
        //exception ModelNotFoundException est levée si pas trouvé
        $destinations = Destination::findOrFail($id);
        $parks = $destinations->parks;
        return view('Destination', ['destination' => $destinations, 'parks' => $parks]);
    }


}
