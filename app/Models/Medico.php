<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Medico extends Model
{
    use HasFactory;

    protected $table = 'medicos';

    protected $fillable = [
        'crm',
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
