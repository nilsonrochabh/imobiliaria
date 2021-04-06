<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{

    protected $table = "imoveis";

    protected $fillable=[
        'titulo',
        'terreno',
        'salas',
        'dormitorios',
        'garagens',
        'banheiros',
        'descricao',
        'preco',
        'cidade_id',
        'tipo_id',
        'finalidade_id'

    ];

    public function endereco(){
        //relacionamento uma para um
        return $this->hasOne(Endereco::class);

    }

    public function cidade(){
        return $this->belongsTo(Cidade::class);
    }
    public function finalidade(){
        return $this->belongsTo(Finalidade::class);
    }
    public function tipo(){
        return $this->belongsTo(Tipo::class);
    }


    //muitos para muitos
    public function proximidades(){
        return $this->belongsToMany(Proximidade::class)->withTimestamps();

    }
}
