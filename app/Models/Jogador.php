<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogador extends Model
{
    use HasFactory;
    protected $primaryKey="id_jogador";
    protected $table="jogadores";
    public function equipas(){
        return $this->belongsTo('App\Models\Equipa','id_equipa');
    }
}
