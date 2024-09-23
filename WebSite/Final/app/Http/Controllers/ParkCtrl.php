<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\park;
use App\Models\Type;

class ParkCtrl extends Controller
{
    public function getById($id)
    {
        $park = park::findOrFail($id);
        $types = Type::all();
        return view('park', ['park' => $park, 'types' => $types]);
    }
}