<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;

class MedicoController extends Controller
{
    
    public function index()
    {
        $medicos = Medico::all();
        return response()->json($medicos);
    }

    public function store(Request $request)
    {
        $dados = $request->validate([
            'crm'=> 'required|string|unique:medicos,crm',
            'cpf' => 'required|string|unique:medicos,cpf',
            'nome' => 'required|string|max:255',
            'sobrenome' => 'required|string|max:255',
            'senha' => 'required|string|min:6',
            'data_criacao' => 'required|date',
        ]);

        $medico = Medico::create($dados);
        return response()->json($medico);
    }

    public function show($id)
    {
        $medico = Medico::findOrFail($id);
        return response()->json($medico);
    }

    public function update(Request $request, $id)
    {
        $medico = Medico::findOrFail($id);
        $medico->update([
            'cpf' => $request->$medico->cpf,
            'nome' => $request->$medico->nome,
            'sobrenome' => $request->$medico->sobrenome,
            'senha' => $request->$medico->senha,
            'data_criacao' => $request->$medico->data_criacao,
        ]);

        return response()->json($medico);
    }

    public function destroy($id)
    {
        $medico = Medico::findOrFail($id);
        $medico->delete();

        return 204;
    }
}
