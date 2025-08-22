<?php

namespace Tests\Feature;

use App\Models\Visita;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VisitaTest extends TestCase
{
    use RefreshDatabase;

    public function test_can_list_visitas(): void
    {
        Visita::factory()->count(5)->create();
        $response = $this->getJson('/visitas'); // <-- Corrigido aqui
        $response->assertStatus(200);
        $response->assertJsonCount(5);
    }

    public function test_can_create_a_visita(): void
    {
        $visitaData = Visita::factory()->make()->toArray();
        $response = $this->postJson('/visitas', $visitaData); // <-- Corrigido aqui
        $response->assertStatus(201);
        $this->assertDatabaseHas('visitas', [
            'e_mail' => $visitaData['e_mail'],
            'nome_completo' => $visitaData['nome_completo'],
        ]);
    }

    public function test_can_show_a_visita(): void
    {
        $visita = Visita::factory()->create();
        $response = $this->getJson('/visitas/' . $visita->id); // <-- Corrigido aqui
        $response->assertStatus(200);
        $response->assertJsonFragment([
            'e_mail' => $visita->e_mail,
        ]);
    }

    public function test_can_update_a_visita(): void
    {
        $visita = Visita::factory()->create();
        $updateData = ['empresa' => 'Nova Empresa'];
        $response = $this->putJson('/visitas/' . $visita->id, $updateData); // <-- Corrigido aqui
        $response->assertStatus(200);
        $this->assertDatabaseHas('visitas', [
            'id' => $visita->id,
            'empresa' => 'Nova Empresa',
        ]);
    }

    public function test_can_delete_a_visita(): void
    {
        $visita = Visita::factory()->create();
        $response = $this->deleteJson('/visitas/' . $visita->id); // <-- Corrigido aqui
        $response->assertStatus(204);
        $this->assertDatabaseMissing('visitas', [
            'id' => $visita->id,
        ]);
    }
}
