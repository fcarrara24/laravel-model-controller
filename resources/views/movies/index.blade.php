@extends('layouts.app')

@section('title', 'All movies')

@section('content')

    <main>
        <div class="container">
            <div class="row">
                @foreach ($movies as $movie)
                    <div class="col-12 col-md-4 col-lg-3">
                        <div class="card">
                            <img src="{{ $movie->image }}" alt="" class="w-100">
                            <a href="#">
                                <h2>{{ $movie->title }}</h2>
                            </a>
                            <span>{{ $movie->language }}</span>
                            <span>{{ $movie->vote }}</span>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>





    </main>

@endsection
