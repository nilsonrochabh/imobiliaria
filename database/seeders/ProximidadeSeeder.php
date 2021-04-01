<?php

namespace Database\Seeders;

use App\Models\Proximidade;
use Illuminate\Database\Seeder;

class ProximidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Proximidade::create(['nome'=>'Escola']);
        Proximidade::create(['nome'=>'Supermecado']);
        Proximidade::create(['nome'=>'Ponto de Taxí']);

    }
}
