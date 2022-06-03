<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => 'required|min:1|max:50',
            'descricao' => 'required|min:10|max:200'
        ];
    }

    public function attributes()
    {
        return [
            'nome' => 'Nome',
            'descricao' => 'Descricao'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'O campo :attribute é obrigatório',
            'nome.min' => 'O campo :attribute deve conter no mínimo 1 caractere',
            'nome.max' => 'O campo :attribute deve conter no máximo 50 caracteres',
            'descricao.required' => 'O campo :attribute é obrigatório',
            'descricao.min' => 'O campo :attribute deve conter no mínimo 10 caracteres',
            'descricao.max' => 'O campo :attribute deve conter no máximo 200 caracteres',
        ];
    }

}
