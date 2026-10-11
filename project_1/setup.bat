@echo off
echo ========================================================
echo   Konfiguracja i uruchamianie projektu Laravel-Lab
echo ========================================================

echo [1/5] Instalowanie zaleznosci PHP (Composer)...
call composer install

echo [2/5] Tworzenie pliku konfiguracyjnego .env...
if not exist .env (
    copy .env.example .env
    echo Utworzono plik .env z pliku .env.example.
) else (
    echo Plik .env juz istnieje. Pomijam kopiowanie.
)

echo [3/5] Generowanie klucza aplikacji (APP_KEY)...
call php artisan key:generate

echo [4/5] Tworzenie bazy danych SQLite (jesli nie istnieje)...
if not exist database\database.sqlite (
    type nul > database\database.sqlite
    echo Utworzono pusty plik database\database.sqlite.
)

echo [5/5] Uruchamianie migracji bazy danych...
call php artisan migrate --force

echo ========================================================
echo   Wszystko gotowe! Uruchom serwer deweloperski
echo   za pomoca ponizszego polecenia:
echo.
echo   php artisan serve
echo.
echo ========================================================