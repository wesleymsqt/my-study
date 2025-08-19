<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreVisitaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome_completo' => ['required', 'string', 'max:255'],
            'e_mail' => ['required', 'email', 'max:255'],
            'telefone' => ['nullable', 'string', 'max:20'],
            'empresa' => ['nullable', 'string', 'max:255'],
            'site_linkedin' => ['nullable', 'string', 'max:255'],
            'cidade_de_origem' => ['required', 'string', 'max:255'],
            'pais_de_origem' => ['required', 'string', 'max:255'],
            'data_da_visita' => ['required', 'date'],
            'cargo' => ['required', 'string', Rule::in([
                'Empresário', 'CEO', 'Diretor/gerente', 'Analista de Marketing',
                'Analista de RH/Inovação', 'Outros', 'Não se aplica'
            ])],
            'segmento' => ['required', 'string', Rule::in([
                'Governo', 'ONG', 'Estudantes', 'Professores', 'Startups',
                'Corporação', 'Investidor', 'Hub de Inovação', 'Outros'
            ])],
            'descricao_do_grupo' => ['required', 'string'],
            'informacao_extra' => ['nullable', 'string'],
            'objetivo_da_visita' => ['required', 'string', Rule::in([
                'Conhecer o funcionamento da Cadeia Criativa',
                'Encontrar oportunidades de parceria com a Cadeia Criativa',
                'Conhecer as startups da Comunidade',
                'Se inspirar e aprender sobre Inovação',
                'Trazer estudantes para a vivência de inovação e empreendedorismo',
                'Colaborar com a Cadeia Criativa'
            ])],
        ];
    }
}
