<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Cidade;
use App\Models\Finalidade;
use App\Models\Tipo;
use App\Models\Imovel;
use App\Models\Proximidade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $imoveis = Imovel::join('cidades','cidade_id', '=', 'imoveis.cidade_id')
        // ->join('enderecos' , 'enderecos.imovel_id', '=','imoveis.id')
        // ->orderBy('cidades.nome','asc')->get();
        $imoveis = Imovel::with(['cidade','endereco'])->get();
        return view('admin.imoveis.index', compact('imoveis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cidades=Cidade::all();
        $tipos = Tipo::all();
        $finalidades=Finalidade::all();
        $action=route('admin.imoveis.store');

        $proximidades = Proximidade::all();
        return view('admin.imoveis.form', compact('action','cidades', 'tipos','finalidades','proximidades'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //transação em DB
        DB::beginTransaction();
            $imovel =  Imovel::create($request->all());

            $imovel->endereco()->create($request->all());

            if($request->has('proximidades')){
                //atualiza as proximidades attach e o detach
                $imovel->proximidades()->sync($request->proximidades);


            }

        DB::Commit();

         $request->session()->flash('sucesso', 'O imovel foi incluida com sucesso' );
         return redirect()->route('admin.imoveis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
