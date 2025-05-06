<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index()
    {
        return Projet::with(['employee', 'client', 'produits', 'services'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'etat' => 'required|string|max:100',
            'dateDebut' => 'required|date',
            'dateFin' => 'required|date|after_or_equal:dateDebut',
            'id_employee' => 'required|exists:employees,id_employee',
            'id_client' => 'required|exists:clients,id_client',
        ]);

        return Projet::create($validated);
    }

    public function show($id)
    {
        return Projet::with(['employee', 'client', 'produits', 'services'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'titre' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'etat' => 'sometimes|required|string|max:100',
            'dateDebut' => 'sometimes|required|date',
            'dateFin' => 'sometimes|required|date|after_or_equal:dateDebut',
            'id_employee' => 'sometimes|required|exists:employees,id_employee',
            'id_client' => 'sometimes|required|exists:clients,id_client',
        ]);

        $projet = Projet::findOrFail($id);
        $projet->update($validated);

        return $projet;
    }

    public function destroy($id)
    {
        $projet = Projet::findOrFail($id);
        $projet->delete();

        return response()->noContent();
    }
}
