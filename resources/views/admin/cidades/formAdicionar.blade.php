@extends('admin.layouts.principal')
@section('conteudo-principal')
<section class="section">

    @if (isset($cidade))
        <h2>Editar Cidade</h2>
    @else
     <h2>Adicionar Cidade</h2>
    @endif


  <div class="row">
    {{-- @if ($errors->any())
        <div class="red-text">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif --}}


  <form class="col s12" action="{{$action}}" method="POST">
    {{--Cross site Requeste forgery --}}
    @csrf
    @isset($cidade)


        @method('PUT')
    @endisset
      <div class="row">
        <div class="input-field col s6">
            <input  id="nome" type="text" name = "nome" class="validate" value="{{old('nome',$cidade->nome ?? '')}}" />
          <label for="nome">Nome</label>
          @error('nome')
        <span class="red-text text-accent-3"><small>{{$message}}</small></span>
          @enderror
        </div>
    </div>
    <div class="right-align">
    <a href="{{url()->route('admin.cidades.index')}}" class="btn-flat waves-effect">Cancelar</a>
    <button class="btn waves-effect waves-light " type="submit">Salvar</button>
         </div>
    </form>
  </div>
</section>

@endsection
