<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ImovelRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'titulo'=>'bail|required|min:3|max:100',
            'cidade_id'=>'bail|required|integer',
            'tipo_id'=>'bail|required|integer',
            'finalidade_id'=>'bail|required|integer',
            'preco'=>'bail|required|numeric|min:0',
            'dormitorios'=>'bail|required|integer|min:0',
            'salas'=>'bail|required|integer|min:0',
            'terrono'=>'bail|required|integer|min:0',
            'banheiros'=>'bail|required|integer|min:0',
            'garagens'=>'bail|required|integer|min:0',
            'salas'=>'bail|nullable|string',
            'rua'=>'bail|required|min:1|max:100',
            'garagens'=>'bail|required|integer',
            'complemento'=>'bail|nullable|string',
            'rua'=>'bail|required|min:3|max:50',
            'proximidades'=>'bail|nullable|array'
        ];
    }


    //customizar campos

    public function attributes()
    {
        return[
            'cidade_id' =>'Cidade',
            'tipo_id' =>'Tipo de imóvel',
            'finalidade_id' =>'Finalidade',
            'preco' =>'Preço',
            'dormitorios' =>'Quantidade de dormitórios',
            'garagens' =>'Quantidade de vagas'
        ];
    }
}
