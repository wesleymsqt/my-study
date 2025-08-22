<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProdutoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nome' => [
                'sometimes',
                'required',
                'string',
                'max:255'
            ],
            'descricao' => [
                'sometimes',
                'nullable',
                'string'
            ],
            'preco' => [
                'sometimes',
                'required',
                'numeric',
                'gt:0'
            ],
            'estoque' => [
                'sometimes',
                'required',
                'integer',
                'min:0'
            ],
        ];
    }
}
