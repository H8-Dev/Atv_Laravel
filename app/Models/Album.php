<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $fillable = [
        'titulo',
        'artista_id',
        'ano_lancamento',
        'url_imagem',
    ];
    protected $table = 'album';


    public function musicas(){

        return $this->hasMany(Musica::class);
    }

    public function artista(){

       return $this->belongsTo(Artista::class, 'artista_id');
    }
}
