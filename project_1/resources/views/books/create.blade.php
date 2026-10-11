<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'app_name') }}</title>

        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    </head>
    <body>
        <header>
            @if (Route::has('strona_glowna'))
            <nav>
                <a href="{{ route('strona_glowna') }}">
                    Strona główna
                </a>
            </nav>
            @endif
        </header>
        <div>
            <main>
                <div>
                    <h1>Dodaj nową książkę</h1>
                    @if ($errors->any())
                    <div style="color: red;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="/books" method="POST">
                        <div>
                            <label for="title">Tytuł:</label>
                            <input type="text" id="title" name="title" value="{{ old('title') }}" required>
                        </div>
                        <br>
                        <div>
                            <label for="author">Autor:</label>
                            <input type="text" id="author" name="author" value="{{ old('author') }}" required>
                        </div>
                        <br>
                        <div>
                            <label for="year">Rok wydania:</label>
                            <input type="number" id="year" name="year" value="{{ old('year') }}">
                        </div>
                        <br>
                        <button type="submit">Zapisz książkę</button>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>
