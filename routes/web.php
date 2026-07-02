<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistaController;
use App\Models\Album;
use App\Models\Jogo;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MusicaController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/jogos', function () {
    $jogo = Jogo::all();
    return $jogo;
});

Route::get('/albuns', function () {
    $album = Album::all();
    return $album;
});


Route::get('/create-test-album', function () {
    $album = Album::create([
        'nome' => 'A Sad Cartoon',
        'artista'=> 'Loathe',
        'ano_lancamento'=> '2020',
        'url_imagem'=> 'https://akamai.sscdn.co/uploadfile/letras/albuns/a/9/b/8/1002591611951253.jpg',
    ]);
    return $album;
});

Route::resource('/musics', MusicaController::class);
Route::resource('/albuns', AlbumController::class);
Route::resource('/artistas', ArtistaController::class);
