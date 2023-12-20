<div class=" headerCol ">
    <div class="container d-flex flex-row justify-content-center gap-4 py-5 ">
        <div class=" text-black {{ Route::currentRouteName() == 'home' ? 'myActive' : '' }}">Header <a
                href="{{ route('home') }}"><i class="fa-solid fa-home" style="color: #000000"></i></a></div>
        <div><a href="{{ route('movies.index') }}"
                class=" text-black text-decoration-none {{ Route::currentRouteName() == 'movies.index' ? 'myActive' : '' }}">film</a>
        </div>
        <div><a href="{{ route('books.index') }}"
                class=" text-black text-decoration-none {{ Route::currentRouteName() == 'books.index' ? 'myActive' : '' }}">book</a>
        </div>
    </div>
</div>
