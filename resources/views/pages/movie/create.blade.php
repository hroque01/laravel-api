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
        <input type="submit" value="CREATE NEW MOVIE">
    </form>
    
@endsection