@extends('layouts.main-layouts')

@section('content')

    <h1>CREATE NEW MOVIE</h1>
    <form action="{{ route('movie.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="year">Year</label>
        <input type="number" name="year">
        <br>
        <label for="cashOut">Cash Out</label>
        <input type="number" name="cashOut">
        <br>
        <select name="genre_id" id="">
            @foreach ($genres as $genre)
                <option value="{{ $genre -> id }}">Genre {{ $genre -> name }}</option>
            @endforeach
        </select>
        <br>
        <label>Tag</label>
        <br>
        @foreach ($tags as $tag)
            <input type="checkbox" name="tags_id[]" id="{{ $tag -> id}}">
            <label for="{{ $tag -> id}}">{{ $tag -> name }}</label>
            <br>
        @endforeach
        <input type="submit" value="CREATE NEW MOVIE">
    </form>
    
@endsection