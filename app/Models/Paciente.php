<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $fillable = [
        'cpf',
        'nome',
        'sobrenome',
        'senha',
        'data_criacao'
    ];

    public function paciente(){
        return $this->hasMany(Chat::class);
    }
}
