<?php

namespace App\Models;

    use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{

    protected $table='cidades';
    protected $fillable = ['nome'];

    public function imoveis(){
        return $this->hasMany(Imovel::class);
    }

}
