<?php

namespace Database\Factories;

use App\Models\Visita;
use Illuminate\Database\Eloquent\Factories\Factory;

class VisitaFactory extends Factory
{
    protected $model = Visita::class;

    public function definition(): array
    {
        return [
            'nome_completo' => $this->faker->name,
            'e_mail' => $this->faker->unique()->safeEmail,
            'telefone' => $this->faker->phoneNumber,
            'empresa' => $this->faker->company,
            'site_linkedin' => $this->faker->url,
            'cidade_de_origem' => $this->faker->city,
            'pais_de_origem' => $this->faker->country,
            'data_da_visita' => $this->faker->date(),
            'cargo' => $this->faker->randomElement([
                'Empresário', 'CEO', 'Diretor/gerente', 'Analista de Marketing',
                'Analista de RH/Inovação', 'Outros', 'Não se aplica'
            ]),
            'segmento' => $this->faker->randomElement([
                'Governo', 'ONG', 'Estudantes', 'Professores', 'Startups',
                'Corporação', 'Investidor', 'Hub de Inovação', 'Outros'
            ]),
            'descricao_do_grupo' => $this->faker->sentence,
            'informacao_extra' => $this->faker->paragraph,
            'objetivo_da_visita' => $this->faker->randomElement([
                'Conhecer o funcionamento da Cadeia Criativa',
                'Encontrar oportunidades de parceria com a Cadeia Criativa',
                'Conhecer as startups da Comunidade',
                'Se inspirar e aprender sobre Inovação',
                'Trazer estudantes para a vivência de inovação e empreendedorismo',
                'Colaborar com a Cadeia Criativa'
            ]),
        ];
    }
}
