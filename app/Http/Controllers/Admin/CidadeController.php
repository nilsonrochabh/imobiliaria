<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cidade;
use Illuminate\Http\Request;
use App\Http\Requests\CidadeRequest;


class CidadeController extends Controller
{
    private $objCidade;

    public function __construct()
    {

        $this->objCidade = new Cidade();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subtitulo = "Lista de Cidades";
        $cidades = Cidade::all();
        return view('admin.cidades.index',compact('subtitulo', 'cidades'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $action = route('admin.cidades.store');
        return view('admin.cidades.formAdicionar', compact('action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CidadeRequest $request)
    {
        Cidade::create($request->all());
        $request->session()->flash('sucesso', 'A Cidade : $request->nome foi incluida com sucesso' );
        return redirect()->route('admin.cidades.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cidade = Cidade::find($id);
        $action = route('admin.cidades.update',$cidade->id);
        return view('admin.cidades.formAdicionar', compact('cidade','action'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CidadeRequest $request, $id)
    {
        $cidade = Cidade::find($id);
        $cidade->update($request->all());

        $request->session()->flash('sucesso', 'A Cidade : $request->nome foi alterada com sucesso' );
        return redirect()->route('admin.cidades.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        Cidade::destroy($id);
        $request->session()->flash('sucesso','Cidade Excluida com sucesso');
        return redirect()->route('admin.cidades.index');
    }
}
