<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

/**
 * Controller para gerenciar as operações CRUD do recurso Produto.
 */
class ProdutoController extends Controller
{
    /**
     * Exibe uma listagem dos recursos.
     * Rota: GET /produtos
     */
    public function index()
    {
        return Produto::all();
    }

    /**
     * Armazena um novo recurso no banco de dados.
     * Rota: POST /produtos
     */
    public function store(Request $request)
    {
        // Valida os dados de entrada para garantir a integridade.
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'preco' => 'required|numeric|gt:0',
            'estoque' => 'required|integer|min:0',
        ]);

        $produto = Produto::create($data);

        // Retorna o novo recurso e o status 201 Created, conforme padrão RESTful.
        return response()->json($produto, 201);
    }

    /**
     * Exibe um recurso específico.
     * Utiliza Route Model Binding para injeção automática do modelo.
     * Rota: GET /produtos/{produto}
     */
    public function show(Produto $produto)
    {
        return $produto;
    }

    /**
     * Atualiza um recurso específico no banco de dados.
     * Rota: PUT/PATCH /produtos/{produto}
     */
    public function update(Request $request, Produto $produto)
    {
        // A regra 'sometimes' permite atualizações parciais (PATCH)
        // validando apenas os campos presentes na requisição.
        $data = $request->validate([
            'nome' => 'sometimes|required|string|max:255',
            'descricao' => 'sometimes|nullable|string',
            'preco' => 'sometimes|required|numeric|gt:0',
            'estoque' => 'sometimes|required|integer|min:0',
        ]);

        $produto->update($data);

        return response()->json($produto);
    }

    /**
     * Remove um recurso específico do banco de dados.
     * Rota: DELETE /produtos/{produto}
     */
    public function destroy(Produto $produto)
    {
        $produto->delete();

        // Retorna uma resposta vazia com status 204 No Content,
        // indicando sucesso na exclusão.
        return response()->json(null, 204);
    }
}
