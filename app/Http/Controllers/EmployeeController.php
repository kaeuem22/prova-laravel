<?php

namespace App\Http\Controllers;
use App\Models\Employee;


use Illuminate\Http\Request;

class EmployeeController extends Controller
{
        /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::all();
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $employees = Employee::all();
        return view('employees.create', compact('employees'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'nome' => 'required|min:3|max:255',
            'cpf' => 'required|numeric|digits:11',
            'email' => 'email|required',
            'data_nasc' => 'date|required',
            'estado' => 'required|min:2|max:255',
        ],[
            'nome.required' => 'O campo nome é obrigatório',
            'cpf.required' => 'CPF inválido',
            'email.required' => 'O campo email é obrigatório',
            'data_nasc.required' => 'Data inválida',
            'estado.required' => 'O campo estado é obrigatório',
        ]);

        Employee::create($request->all()); // atribuição em massa
        return redirect()->route('employees.index');
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
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employees = Employee::findOrFail($id);
        $employees->update($request->all());
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employees = Employee::findOrFail($id);
        $employees->delete();

        return redirect()->route('employees.index');
    }
}
