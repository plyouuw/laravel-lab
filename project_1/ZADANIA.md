# Zajęcia 1
## Część 1
### Zad 1
Zadanie: Instalacja i uruchomienie środowiska XAMPP
Zainstaluj na swoim komputerze środowisko XAMPP, które umożliwia uruchamianie aplikacji internetowych napisanych w języku PHP oraz korzystanie z baz danych.

Wymagane składniki
Podczas instalacji wybierz następujące elementy:

Apache - serwer WWW,
PHP - interpreter języka PHP,
MariaDB - system zarządzania bazą danych,
phpMyAdmin - zalecane narzędzie do obsługi bazy danych w przeglądarce.
Przebieg zadania
Pobierz instalator XAMPP z oficjalnej strony projektu: https://www.apachefriends.org.

Zainstaluj program, wybierając wymagane składniki.

Uruchom XAMPP Control Panel.

Włącz usługi:

Apache,
MySQL/MariaDB.
Sprawdź działanie serwera, otwierając w przeglądarce adres:

http://localhost

### Zad 2
Zadanie: Uruchomienie środowiska XAMPP
Celem zadania jest uruchomienie serwera WWW Apache oraz serwera bazodanowego MariaDB w środowisku XAMPP.

Wykonaj następujące czynności:
Uruchom program XAMPP Control Panel.
Uruchom serwer Apache, klikając przycisk Start.
Otwórz przeglądarkę internetową i przejdź pod adres:
http://127.0.0.1
Jeżeli serwer Apache działa poprawnie, wyświetli się strona XAMPP.
Uruchom serwer bazodanowy MariaDB.
Sprawdź działanie serwera bazodanowego, przechodząc pod adres:
http://127.0.0.1/phpmyadmin
Jeżeli strona phpMyAdmin otworzy się poprawnie, oznacza to, że serwer Apache oraz serwer bazodanowy MariaDB działają prawidłowo.

Uwaga: w panelu XAMPP serwer MariaDB może być oznaczony jako MySQL. W takim przypadku należy uruchomić właśnie tę usługę.

### Zad 3
Zadanie: Utworzenie i uruchomienie pierwszego skryptu PHP
Utwórz prosty projekt PHP w środowisku XAMPP i sprawdź jego działanie w przeglądarce internetowej.

Treść zadania
Przejdź do katalogu: C:\xampp\htdocs
Utwórz w nim nowy katalog projektu o nazwie pierwszy_skrypt.
W katalogu pierwszy_skrypt utwórz plik index.php.
Umieść w pliku następujący kod PHP:
<?php echo "Witaj w moim pierwszym projekcie!"; ?>
Upewnij się, że serwer Apache w XAMPP jest uruchomiony.
Otwórz w przeglądarce adres:
http://localhost/pierwszy_skrypt/
Oczekiwany rezultat
W przeglądarce powinien zostać wyświetlony komunikat:

Witaj w moim pierwszym projekcie!

### Zad 4
Zadanie: Umieszczenie projektu w repozytorium GitHub
Celem zadania jest utworzenie projektu, założenie repozytorium na platformie GitHub oraz przesłanie do niego plików projektu.

Wykonaj następujące czynności:
Utwórz nowy projekt w lokalizacji:
C:\xampp\htdocs\git\project1
Otwórz terminal i przejdź do katalogu projektu:
cd C:\xampp\htdocs\git\project1
Zainicjalizuj repozytorium Git i dodaj pliki projektu:
git init
git add .
git commit -m "Pierwszy commit projektu"
Zaloguj się na stronie GitHub i utwórz nowe repozytorium o nazwie WSB_ZastProg.
Połącz lokalne repozytorium z repozytorium GitHub:
git branch -M main
git remote add origin https://github.com/NAZWA_UŻYTKOWNIKA/WSB_ZastProg.git
Prześlij projekt do repozytorium:
git push -u origin main
Sprawdź w przeglądarce, czy pliki projektu znajdują się w repozytorium WSB_ZastProg.

Sposób oddania zadania
Prześlij:

