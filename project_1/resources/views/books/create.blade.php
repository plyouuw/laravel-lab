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
                        @csrf
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
                        <div>
                            <label for="category">Kategoria:</label>
                            <select id="category" name="category">
                                <option value="Literatura piękna" {{ old('category') == 'Literatura piękna' ? 'selected' : '' }}>Literatura piękna</option>
                                <option value="Sci-Fi / Fantasy" {{ old('category') == 'Sci-Fi / Fantasy' ? 'selected' : '' }}>Sci-Fi / Fantasy</option>
                                <option value="Biografie" {{ old('category') == 'Biografie' ? 'selected' : '' }}>Biografie</option>
                                <option value="Naukowe" {{ old('category') == 'Naukowe' ? 'selected' : '' }}>Naukowe</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <label for="description">Opis książki:</label><br>
                            <textarea id="description" name="description" rows="4" cols="50">{{ old('description') }}</textarea>
                        </div>
                        <br>
                        <div>
                            <label>
                                <input type="checkbox" id="is_available" name="is_available" value="1" {{ old('is_available') ? 'checked' : '' }}>
                                Dostępność w bibliotece
                            </label>
                        </div>
                        <br>
                        <button type="submit">Zapisz książkę</button>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>
