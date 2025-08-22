<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProdutoRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'nome' => [
                'required',
                'string',
                'max:255'
            ],
            'descricao' => [
                'nullable',
                'string'
            ],
            'preco' => [
                'required',
                'numeric',
                'gt:0'
            ],
            'estoque' => [
                'required',
                'integer',
                'min:0'
            ],
        ];
    }
}