zrzut ekranu lokalnego projektu,
zrzut ekranu terminala z wykonanymi poleceniami Git,
link do repozytorium GitHub.
Repozytorium powinno być dostępne pod adresem:
https://github.com/NAZWA_UŻYTKOWNIKA/WSB_ZastProg

## Część 2
### Zad 1
Zadanie: Instalacja środowiska XAMPP
Jeżeli środowisko XAMPP nie zostało zainstalowane podczas ostatnich zajęć, zainstaluj je na swoim komputerze.

Podczas wykonywania zadania skorzystaj ze slajdów udostępnionych do zajęć oraz dostępnej dokumentacji w Internecie.

Wymagane składniki
serwer Apache,
interpreter języka PHP,
system zarządzania bazą danych MariaDB.
Oczekiwany rezultat
Po zakończeniu instalacji środowisko XAMPP powinno być gotowe do uruchamiania lokalnych aplikacji PHP oraz korzystania z baz danych MariaDB.

W razie problemów skorzystaj z materiałów dydaktycznych oraz dokumentacji dostępnej na stronie apachefriends.org.

### Zad 2
Zadanie: Utworzenie projektu Laravel za pomocą Composera
Celem zadania jest zainstalowanie narzędzia Composer, utworzenie projektu Laravel oraz zapoznanie się ze strukturą jego katalogów i plikiem odpowiedzialnym za routing.

Wykonaj następujące czynności:
Zainstaluj program Composer na swoim komputerze.
Otwórz wiersz poleceń lub terminal i sprawdź poprawność instalacji, wpisując:
composer --version
Przejdź do katalogu C:\xampp\htdocs:
cd C:\xampp\htdocs
Zainstaluj Laravel zgodnie z dokumenatcją
Utwórz nowy projekt Laravel o nazwie project_1:
laravel new project_1
Przejdź do katalogu utworzonego projektu:
cd project_1
Uruchom lokalny serwer projektu za pomocą narzędzia Artisan:
php artisan serve
Otwórz projekt w przeglądarce, przechodząc pod adres:
http://127.0.0.1:8000
Otwórz folder projektu project_1 w edytorze tekstowym, na przykład w programie Visual Studio Code.
Zapoznaj się ze strukturą katalogów projektu i wyświetl ich zawartość w edytorze.
Odszukaj i wyświetl zawartość pliku odpowiedzialnego za routing aplikacji:
routes/web.php

### Zad 3
Sprawdź gdzie znajduje się widok odpowiedzialny za wyświetlenie strony głównej po wejściu na stronę 127.0.0.1:8000

## Część 3
### Zad 1
Tworzenie własnego widoku i podpinanie zasobów statycznych
Kontekst i wprowadzenie
Katalog resources/views/ służy do przechowywania szablonów stron. Katalog public/ przechowuje pliki dostępne bezpośrednio przez przeglądarkę, takie jak CSS, JavaScript i obrazy.

W ćwiczeniu zmodyfikujesz również domyślny widok aplikacji w pliku routes/web.php.

Zadania do wykonania
Przejdź do katalogu resources/views/ i utwórz nowy plik widoku strona_glowna.blade.php z pełną strukturą HTML5. Dodaj nagłówek \<h1\>, krótki opis oraz sekcję nawigacji.
W katalogu public/ utwórz podfolder css/, a w nim plik style.css definiujący podstawowy wygląd strony, na przykład kolor tła, styl czcionki i marginesy.
Dołącz utworzony plik CSS w sekcji \<head\> szablonu strona_glowna.blade.php.
Zmodyfikuj trasę główną / w pliku routes/web.php, aby zamiast domyślnego widoku welcome zwracała Twój nowy widok strona_glowna.

### Zad 2
Podstawy Routingu – definiowanie tras i przypisywanie ich do kontrolera
Kontekst i wprowadzenie
Plik routes/web.php służy do definiowania tras aplikacji. Trasy umożliwiają mapowanie adresów URL na odpowiednie akcje za pomocą funkcji anonimowych (Closure) lub kontrolerów.

W ćwiczeniu wykorzystasz również polecenie Artisan CLI php artisan make:controller do wygenerowania nowego kontrolera.

