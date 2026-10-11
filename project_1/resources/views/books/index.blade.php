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
                    <h1>Lista książek</h1>

                    @if (session('status'))
                        <div style="color: green; margin-bottom: 15px;">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><a href="{{ route('books.create') }}">Dodaj nową książkę</a></p>

                    <div style="border: 1px solid #ccc; padding: 10px; margin-bottom: 20px;">
                        @if (session('is_admin'))
                            <p><strong>Status:</strong> Zalogowano jako Administrator</p>
                            <form action="{{ route('admin.logout') }}" method="POST">
                                @csrf
                                <button type="submit">Wyloguj administratora</button>
                            </form>
                        @else
                            <form action="{{ route('admin.login') }}" method="POST">
                                @csrf
                                <label for="password">Hasło administratora:</label>
                                <input type="password" name="password" id="password" placeholder="Wpisz 'admin'" required>
                                <button type="submit">Zaloguj jako administrator</button>
                                @error('admin_password')
                                    <div style="color: red;">{{ $message }}</div>
                                @enderror
                            </form>
                        @endif
                    </div>

                    <ul>
                        @forelse ($books as $book)
                            <li style="margin-bottom: 10px;">
                                <strong>{{ $book->title }}</strong> - {{ $book->author }} ({{ $book->year ?? 'brak roku' }})
                                @if (session('is_admin'))
                                &nbsp;|&nbsp;
                                <a href="{{ route('books.edit', $book) }}">Modyfikuj pozycję</a>
                                &nbsp;|&nbsp;
                                <form action="{{ route('books.delete', $book) }}" method="POST" style="display: inline;" onsubmit="return confirm('Czy na pewno chcesz usunąć tę pozycję?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Usuń pozycję</button>
                                </form>
                                @endif
                            </li>
                        @empty
                            <li>Brak książek w bazie.</li>
                        @endforelse
                    </ul>
                </div>
            </main>
        </div>
    </body>
</html>
