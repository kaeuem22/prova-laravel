<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;


class apiEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Employee::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
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

            $employee = Employee::create(
                $request->all()
            );

            return response()->json($employee,201);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employee = Employee::find($id);

        if(!$employee){
            return response()->json(['message' => 'Funcionário não encontrado'], 404);
        }

        return response()->json($employee);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employee = Employee::find($id);

        if(!$employee){
            return response()->json(['message' => 'Funcionário não encontrado'], 404);
        }

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

        $employee->update($request->all());

        return response()->json(['message' => 'Funcionário atualizado com sucesso','employee' => $employee]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employee = Employee::find($id);

        if(!$employee){
            return response()->json(['message' => 'Funcionário não encontrado'], 404);
        }

        $employee->delete();

        return response()->json(['message' => 'Funcionário deletado com sucesso']);
    }
}
