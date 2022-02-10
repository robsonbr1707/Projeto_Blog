<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
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
            'category' => 'required|min:3|unique:posts|max:15',
            'description' => 'required|min:5|max:190',
            'name_slug' => 'required|min:5|max:190',
            'image' => 'required|image'
        ];
    }

    public function messages()
    {
        return [
            'category.required' => 'Campo Categoria Obrigatório!',
            'category.unique' => 'Está Categoria já Existe. Porfavor Escolha Outra.',
            'category.min' => 'Minimo de 3 Caracteres!',
            'category:max' => 'Maximo de caracter São 15!',
            'description.required' => 'Campo Descrição Obrigatório!',
            'description.min' => 'Minimo de 5 Caracteres!',
            'description.max' => 'Maximo de Caracter são 190!',
            'name_slug.required' => 'Campo Nome Da URL Obrigatório!',
            'name_slug.min' => 'Minimo de 5 Caracteres!',
            'name_slug.max' => 'Maximo de Caracteres São 190!',
            'image.required' => 'Porfavor Coloque Uma Imagem!',
            'image.image' => 'Formato De Imagem Invalido!!'

        ];
    }
}
