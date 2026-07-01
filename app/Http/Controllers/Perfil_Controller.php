<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Perfil_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $nome = "Abacate Romênio";

        return view("perfil.perfil", compact("nome"));
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $tarefas = ['Estudar Blade', 'Salvar o mundo', 'Dormir'];
        
        return view('perfil.list', compact('tarefas'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
