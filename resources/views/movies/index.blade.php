@extends('layouts.app')

@section('title', 'All movies')

@section('content')

    <main>
        <ul>
            @foreach ($movies as $movie)
                <li>
                    <a href="#"> {{ $movie->title }} </a>
                </li>
            @endforeach
        </ul>
    </main>

@endsection
