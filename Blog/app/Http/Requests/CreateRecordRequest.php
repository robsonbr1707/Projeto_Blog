<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateRecordRequest extends FormRequest
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
            'title' => 'required|min:3|unique:records|max:100',
            'description_records' => 'required|min:5|max:2000',
            'post_category' => 'required',
            'image' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Campo Titulo Obrigatório!',
            'title.unique' => 'Este Titulo já Existe. Porfavor Escolha Outro.',
            'title.min' => 'Minimo de 3 Caracteres!',
            'title:max' => 'Maximo de caracter São 100!',
            'description_records.required' => 'Campo Descrição Obrigatório!',
            'description_records.min' => 'Minimo de 5 Caracteres!',
            'description_records.max' => 'Maximo de Caracter são 2000!',
            'post_category.required' => 'Porfavor Esolha Uma Categoria',
            'image.required' => 'PorFavor Coloque Uma Imagem!',
            'image.image' => 'Formato De Imagem Invalido!!'
        ];
    }
}
