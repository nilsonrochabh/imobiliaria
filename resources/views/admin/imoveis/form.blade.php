@extends('admin.layouts.principal')
@section('conteudo-principal')

<section class= "section">

<form action="{{$action}}" method="POST">
    @csrf
    <div class="row">
        <div class="input-field col s12">
        <input type="text" name="titulo" id="titulo" value="{{old('titulo')}}" />
            <label for="titulo"> Titulo</label>
            @error('titulo')
            <span class="red-text text-accent-3"><small>{{$message}}</small></span>
              @enderror
        </div>


    </div>
    <div class="row">
        <label for="cidade">Cidade</label>
        <div class="input-field col s12">

          <select  name="cidade_id" id="cidade_id">
            <option value="" disabled selected> Selecione uma Cidade </option>
            @foreach ($cidades as $cidade )
                <option value="{{$cidade->id}}" {{old('cidade_id')==$cidade->id ? 'selected': ''}}>{{$cidade->nome}}</option>
            @endforeach

        </select>

        @error('cidade_id')
        <span class="red-text text-accent-3"><small>{{$message}}</small></span>
      @enderror

        </div>

    </div>


<div class="row">
    <label for="tipo_id"> Tipo</label>
    <div class="input-field col s12">
            <select  name="tipo_id" id="tipo_id">
                <option value="" disabled selected> Selecione uma Tipo </option>
                @foreach ($tipos as $tipo )
                    <option value="{{$tipo->id}}" {{old('tipo_id')==$tipo->id ? 'selected': ''}}>{{$tipo->nome}}</option>
                @endforeach

            </select>
            @error('tipo_id')
            <span class="red-text text-accent-3"><small>{{$message}}</small></span>
        @enderror
    </div>

</div>

<div class="row">

        @foreach ($finalidades as $finalidade )
            <span class="col s2">
                <label for="" style="margin-right:30px">
                    <input type="radio" name="finalidade_id" id="finalidade_id"
                        class="with-gap" value="{{$finalidade->id}}"/>
                    <span>{{$finalidade->nome}}</span>
                </label>
            </span>

        @endforeach
        @error('finalidade_id')
        <span class="red-text text-accent-3"><small>{{$message}}</small></span>
          @enderror

</div>

    <div class="row">
           <div class="input-field col s4">
                <input type="number" name="preco" id="preco" value="{{old('preco')}}" />
                 <label for="preco">Preço</label>
                 @error('preco')
                 <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                   @enderror
               </div>
               <div class="input-field col s4">
                    <input type="number" name="dormitorios" id="dormitorios" value="{{old('dormitorios')}}" />
                    <label for="dormitorio">Quantidade de Dormitorios</label>
                    @error('dormitorios')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                      @enderror
                </div>

                <div class="input-field col s4">
                    <input type="number" name="salas" id="salas" value="{{old('salas')}}" />
                    <label for="salas">Quantidade de Salas</label>
                    @error('salas')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                      @enderror
                </div>

    </div>

    <div class="row">
        <div class="input-field col s4">
            <label for="terrenos">Terreno em M²</label>
             <input type="number" name="terreno" id="terreno" value="{{old('terreno')}}" />
             @error('terreno')
                <span class="red-text text-accent-3"><small>{{$message}}</small></span>
            @enderror
            </div>
            <div class="input-field col s4">
                <label for="banheiros">Quantidade de Banheiros</label>
                 <input type="number" name="banheiros" id="banheiros" value="{{old('banheiros')}}" />
                 @error('banheiros')
                     <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror

             </div>

             <div class="input-field col s4">
                <label for="garagens">Vagas na Garagem</label>
                 <input type="number" name="garagens" id="garagens" value="{{old('garagens')}}" />
                 @error('garagens')
                     <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                @enderror

             </div>

             <div class="row">
                 <div class="input-field col s12" >
                    <label for="descricao" > Descrição</label>
                 <textarea name="descricao" id="descricao" class="materialize-textarea">{{old('descricao')}}</textarea>

                 </div>
             </div>

             {{--Endereço--}}
            <div class="row">
                <div class="input-field col s5">
                    <label for="rua">Rua</label>
                    <input type="text" name="rua" id="rua" value="{{old('rua')}}"/>
                    @error('rua')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                      @enderror
                </div>
                <div class="input-field col s2">
                    <label for="numero">Numero</label>
                    <input type="number" name="numero" id="numero" value="{{old('numero')}}"/>
                    @error('numero')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                      @enderror
                </div>
                <div class="input-field col s2">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" id="complemento" value="{{old('complemento')}}"/>

                </div>
                <div class="input-field col s3">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro" value="{{old('bairro')}}"/>
                    @error('bairro')
                    <span class="red-text text-accent-3"><small>{{$message}}</small></span>
                      @enderror
                </div>

            </div>



 </div>

 <div class="row">
     <div class="input-field col s12">
         <select name="proximidades[]" id="proximidades" multiple>
            <option value="" disabled >Selecione as Proximidades </option>
            @foreach ($proximidades as $proximidade )
                <option value="{{$proximidade->id}}"
                    @if(old('proximidade'))
                        {{in_array('proximidade->id', old('proximidade'))?'selected' : ''}}
                    @endif
                    >{{$proximidade->nome}}</option>
            @endforeach
         </select>
         <label for="proximidades"> Proximidades</label>
     </div>


    </div>




         <div class="right-align">
            <a href="{{url()->route('admin.imoveis.index')}}" class="btn-flat waves-effect">Cancelar</a>
                <button class="btn waves-effect waves-light " type="submit">Salvar</button>
        </div>



</form>


    </section>

@endsection

