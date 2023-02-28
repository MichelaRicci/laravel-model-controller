<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function home()
    {
    
        $movies = Movie::all();

        return view('home', compact('movies'));
    }
}
