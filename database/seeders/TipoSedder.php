<?php

namespace Database\Seeders;
use App\Models\Tipo;

use Illuminate\Database\Seeder;

class TipoSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tipo::create(['nome'=>'Apartamento']);
        Tipo::create(['nome'=>'Casa']);
        Tipo::create(['nome'=>'Ponto Comercial']);
        Tipo::create(['nome'=>'Lote']);
        Tipo::create(['nome'=>'Terreno']);


    }
}
