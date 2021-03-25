<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CidadeController extends Controller
{
    public function cidade(){
        $subtitulo = 'Lista de Cidades';
        $cidades = ['BH', 'Januária','Montes Claros', 'Vespasiano'];
        return view('admin.cidades.index', compact('subtitulo','cidades'));
    }
}
