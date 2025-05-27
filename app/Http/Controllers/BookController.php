<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Genre;
use App\Models\Author;

use Illuminate\Http\Request;

class BookController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $genres = Genre::all();
        $authors = Author::all();
        return view('books.create', compact('genres','authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:3|max:255',
            'resumo' => 'max:255',
            'data_pub' => 'date|required',
            'preco' => 'numeric|required',
            'genre_id' => 'required',
            'author_id' => 'required',
        ],[
            'titulo.required' => 'O campo titulo é obrigatório',
            'resumo.required' => 'Resumo excede o número de caracteres permitidos',
            'data_pub.required' => 'Data inválida',
            'preco.required' => 'O campo preco é obrigatório',
            'genre_id.required' => 'O campo estado é obrigatório',
            'author_id.required' => 'O campo estado é obrigatório',
        ]);

        Book::create($request->all()); // atribuição em massa
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = Book::findOrFail($id);
        $genres = Genre::all();
        $authors = Author::all();
        return view('books.edit', compact('book','genres','authors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $books = Book::findOrFail($id);
        $books->update($request->all());
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $books = Book::findOrFail($id);
        $books->delete();

        return redirect()->route('books.index');
    }
}
