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
        return view('pages.movie.create');
    }
    public function movieStore(Request $request)
    {
        $data = $request->all();

        dd($data);
    }

}