Zadania do wykonania
Otwórz plik routes/web.php i zdefiniuj trasę dla metody GET pod adresem /witaj. Trasa powinna, przy użyciu funkcji anonimowej (Closure), zwracać tekst: Witaj w aplikacji!
Wygeneruj nowy kontroler w konsoli za pomocą polecenia:
php artisan make:controller TestController
Zdefiniuj w pliku routes/web.php nową trasę:
Route::get('/test', [TestController::class, 'index']);
Przenieś logikę zwracania odpowiedzi do metody index w nowo utworzonym kontrolerze TestController.

### Zad 3
Dynamiczne parametry ścieżki i wyświetlanie danych
Kontekst i wprowadzenie
Parametry ścieżki umożliwiają przekazywanie danych bezpośrednio w adresie URL. W tym ćwiczeniu dane z adresu zostaną pobrane w pliku routes/web.php, a następnie wyświetlone na ekranie.

Zadania do wykonania
Zdefiniuj trasę dynamiczną /users/{id}, która przechwyci wartość {id} i wyświetli na ekranie komunikat zawierający identyfikator użytkownika.
Zbuduj trasę:
/photo/{city?}/{street?}
Parametr {city} powinien mieć wartość domyślną null, a parametr {street} wartość domyślną 'main'.
Sprawdź, czy parametr $city został przekazany. Wykorzystaj warunek:
if (is_null($city))
Wyświetl na ekranie komunikat zgodny z poniższym wzorem:
To jest zdjęcie z {city} zrobione na ulicy {street}.
Jeżeli miasto nie zostanie podane, wyświetl komunikat:
To jest zdjęcie bez podanego miasta zrobione na ulicy {street}.
Wykonaj zadanie w jednej z dwóch wersji:
Bez wykorzystania Blade – zwróć gotowy tekst bezpośrednio z funkcji obsługującej trasę.
Z wykorzystaniem Blade – przekaż zmienne $city i $street do widoku, a następnie wyświetl dane w pliku widoku Blade.
Przykładowe adresy do przetestowania
/photo/Krakow/Dluga – powinien wyświetlić komunikat: To jest zdjęcie z Krakowa zrobione na ulicy Długa.
/photo – powinien wyświetlić komunikat z informacją o braku miasta i domyślną ulicą main.
Wersja z wykorzystaniem Blade
W przypadku korzystania z Blade utwórz widok, na przykład resources/views/photo.blade.php, i przekaż do niego dane pobrane z parametrów trasy.

Widok powinien wyświetlać dane w czytelnej formie, na przykład:


        <p>
        To jest zdjęcie
        @if ($city)
            z {{ $city }}
        @else
            bez podanego miasta
        @endif
        zrobione na ulicy {{ $street }}.
        </p>

Uwaga: w Laravelu opcjonalne parametry powinny znajdować się na końcu trasy. Dlatego zarówno {city?}, jak i {street?} zostały oznaczone jako opcjonalne.

### Zad 4
Obliczanie pojemności bryły na podstawie parametrów ścieżki
Opis zadania
Przygotuj stronę, na której użytkownik przekazuje w adresie URL trzy liczby: wysokość, szerokość oraz głębokość bryły.

Parametry powinny być przekazywane według schematu:

/[wysokość]/[szerokość]/[głębokość]

Przykładowy adres:

/12/32/321

Aplikacja powinna pobrać trzy wartości z adresu, obliczyć pojemność bryły według wzoru:

pojemność = wysokość × szerokość × głębokość

Następnie wynik powinien zostać przekazany do widoku i wyświetlony użytkownikowi w przeglądarce.

Oczekiwany efekt w przeglądarce
Dla adresu: /12/32/321

W przeglądarce powinien pojawić się żółta strona z komunikatem w kolorze niebieskim :

Prostopadłościan o wymiarach 12 × 32 × 321 ma pojemność 123264 m3. 

# Zajęcia 2
## Część 1
### Zad 1
Wyświetlanie i obsługa formularza (GET vs POST)
Kontekst i wprowadzenie
W frameworku Laravel formularz stanowi część warstwy widoku, natomiast logika jego przetwarzania spoczywa na kontrolerze. Wyświetlenie formularza oraz odebranie przesłanych danych wymagają zdefiniowania dwóch osobnych tras w pliku routes/web.php dla odpowiednich metod HTTP (GET oraz POST).

