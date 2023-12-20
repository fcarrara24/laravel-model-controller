@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <h1>Home page</h1>
    </main>

    <a href="{{ route('movies.index') }}">film</a>

@endsection
