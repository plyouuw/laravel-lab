<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'app_name') }}</title>

        <link rel="stylesheet" href="{{ asset('/css/style.css') }}"

    </head>
    <body style="background-color: yellow;">
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
                <h1 style="color: blue;">
                    @if (is_null($wysokosc) || is_null($szerokosc) || is_null($glebokosc))
                        Brak wymaganych wymiarów w żądaniu.
                    @else
                        @php($pojemnosc = $wysokosc * $szerokosc * $glebokosc)
                        Prostopadłościan o wymiarach {$wysokosc} × {$szerokosc} × {$glebokosc} ma pojemność {$pojemnosc} m<sup>3</sup>.
                    @endif
                </h1>
            </main>
        </div>
    </body>
</html>
