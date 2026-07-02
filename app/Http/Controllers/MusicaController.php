<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;
use App\Models\Musica;

class MusicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $musicas = Musica::with('album')->get();

        return view('musicas.index', compact('musicas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $album = Album::all();
        return view('musicas.create', compact('album'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|string|max:255',
            'album_id' => 'required|exists:album,id',
            'duracao' => 'required|string|max:10', 
        ]);


        $musica = Musica::create($request->all());

        return redirect()->route('album.show', $musica->album_id)
                         ->with('sucesso', 'Música adicionada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $musica = Musica::findOrFail($id);

        return redirect()->route('album.show', $musica->album_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $musica = Musica::findOrFail($id);
        $album_id = $musica->album_id; 
        $musica->delete();

        return redirect()->route('album.show', $album_id)
                         ->with('sucesso', 'Música removida com sucesso!');
    }
}
