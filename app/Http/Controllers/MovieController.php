<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
        return view('movies/create-movie', [
            'categories' => Category::all()->sortBy('name'),
        ]);
    }

    public function show($id) {
        $movie = Movie::find($id);

        return view('movies.show', ['movies' => $movie]);
    }






    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:2',
            'synopsis' => 'required|min:10',
            'duration' => 'required|integer|min:1',
            'youtube' => 'nullable|string',
            'released_at' => 'nullable|date',
            'category' => 'nullable|exists:categories,id',
        ]);

        $movie = new Movie();
        $movie->title = $request->title;
        $movie->synopsis = $request->synopsis;
        $movie->duration = $request->duration;
        $movie->youtube = $request->youtube;
        $movie->cover = 'https://image.tmdb.org/t/p/original/9uqCaPEIep4iBG3U4AqSP20LGjq.jpg';
        $movie->released_at = $request->released_at;
        $movie->category_id = $request->category;
        $movie->save();

        return redirect('/films');
    }
}

