@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <main>
        <h1 class="text-center">Home page</h1>
        <div class="d-flex flex-row justify-content-center gap-3 pt-5 align-items-center">

        <div class="myCircle d-flex flex-row justify-content-center  align-items-center ">
            <a href="{{ route('movies.index') }}">films</a>
        </div>
        <div class="myCircle d-flex flex-row justify-content-center  align-items-center ">
            <a href="{{ route('books.index') }}">books</a>
        </div>


    </div>
    </main>




@endsection
