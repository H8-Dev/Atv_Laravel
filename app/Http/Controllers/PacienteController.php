<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class PacienteController extends Controller
{
    
    public function index()
    {
        $pacientes = Paciente::all();
        return response()->json($pacientes);
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'cpf' => 'required|string|unique:pacientes,cpf',
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'senha' => 'required|string|min:6',
            'data_criacao' => 'required|date',
        ]);

        $paciente = Paciente::create($dados);
        return response()->json($paciente);
    }

    public function show($id)
    {
        $paciente = Paciente::findOrFail($id);
        return response()->json($paciente);
    }

    public function update(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->update([
            'cpf' => $request->$paciente->cpf,
            'nome' => $request->$paciente->nome,
            'sobrenome' => $request->$paciente->sobrenome,
            'senha' => $request->$paciente->senha,
            'data_criacao' => $request->$paciente->data_criacao,
        ]);

        return response()->json($paciente);
    }

    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();

        return 204;
    }
}
