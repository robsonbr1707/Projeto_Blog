<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class ValidateCommentRequest extends FormRequest
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

    protected function prepareForValidation()
    {
        $words = ['merda', 'palmeiras', 'douma'];
        $this->merge([
            'comment' => Str::remove($words,$this->comment)
        ]);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'comment' => 'required|min:2'
        ];
    }

    public function messages()
    {
        return [
            'comment.required' => 'Não é permitido comentarios Vazios!!',
            'comment.min' => 'Minimo De 2 Caracteres',
            'comment.comment' => 'Não é permitido'
        ];
    }
}