Zadania do wykonania
Utwórz kontroler o nazwie BookController.
Zdefiniuj w pliku routes/web.php trasy HTTP:
Trasy typu GET pod adresem /books/create, wywołującej metodę create kontrolera BookController, zwracającej widok z pliku resources/views/books/create.blade.php.
Trasy typu POST pod adresem /books, wywołującej metodę store kontrolera BookController.
Trasy typu GET pod adresem /books, wywołującej metodę index kontrolera BookController, zwracającej widok z pliku resources/views/books/index.blade.php.
Co wprowadza użytkownik: Na stronie /books/create użytkownik wpisuje w pojedynczym polu tekstowym tytuł książki (np. „Władca Pierścieni”) i klika przycisk wysłania formularza.
Co widzi użytkownik oraz jak zachowuje się strona:
Na stronie /books/create użytkownik widzi nagłówek strony, pojedyncze pole tekstowe z etykietą oraz przycisk „Zapisz książkę”.
Po kliknięciu przycisku przeglądarka automatycznie przenosi użytkownika pod adres /books, gdzie widoczny jest nagłówek „Lista książek” oraz komunikat informujący o odebraniu formularza.


### Zad 2
Ochrona formularza przed atakami CSRF
Kontekst i wprowadzenie
Atak CSRF polega na próbie wykonania nieautoryzowanego żądania w imieniu zalogowanego użytkownika. Laravel automatycznie weryfikuje token bezpieczeństwa dla wszystkich żądań modyfikujących stan aplikacji (POST, PUT, DELETE). Użycie odpowiedniej dyrektywy frameworka generuje w ukrytym polu unikalny token weryfikacyjny.

Zadania do wykonania
W pliku widoku resources/views/books/create.blade.php dołącz dyrektywę ochrony CSRF wewnątrz formularza.
Co widzi użytkownik i jak zachowuje się strona:
W oknie przeglądarki formularz wygląda identycznie jak w poprzednim ćwiczeniu.
W podglądzie kodu źródłowego strony (narzędzia deweloperskie) widoczne jest dodatkowe ukryte pole formularza o nazwie \_token zawierające wygenerowany ciąg znaków.
Przy standardowym wysłaniu formularza strona działa poprawnie i przekierowuje na adres /books.
W przypadku ręcznego usunięcia ukrytego pola z kodem tokena i próby wysłania formularza, serwer zwraca stronę z komunikatem błędu wygaśnięcia sesji (kod statusu HTTP 419).

### Zad 3
Odbieranie danych z formularza za pomocą obiektu Request
Kontekst i wprowadzenie
Klasa Illuminate\\Http\\Request reprezentuje przychodzące żądanie HTTP i umożliwia odczytywanie danych przesyłanych z formularza za pomocą dedykowanych metod pobierających pojedyncze wartości, całe tablice danych lub wyselekcjonowane podzbiory.

Zadania do wykonania
Rozbuduj widok resources/views/books/create.blade.php o kompletny zestaw pól.
Co wprowadza użytkownik:
Tytuł książki (pole tekstowe, nazwa title, np. „Limes inferior”)
Rok wydania (pole liczbowe, nazwa year, np. 1982)
Kategoria (lista rozwijana, nazwa category, z opcjami: Literatura piękna, Sci-Fi / Fantasy, Biografie, Naukowe)
Opis książki (wielolinijkowe pole tekstowe, nazwa description, krótki opis fabuły)
Dostępność w bibliotece (pole wyboru typu checkbox, nazwa is\_available, wartość 1)
Co widzi użytkownik: Czytelny formularz ze wszystkimi wymienionymi polami oraz przyciskiem wysyłania.
Logika i odbiór danych w kontrolerze: W metodzie store klasy BookController odczytaj dane z wstrzykniętego obiektu żądania na trzy sposoby:
Pobierz pojedynczą wartość dla pola title.
Pobierz pełną tablicę wszystkich przesłanych pól.
Pobierz wyłącznie podzbiór pól obejmujący title oraz category.


