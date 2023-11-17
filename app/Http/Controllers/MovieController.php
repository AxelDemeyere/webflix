<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index()
    {
        // return Category::all(); // SELECT * FROM categories

        return view('movies/index', [
            'movies' => Movie::all(),
        ]);

    }

    public function create() 
    {
        return view('movies/create-movie');
    }

    public function store(Request $request)
    {
        /* --------------------------------------------------------------
        Validation du champ name. Si aucune erreur, on va dans le save 
        si il y a une erreur Lavarel renvoie vers le form avec les errurs
        -------------------------------------------------------------- */ 
    $request->validate([
        'title' => 'required|min:3|unique:categories|max:10',
    ]);

        // Insertion en base de données
        $movie = new Movie();
        // $request->name est le contenu de value
        $movie->title = $request->title;
        $movie->synopsys = $request->synopsys;
        $movie->duration = $request->duration;
        $movie->released_at = $request->released_at;
        $movie->category = $request->category;

        $movie->save(); // INSERT INTO ... en Laravel 
        
        return redirect('/films');
        
    }
}
