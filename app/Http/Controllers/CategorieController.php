<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index()
    {
        return Categorie::with(['employee', 'produits', 'services', 'blogs'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'libelle' => 'required|string|max:255',
            'id_employee' => 'required|exists:employees,id_employee',
        ]);

        return Categorie::create($validated);
    }

    public function show($id)
    {
        return Categorie::with(['employee', 'produits', 'services', 'blogs'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'libelle' => 'sometimes|required|string|max:255',
            'id_employee' => 'sometimes|required|exists:employees,id_employee',
        ]);

        $categorie = Categorie::findOrFail($id);
        $categorie->update($validated);

        return $categorie;
    }

    public function destroy($id)
    {
        $categorie = Categorie::findOrFail($id);
        $categorie->delete();

        return response()->noContent();
    }
}
