<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    public function imovel(){
        //relacionamento uma para um
        return $this->hasOne(Imovel::class);

    }

}
