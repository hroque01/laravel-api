@extends('layouts.main-layouts')

@section('content')

    <h1>Movies</h1>
    <a href="{{ route('movie.create') }}">CREATE NEW MOVIE</a>
    <ul>
    @foreach ($movies as $movie)
        <li> {{ $movie -> name }} </li>
    @endforeach
    </ul>
@endsection