### Zad 4
Emulacja metod PUT/DELETE oraz zachowywanie danych (old input)
Kontekst i wprowadzenie
Formularze HTML obsługują bezpośrednio jedynie metody GET oraz POST. Do realizacji operacji edycji lub usunięcia zasobu stosuje się emulację metod. W przypadku przekierowania wstecznego funkcja pomocnicza odczytuje wartości zapisane wcześniej w sesji i wypełnia nimi pola.

Zadania do wykonania
Utwórz widok resources/views/books/edit.blade.php powiązany z trasą GET /books/1/edit i metodą edit w BookController.
Co widzi użytkownik na stronie edycji /books/1/edit:
Formularz edycji książki z wypełnionymi polami (tytuł, rok wydania, kategoria, opis, status dostępności) i przyciskiem „Zaktualizuj książkę”.
Osobny formularz zawierający wyłącznie przycisk „Usuń książkę”.
Co wprowadza użytkownik:
W formularzu edycji modyfikuje dowolne pole (np. zmienia rok wydania) i klika przycisk aktualizacji (żądanie wysyłane pod adres /books/1 z emulacją metody PUT).
W formularzu usuwania klika przycisk usunięcia (żądanie wysyłane pod adres /books/1 z emulacją metody DELETE).
Zachowanie formularza: Ustaw w polach formularza odczytywanie poprzednio wprowadzonych wartości z sesji w przypadku przekierowania wstecznego, tak aby dane nie znikały z pól po odświeżeniu strony.

## Część 2
### Zad 1
Pierwsza walidacja danych w kontrolerze
Kontekst i wprowadzenie
Walidacja po stronie serwera gwarantuje, że aplikacja przetwarza wyłącznie poprawne dane. Użycie metody walidacyjnej na obiekcie żądania w kontrolerze sprawdza przesłane dane i w przypadku błędu automatycznie wstrzymuje akcję oraz przekierowuje użytkownika na poprzednią stronę.

Zadania do wykonania
W metodzie store klasy BookController zaimplementuj walidację dla następujących pól i kryteriów:
title: pole wymagane, typ tekstowy, maksymalnie 255 znaków
year: pole opcjonalne, liczba całkowita z zakresu od 1450 do 2100
description: pole opcjonalne, typ tekstowy, maksymalnie 2000 znaków
is\_available: pole opcjonalne, wartość logiczna (prawda/fałsz)
Co wprowadza użytkownik: Próbuje wysłać formularz z niepoprawnymi danymi (np. pozostawiając puste pole tytułu, wpisując rok 1200 lub wprowadzając opis przekraczający 2000 znaków).
Co widzi użytkownik: Aplikacja wstrzymuje zapis danych i automatycznie przekierowuje użytkownika wstecz do formularza na stronie /books/create.

### Zad 2
Wyświetlanie komunikatów błędów w szablonie widoku
Kontekst i wprowadzenie
Po nieudanej walidacji framework przekazuje do widoku obiekt z błędami, co pozwala na wyświetlanie komunikatów bezpośrednio przy odpowiednich polach formularza oraz odtwarzanie wcześniej wpisanych poprawnych danych.

Zadania do wykonania
W pliku resources/views/books/create.blade.php przygotuj strukturę wyświetlania komunikatów.
Co widzi użytkownik po nieudanej walidacji:
Na samej górze strony: czerwone pole z tytulem „Proszę poprawić błędy w formularzu” oraz punktową listą zawierającą wszystkie wykryte błędy.
Bezpośrednio pod polem title: czerwony napis z konkretną treścią błędu dotyczącą tytułu.
Bezpośrednio pod polem year: czerwony napis z konkretną treścią błędu dotyczącą roku wydania.
Pola formularza, które zostały wypełnione poprawnie (np. wyselekcjonowana kategoria czy opis), nie czyszczą się i zachowują wpisane wartości.

### Zad 3
Wydzielenie walidacji do klasy Form Request i własne komunikaty
Kontekst i wprowadzenie
Dedykowana klasa Form Request oddziela logikę walidacji od kontrolera. Pozwala ona również na pełne dostosowanie treści komunikatów błędów do języka polskiego oraz podmianę technicznych nazw pól na przyjazne etykiety.

