<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateVisitaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nome_completo' => ['sometimes', 'string', 'max:255'],
            'e_mail' => ['sometimes', 'email', 'max:255'],
            'telefone' => ['sometimes', 'string', 'max:20'],
            'empresa' => ['sometimes', 'string', 'max:255'],
            'site_linkedin' => ['sometimes', 'string', 'max:255'],
            'cidade_de_origem' => ['sometimes', 'string', 'max:255'],
            'pais_de_origem' => ['sometimes', 'string', 'max:255'],
            'data_da_visita' => ['sometimes', 'date'],
            'cargo' => ['sometimes', 'string', Rule::in([
                'Empresário', 'CEO', 'Diretor/gerente', 'Analista de Marketing',
                'Analista de RH/Inovação', 'Outros', 'Não se aplica'
            ])],
            'segmento' => ['sometimes', 'string', Rule::in([
                'Governo', 'ONG', 'Estudantes', 'Professores', 'Startups',
                'Corporação', 'Investidor', 'Hub de Inovação', 'Outros'
            ])],
            'descricao_do_grupo' => ['sometimes', 'string'],
            'informacao_extra' => ['sometimes', 'string'],
            'objetivo_da_visita' => ['sometimes', 'string', Rule::in([
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
