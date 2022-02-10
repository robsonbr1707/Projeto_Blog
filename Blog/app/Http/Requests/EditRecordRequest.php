<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditRecordRequest extends FormRequest
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
            'title' => 'required|min:3|max:100|unique:records,title,'.$this->id,
            'description' => 'required|min:5|max:2000',
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
            'title.max' => 'Maximo de caracter São 100!',
            'description.required' => 'Campo Descrição Obrigatório!',
            'description.min' => 'Minimo de 5 Caracteres!',
            'description.max' => 'Maximo de Caracter são 2.000!',
            'post_category.required' => 'Porfavor Esolha Uma Categoria',
            'image.required' => 'PorFavor Coloque Uma Imagem!',
            'image.image' => 'Formato De Imagem Invalido!!'
        ];
    }
}