Zadania do wykonania
Utwórz klasę żądania StoreBookRequest w katalogu app/Http/Requests/.
Skonfiguruj klasę, włączając autoryzację, przenosząc tablicę reguł walidacyjnych oraz definiując własne tłumaczenia.
Podepnij klasę StoreBookRequest jako typ parametru w metodzie store klasy BookController.
Co widzi użytkownik: Komunikaty o błędach wyświetlają się w języku polskim z przyjaznymi nazwami pól, przykładowo:
„Pole 'tytuł książki' jest wymagane.” (zamiast technicznego komunikatu angielskiego)
„Wartość w polu 'rok wydania' musi znajdować się w przedziale od 1450 do 2100.”

### Zad 4
Reguły zależne, walidacja tablic i własna klasa reguły (Custom Rule)
Kontekst i wprowadzenie
Zaawansowana walidacja umożliwia uzależnienie wymagalności pól od innych parametrów, weryfikację struktury tablic oraz pisanie własnych reguł biznesowych w osobnych klasach.

Zadania do wykonania
Rozbuduj formularz w widoku oraz klasę StoreBookRequest o nowe elementy:
Numer półki (pole tekstowe, nazwa shelf): zaimplementuj regułę uzależniającą wymagalność tego pola od zaznaczenia pola is_available (numer półki jest wymagany tylko wtedy, gdy książka jest oznaczona jako dostępna).
Tagi / Słowa kluczowe (3 osobne pola tekstowe, nazwy tags[]): dodaj walidację sprawdzającą, czy przesyłana struktura jest tablicą oraz zwaliduj każdy element z osobna pod kątem typu tekstowego i maksymalnej długości 30 znaków.
Utwórz klasę własnej reguły walidacyjnej ValidBookTitle w katalogu app/Rules/ i podepnij ją do pola title w klasie StoreBookRequest.
Co wprowadza i widzi użytkownik:
Gdy użytkownik zaznaczy dostępność książki i pozostawi puste pole numeru półki, widzi komunikat: „Pole numer półki jest wymagane, gdy książka jest dostępna”.
Gdy użytkownik wpisze w polu tytułu słowo „test”, widzi komunikat z własnej reguły: „Wprowadzony tytuł książki jest niedozwolony”.

## Część 3
### Zad 1
Konfiguracja połączenia z bazą danych
Kontekst i wprowadzenie
Aplikacja przechowuje dane konfiguracyjne połączenia z bazą danych w pliku .env umieszczonym w głównym katalogu projektu, skąd są one odczytywane przez plik konfiguracyjny config/database.php. Po modyfikacji zmiennych środowiskowych w pliku .env wymagane może być wyczyszczenie pamięci podręcznej konfiguracji za pomocą narzędzia konsolowego.

Zadania do wykonania
Otwórz plik środowiskowy .env i skonfiguruj w nim parametry połączenia dla sterownika DB_CONNECTION=mysql (lub mariadb):
Nazwa hosta: DB_HOST=127.0.0.1
Port: DB_PORT=3306
Nazwa bazy danych: DB_DATABASE=library
Użytkownik: DB_USERNAME=root
Hasło: DB_PASSWORD=
Przeanalizuj plik config/database.php, aby zrozumieć, w jaki sposób wartości z pliku .env definiują domyślne połączenie z bazą danych.
Przetestuj czyszczenie pamięci podręcznej konfiguracji w konsoli po wprowadzeniu zmian w pliku środowiskowym.
Co zawiera baza danych: Baza danych o nazwie library staje się gotowa na przyjmowanie połączeń z aplikacji z ustawionym kodowaniem znaków utf8mb4.

### Zad 2
Projektowanie struktury tabeli za pomocą Migracji
Kontekst i wprowadzenie
Przed wykonaniem pierwszego zapisu danych z formularza wymagane jest przygotowanie schematu tabeli w bazie danych. Do utworzenia struktury tabeli wykorzystuje się klasę migracji umieszczoną w katalogu database/migrations/, co pozwala na programistyczne zdefiniowanie typów kolumn oraz ich właściwości bez użycia modeli ORM.

