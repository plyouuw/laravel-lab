<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'app_name') }}</title>

        <link rel="stylesheet" href="{{ asset('/css/style.css') }}"

    </head>
    <body>
        <header>
            <nav>
            @if (Route::has('welcome'))
                <a href="{{ route('welcome') }}">
                    Welcome
                </a>
            @endif
            @if (Route::has('user.show'))
                <br />
                <a href="{{ route('user.show', ['user_id' => 'test']) }}">
                    Sprawdz testowego usera
                </a>
            @endif
            @if (Route::has('photo.show'))
                <br />
                <a href="{{ route('photo.show', ['city' => 'WARSZWAWA', 'street' => 'WIEJSKA']) }}">
                    Sprawdź zdjęcie z Warszawy
                </a>
            @endif
            @if (Route::has('wymiary'))
                <br />
                <a href="{{ route('wymiary', ['wysokosc' => 1, 'szerokosc' => 2, 'glebokosc' => 3]) }}">
                    Oblicz pojemność prostopadłościanu 1cm x 2cm x 3cm
                </a>
            @endif
            </nav>
        </header>
        <div>
            <main>
                <div>
                    <h1>Strona główna aplikacji</h1>
                    <p>Treść akapitu,<br /> która przechodzi do nowej linii.</p>
                    <ul>
                        <li>
                            <span>Pierwszy punkt listy</span>
                            <span>Bottom text</span>
                        </li>
                        <li>
                            <span>Drugi punkt listy</span>
                            <span>Bottom text</span>
                        </li>
                    </ul>
                </div>
            </main>
        </div>
    </body>
</html>
