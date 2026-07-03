<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Musica extends Model
{
    use HasFactory;


    protected $fillable = [
        'titulo',
        'artista',
        'album_id',
        'duracao',
    ];

    public function album(){
        return $this->belongsTo(Album::class, 'album_id');
    }


}
