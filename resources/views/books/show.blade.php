@extends('layouts.app')

@section('title', 'specifiche')

@section('content')

    <div class="container">
        <div class="card ">
            <img src="{{ $book->cover_image }}" alt="" class="w-100">
            <a href="#">
                <h2>{{ $book->title }}</h2>
            </a>
            <span>{{ $book->plot }}</span>

        </div>
    </div>

@endsection
