@extends('layouts.main-layouts')

@section('content')

    <h1>EDIT NEW MOVIE</h1>
    <form action="{{ route('movie.update', $movie)}}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" value="{{ $movie -> name }}">
        <br>
        <label for="year">Year</label>
        <input type="number" name="year" value="{{ $movie -> year }}">
        <br>
        <label for="cashOut">Cash Out</label>
        <input type="number" name="cashOut" value="{{ $movie -> cashOut }}">
        <br>
        <label for="genre_id">Genre</label>
        <select name="genre_id">
            @foreach ($genres as $genre)
                <option value="{{ $genre -> id }}"
                    @selected($movie -> genre -> id == $genre -> id)
                >
                {{ $genre -> name }}
                </option>
            @endforeach
        </select>
        <br>
        <label>Tag</label>
        <br>
        @foreach ($tags as $tag)
            <input type="checkbox" 
            name="tags_id[]" 
            value="{{ $tag -> id }}" 
            id="{{ $tag -> id}}"
                @foreach ($movie -> tags as $movieTag)
                    @checked($movieTag -> id == $tag -> id)
                @endforeach
            >
            <label for="{{ $tag -> id}}">{{ $tag -> name }}</label>
            <br>
        @endforeach
        <input type="submit" value="UPDATE MOVIE ID: {{ $movie -> id }}">
    </form>
    
@endsection