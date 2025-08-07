<?php

namespace Tests\Feature;

use App\Models\Produto;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProdutoApiTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Teste para verificar se a lista de produtos é retornada corretamente.
     */
    public function test_a_list_of_products_can_be_retrieved(): void
    {
        // Cria 3 produtos no banco de dados de teste
        Produto::factory()->count(3)->create();

        $response = $this->getJson('/api/produtos');

        $response->assertStatus(200);

        $response->assertJsonStructure([
            'data' => [
                '*' => [
                    'id',
                    'nome',
                    'descricao',
                    'preco',
                    'estoque',
                    'criado_em',
                    'atualizado_em',
                ]
            ]
        ]);

        $response->assertJsonCount(3, 'data');
    }

    /**
     * Teste para verificar se um produto pode ser criado com sucesso.
     */
    public function test_a_product_can_be_created(): void
    {
        $productData = [
            'nome' => 'Smartphone X',
            'descricao' => 'Um smartphone de alta performance.',
            'preco' => 1200.50,
            'estoque' => 50,
        ];

        $response = $this->postJson('/api/produtos', $productData);

        $response->assertStatus(201);
        $response->assertJsonFragment([
            'nome' => 'Smartphone X',
            'preco' => 1200.50,
        ]);

        $this->assertDatabaseHas('produtos', [
            'nome' => 'Smartphone X',
        ]);
    }

    /**
     * Teste para verificar se um produto pode ser visualizado individualmente.
     */
    public function test_a_product_can_be_retrieved(): void
    {
        $produto = Produto::factory()->create();

        $response = $this->getJson('/api/produtos/' . $produto->id);

        $response->assertStatus(200);
        $response->assertJson([
            'data' => [
                'id' => $produto->id,
                'nome' => $produto->nome,
            ]
        ]);
    }

    /**
     * Teste para verificar se um produto pode ser atualizado.
     */
    public function test_a_product_can_be_updated(): void
    {
        $produto = Produto::factory()->create([
            'preco' => 500.00,
        ]);

        $updateData = ['preco' => 999.99];

        $response = $this->patchJson('/api/produtos/' . $produto->id, $updateData);

        $response->assertStatus(200);
        $response->assertJsonFragment([
            'preco' => 999.99,
        ]);

        $this->assertDatabaseHas('produtos', [
            'id' => $produto->id,
            'preco' => 999.99,
        ]);
    }

    /**
     * Teste para verificar se um produto pode ser deletado.
     */
    public function test_a_product_can_be_deleted(): void
    {
        $produto = Produto::factory()->create();

        $response = $this->deleteJson('/api/produtos/' . $produto->id);

        $response->assertStatus(204);

        $this->assertDatabaseMissing('produtos', [
            'id' => $produto->id,
        ]);
    }
}