Zadania do wykonania
Utwórz nową klasę migracji przeznaczoną do utworzenia tabeli o nazwie books w katalogu database/migrations/.
Dokładna struktura tabeli books w bazie danych:
id – klucz główny (automatycznie przyrastający identyfikator numeryczny)
title – ciąg znaków o maksymalnej długości 200 znaków (pole wymagane)
author – ciąg znaków o maksymalnej długości 160 znaków (pole wymagane)
published_year – liczba całkowita bez znaku (pole opcjonalne/nullable)
Wykonaj migrację z poziomu konsoli, a następnie przetestuj jej wycofanie oraz ponowne uruchomienie.

### Zad 3
Zapis danych z formularza za pomocą surowego SQL (DB::insert)
Kontekst i wprowadzenie
Do wykonania bezpośredniego zapisu danych w bazie danych z poziomu kontrolera bez używania klas modeli Eloquent ORM stosuje się metodę insert() z fasady Illuminate\Support\Facades\DB. W celu ochrony aplikacji przed atakami SQL Injection dane z walidacji są przekazywane wyłącznie za pomocą placeholderów (znaków zapytania) oraz bezpiecznego wiązania parametrów (bindings).

Zadania do wykonania
W metodzie store klasy BookController zaimplementuj walidację danych z obiektu żądania dla pól:
title – pole wymagane, typ tekstowy, maksymalnie 200 znaków
author – pole wymagane, typ tekstowy, maksymalnie 160 znaków
published_year – pole opcjonalne, liczba całkowita z zakresu od 0 do 65535
Po pomyślnej walidacji wykonaj zapytanie wprowadzające rekord do tabeli books za pomocą metody DB::insert(), stosując zapytanie ze znakami zapytania jako placeholderami oraz przekazując bezpiecznie zweryfikowane wartości z tablicy po walidacji jako drugi argument metody (bindings).
Co wprowadza użytkownik: W formularzu na stronie /books/create wypełnia pola: tytuł książki (np. „Wiedźmin”), autor (np. „Andrzej Sapkowski”) oraz rok wydania (np. 1993) i klika przycisk wysłania formularza.
Co widzi użytkownik oraz jak zachowuje się aplikacja: Po wysłaniu formularza aplikacja przekierowuje użytkownika na nazwaną trasę books.store pod adres /books, a wprowadzony rekord zostaje trwale zapisany w tabeli books w bazie danych.

### Zad 4
Testowanie połączenia, diagnostyka i obsługa błędów bazodanowych
Kontekst i wprowadzenie
Proces integracji bazy danych wymaga weryfikacji na poszczególnych warstwach aplikacji – od poprawności konfiguracji i routingu, aż po wywołanie zapytania bazodanowego. Rozpoznawanie typowych komunikatów błędów (błędów połączenia, braku kolumn czy braku tokena CSRF) pozwala na szybką diagnozę problemów w aplikacji.

Zadania do wykonania
Przeanalizuj listę zarejestrowanych tras w aplikacji za pomocą narzędzia konsolowego, upewniając się, że trasa typu POST pod adresem /books poprawnie wskazuje na metodę store w BookController.
Przetestuj działanie aplikacji w sytuacjach awaryjnych i przeanalizuj zwracane komunikaty błędów:
Wprowadź błędną nazwę hosta lub port w pliku .env i wywołaj zapis z formularza, obserwując błąd połączenia bazodanowego (kod SQLSTATE[HY000]).
Zmień nazwę kolumny w zapytaniu SQL i przeanalizuj błąd informujący o braku kolumny w tabeli (błąd Unknown column).
Wyślij formularz bez tokena weryfikacyjnego CSRF i przeanalizuj komunikat błędu wygaśnięcia sesji (kod statusu HTTP 419).
Co widzi użytkownik: Po usunięciu usterek i prawidłowym wysłaniu formularza zweryfikuj poprawność zapisu bezpośrednio w bazie danych, upewniając się, że nowo dodana książka znajduje się w tabeli books ze wszystkimi przekazanymi wartościami.