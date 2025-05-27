<?php

namespace App\Http\Controllers;
use App\Models\Author;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $authors = Author::all();
        return view('authors.create', compact('authors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|min:3|max:255',
            'cpf' => 'required|numeric|digits:11',
            'data_nasc' => 'date|required',
            'pais' => 'required|min:2|max:255',
            'estado' => 'required|min:2|max:255',
        ],[
            'nome.required' => 'O campo nome é obrigatório',
            'cpf.required' => 'CPF inválido',
            'data_nasc.required' => 'Data inválida',
            'pais.required' => 'O campo pais é obrigatório',
            'estado.required' => 'O campo estado é obrigatório',
        ]);
        Author::create($request->all()); // atribuição em massa
        return redirect()->route('authors.index');
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
        $author = Author::findOrFail($id);
        return view('authors.edit', compact('author'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $author = Author::findOrFail($id);
        $author->update($request->all());
        return redirect()->route('authors.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $authors = Author::findOrFail($id);
        $authors->delete();

        return redirect()->route('authors.index');
    }
}
