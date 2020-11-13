<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $primaryKey="id_cliente";
    protected $table="clientes";
    public function encomendas(){
        return $this->belongsTo('App\Models\Encomenda','id_encomenda');
    }
}
