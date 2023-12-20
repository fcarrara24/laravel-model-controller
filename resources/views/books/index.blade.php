@extends('layouts.app')

@section('title', 'All movies')

@section('content')

    <main>
        <div class="container">
            <div class="row">
                @foreach ($books as $book)
                    <div class="col-12 col-md-4 col-lg-3 pb-4">
                        <div class="card h-100">
                        <img src="{{ $book->cover_image }}" alt="" class="w-100">
                        <a href="{{ route('books.show', $book->id) }}">
                            <h2>{{ $book->title }}</h2>
                        </a>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>





    </main>

@endsection
