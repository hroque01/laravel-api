@extends('layouts.main-layouts')

@section('content')

    <h1>Movies</h1>
    <ul>
    @foreach ($movies as $movie)
        <li> {{ $movie -> name }} </li>
    @endforeach
    </ul>
@endsection