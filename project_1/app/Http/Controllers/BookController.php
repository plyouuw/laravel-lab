<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;

class BookController extends Controller
{
    private const ADMIN_PASSWORD = 'admin';

    private function checkAdmin(): void
    {
        if (!session('is_admin')) {
            abort(403, 'Brak uprawnień. Ta operacja wymaga uprawnień administratora.');
        }
    }

    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(StoreBookRequest $request)
    {
        Book::create($request->validated());

        return redirect()->route('books.index')->with('status', 'Nowa książka została dodana!');
    }

    public function edit(Book $book)
    {
        $this->checkAdmin();

        return view('books.edit', compact('book'));
    }

    public function update(StoreBookRequest $request, Book $book)
    {
        $this->checkAdmin();

        $book->update($request->validated());

        return redirect()->route('books.index');
    }

    public function delete(Book $book)
    {
        $this->checkAdmin();

        $book->delete();

        return redirect()->route('books.index');
    }

    public function adminLogin(Request $request)
    {
        if ($request->input('password') === self::ADMIN_PASSWORD) {
            session(['is_admin' => true]);
            return redirect()->route('books.index');
        }

        return back()->withErrors(['admin_password' => 'Niepoprawne hasło administratora.']);
    }

    public function adminLogout()
    {
        session()->forget('is_admin');

        return redirect()->route('books.index');
    }
}
