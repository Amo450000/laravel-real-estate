<?php

namespace App\Http\Controllers;

use App\Models\Property;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Récupérer les 4 derniers bien
        $properties = Property::orderBy('created_at', 'desc')->limit(4)->get();
        
        return view('home', [
            'properties' => $properties
        ]);
        
    }
}
