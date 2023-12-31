<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index')->with('movies', $movies);
    }

    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('movies.show')->with('movie', $movie);
    }
}
