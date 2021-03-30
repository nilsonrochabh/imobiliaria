@extends('admin.layouts.principal')
@section('conteudo-principal')

<section class= "section">


    <table class = 'highlight'>
        <thead>
            <tr>
                <th> Cidade</th>
                <th class = 'right-align'>Opções</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cidades as $cidade)
                <tr>
                    <td>{{$cidade->nome}}</td>
                    <td class = 'right-align' >
                        <span>
                        <a href="{{route('admin.cidades.edit',$cidade->id)}}">
                                <i class="material-icons blue-text text-accent-2">edit</i>
                            </a>
                        </span>
                        <form action="{{route('admin.cidades.destroy',$cidade->id)}}" method="POST" style="display: inline">
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
                    <td colspan="2">Não Existe cidades</td>
                </tr>
            @endforelse
            <tr>

            </tr>
        </tbody>
    </table>

    <div class="fixed-action-btn">
        <a class="btn-floating btn-large waves-effect waves-light" href="{{route('admin.cidades.store')}}">
        <i class="large material-icons" >add</i>
    </a>
    </div>


    </section>
@endsection
