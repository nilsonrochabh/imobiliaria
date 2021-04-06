@extends('admin.layouts.principal')
@section('conteudo-principal')

<section class= "section">

<form action="{{$action}}" method="POST">
    @csrf
    <div class="row">
        <div class="input-field col s12">
            <input type="text" name="titulo" id="titulo" />
            <label for="titulo"> Titulo</label>
        </div>


    </div>
    <div class="row">
        <label for="cidade">Cidade</label>
        <div class="input-field col s12">

          <select  name="cidade_id" id="cidade_id">
            <option value="" disabled selected> Selecione uma Cidade </option>
            @foreach ($cidades as $cidade )
                <option value="{{$cidade->id}}">{{$cidade->nome}}</option>
            @endforeach
        </select>



        </div>

    </div>


<div class="row">
    <label for="tipo_id"> Tipo</label>
    <div class="input-field col s12">
            <select  name="tipo_id" id="tipo_id">
                <option value="" disabled selected> Selecione uma Tipo </option>
                @foreach ($tipos as $tipo )
                    <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
                @endforeach

            </select>

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


</div>

    <div class="row">
           <div class="input-field col s4">
                <input type="number" name="preco" id="preco">
                 <label for="preco">Preço</label>
               </div>
               <div class="input-field col s4">
                    <input type="number" name="dormitorios" id="dormitorios">
                    <label for="dormitorio">Quantidade de Dormitorios</label>
                </div>

                <div class="input-field col s4">
                    <input type="number" name="salas" id="salas">
                    <label for="salas">Quantidade de Salas</label>
                </div>

    </div>

    <div class="row">
        <div class="input-field col s4">
            <label for="terrenos">Terreno em M²</label>
             <input type="number" name="terreno" id="terreno">

            </div>
            <div class="input-field col s4">
                <label for="banheiros">Quantidade de Banheiros</label>
                 <input type="number" name="banheiros" id="banheiros">

             </div>

             <div class="input-field col s4">
                <label for="garagens">Vagas na Garagem</label>
                 <input type="number" name="garagens" id="garagens">

             </div>

             <div class="row">
                 <div class="input-field col s12" >
                    <label for="descricao"> Descrição</label>
                     <textarea name="descricao" id="descricao" class="materialize-textarea"></textarea>

                 </div>
             </div>

             {{--Endereço--}}
            <div class="row">
                <div class="input-field col s5">
                    <label for="rua">Rua</label>
                    <input type="text" name="rua" id="rua"/>

                </div>
                <div class="input-field col s2">
                    <label for="numero">Numero</label>
                    <input type="number" name="numero" id="numero"/>
                </div>
                <div class="input-field col s2">
                    <label for="complemento">Complemento</label>
                    <input type="text" name="complemento" id="complemento"/>
                </div>
                <div class="input-field col s3">
                    <label for="bairro">Bairro</label>
                    <input type="text" name="bairro" id="bairro"/>
                </div>

            </div>



 </div>

 <div class="row">
     <div class="input-field col s12">
         <select name="proximidades[]" id="proximidades" multiple>
            <option value="" disabled >Selecione as Proximidades </option>
            @foreach ($proximidades as $proximidade )
                <option value="{{$proximidade->id}}">{{$proximidade->nome}}</option>
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

