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
                <h1>
                    @if ($user_id)
                        Identyfikator użytkownika - {{ $user_id }}
                    @else
                        Brak podanego identyfikatu użytkownika.
                    @endif
                </h1>
            </main>
        </div>
    </body>
</html>
