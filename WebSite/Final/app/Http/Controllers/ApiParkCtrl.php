<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\park;

class ApiParkCtrl extends Controller
{
    public function getByName(string $name)
    {
        $parks = park::where('name', 'like', "%{$name}%")->get();
        // Retourne les résultats de la requête en format JSON
        return response()->json($parks);
    }
}
