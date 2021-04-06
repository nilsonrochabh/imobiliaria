@extends('admin.layouts.principal')
@section('conteudo-principal')

<section class= "section">


    <table class = 'highlight'>
         <thead>
             <th>cidade</th>
             <th>bairro</th>
             <th>tirulo</th>
             <th>Opções</th>
         </thead>
         <tbody>
             @forelse ($imoveis as $imovel )
                <tr>
                <td>{{$imovel->cidade->nome}}</td>
                <td>{{$imovel->endereco->bairro}}</td>
                <td>{{$imovel->titulo}}</td>
                <td class = 'right-align' >
                    <span>
                    <a href="{{route('admin.imoveis.edit',$imovel->id)}}">
                            <i class="material-icons blue-text text-accent-2">edit</i>
                        </a>
                    </span>
                    <form action="{{route('admin.imoveis.destroy',$imovel->id)}}" method="POST" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" style="border:0; background:transparent; ">
                            <span style="cursor: pointer">
                                <i class="material-icons red-text #ff1743">delete_forever</i>
                               </span>
                        </button>
                    </form>
               </td>
                </tr>
             @empty
                 <tr>
                     <td colspan="4"> Não exite imoveis Cdastrados</td>
                 </tr>
             @endforelse
         </tbody>
    </table>


    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.imoveis.create')}}">
        <i class="large material-icons" >add</i>
    </a>
    </div>


    </section>
@endsection
