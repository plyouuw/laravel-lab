<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'app_name') }} - Edycja książki</title>
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    </head>
    <body>
        <header>
            <nav>
                <a href="{{ route('books.index') }}">Lista książek</a>
            </nav>
        </header>
        <div>
            <main>
                <div>
                    <h1>Modyfikuj pozycję: {{ $book->title }}</h1>

                    @if ($errors->any())
                    <div style="color: red;">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <form action="{{ route('books.update', $book) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div>
                            <label for="title">Tytuł:</label>
                            <input type="text" id="title" name="title" value="{{ old('title', $book->title) }}" required>
                        </div>
                        <br>
                        <div>
                            <label for="year">Rok wydania:</label>
                            <input type="number" id="year" name="year" value="{{ old('year', $book->year) }}">
                        </div>
                        <br>
                        <div>
                            <label for="category">Kategoria:</label>
                            <select id="category" name="category">
                                <option value="Literatura piękna" {{ old('category', $book->category) == 'Literatura piękna' ? 'selected' : '' }}>Literatura piękna</option>
                                <option value="Sci-Fi / Fantasy" {{ old('category', $book->category) == 'Sci-Fi / Fantasy' ? 'selected' : '' }}>Sci-Fi / Fantasy</option>
                                <option value="Biografie" {{ old('category', $book->category) == 'Biografie' ? 'selected' : '' }}>Biografie</option>
                                <option value="Naukowe" {{ old('category', $book->category) == 'Naukowe' ? 'selected' : '' }}>Naukowe</option>
                            </select>
                        </div>
                        <br>
                        <div>
                            <label for="description">Opis książki:</label><br>
                            <textarea id="description" name="description" rows="4" cols="50">{{ old('description', $book->description) }}</textarea>
                        </div>
                        <br>
                        <div>
                            <label>
                                <input type="checkbox" id="is_available" name="is_available" value="1" {{ old('is_available', $book->is_available) ? 'checked' : '' }}>
                                Dostępność w bibliotece
                            </label>
                        </div>
                        <br>
                        <button type="submit">Zaktualizuj książkę</button>
                        <a href="{{ route('books.index') }}">Anuluj</a>
                    </form>

                    <br>
                    <hr>
                    <br>

                    {{-- Osobny formularz do usuwania książki --}}
                    <form action="{{ route('books.delete', $book) }}" method="POST" onsubmit="return confirm('Czy na pewno chcesz usunąć tę książkę?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Usuń książkę</button>
                    </form>
                </div>
            </main>
        </div>
    </body>
</html>

