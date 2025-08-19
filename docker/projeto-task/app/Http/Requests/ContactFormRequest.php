<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ContactFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['nullable', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'instituicao' => ['nullable', 'string', 'max:255'],
            'subject' => ['required', Rule::in(['Dúvida', 'Elogio', 'Sugestão'])],
            'message' => ['required', 'string'],
        ];
    }
}
