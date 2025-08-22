<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisitaRequest;
use App\Http\Requests\UpdateVisitaRequest; // Adicione esta linha
use App\Models\Visita;
use Illuminate\Http\Request; // Mantenha esta linha se outros métodos a usarem

class VisitaController extends Controller
{
    public function index()
    {
        return Visita::all();
    }

    public function store(StoreVisitaRequest $request)
    {
        $visita = Visita::create($request->validated());

        return response()->json($visita, 201);
    }

    public function show(Visita $visita)
    {
        return $visita;
    }

    public function update(UpdateVisitaRequest $request, Visita $visita)
    {
        $visita->update($request->validated());

        return response()->json($visita);
    }

    public function destroy(Visita $visita)
    {
        $visita->delete();

        return response()->json(null, 204);
    }
}
