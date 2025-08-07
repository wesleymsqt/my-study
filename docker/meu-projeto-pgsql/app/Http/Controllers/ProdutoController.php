<?php

// Tipagem strict
declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;
use App\Models\Produto;
use Illuminate\Http\Request;
use App\Http\Resources\ProdutoResource;

class ProdutoController extends Controller
{
    // Exibe uma listagem dos recursos
    public function index()
    {
        return ProdutoResource::collection(Produto::all());
    }

    // Armazena um novo recurso no banco de dados
    public function store(StoreProdutoRequest $request)
    {
        $produto = Produto::create($request->validated());

        return new ProdutoResource($produto);
    }

    // Exibe um recurso específico
    public function show(Produto $produto)
    {
        return new ProdutoResource($produto);
    }

    // Atualiza um recurso específico no banco de dados
    public function update(UpdateProdutoRequest $request, Produto $produto)
    {
        $produto->update($request->validated());

        return new ProdutoResource($produto);
    }

    // Remove um recurso específico do banco de dados
    public function destroy(Produto $produto)
    {
        $produto->delete();

        return response()->json(null, 204);
    }
}
