<?php

namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{

    protected $table='cidades';
    protected $filable = ['nome'];

    public function imoveis(){
        return $this->hasMany(Imovel::class);
    }

}
