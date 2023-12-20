@extends('layouts.app')

@section('title', 'specifiche')

@section('content')

    <div class="container">
        <div class="card ">
            <img src="{{ $movie->image }}" alt="" class="w-100">
            <a href="#">
                <h2>{{ $movie->title }}</h2>
            </a>
            <span>{{ $movie->language }}</span>
            <span>{{ $movie->vote }}</span>

        </div>
    </div>

@endsection
