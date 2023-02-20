<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Genre;
use App\Models\Tag;
use App\Models\Movie;

class MainController extends Controller
{
    public function home()
    {
        $genres = Genre::all();

        return view('pages.home', compact('genres'));
    }
    public function movieAll()
    {
        $movies = Movie::all();

        return view('pages.movie.all', compact('movies'));
    }
    public function movieCreate()
    {
        $genres = Genre::all();
        return view('pages.movie.create', compact('genres'));
    }
    public function movieStore(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|min:3',
            'year' => 'required|integer|min:0',
            'cashOut' => 'required|integer|min:0',
            'genre_id' => 'required|integer|min:1',
        ]);

        $genre = Genre::find($data['genre_id']);
        $movie = Movie::make($data);
        $movie->genre()->associate($genre);

        $movie->save();

        return route('home');
    }

}