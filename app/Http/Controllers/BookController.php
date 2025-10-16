<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Menampilkan daftar semua buku.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Menampilkan form untuk membuat buku baru.
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Menyimpan buku baru ke database.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Buku baru berhasil ditambahkan!');
    }

    /**
     * ✅ FUNGSI EDIT: Menampilkan form edit dengan data buku yang ada.
     */
    public function edit(Book $book)
    {
        // Mengirim data buku yang akan diedit ke view 'books.edit'
        return view('books.edit', compact('book'));
    }

    /**
     * ✅ FUNGSI UPDATE: Memperbarui data buku di database.
     */
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'required|max:255',
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
            ->with('success', 'Data buku berhasil diperbarui!');
    }

    /**
     * ✅ FUNGSI DELETE: Menghapus data buku dari database.
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
            ->with('success', 'Buku berhasil dihapus!');
    }
}