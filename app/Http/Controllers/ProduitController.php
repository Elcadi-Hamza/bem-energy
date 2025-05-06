<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    public function index()
    {
        return Produit::with(['employee', 'categorie', 'projets', 'clients'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'stock' => 'required|boolean',
            'prix' => 'required|numeric|min:0',
            'quantite' => 'required|integer|min:0',
            'image' => 'required|string',
            'id_employee' => 'required|exists:employees,id_employee',
            'id_categorie' => 'required|exists:categories,id_categorie',
        ]);

        return Produit::create($validated);
    }

    public function show($id)
    {
        return Produit::with(['employee', 'categorie', 'projets', 'clients'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nom' => 'sometimes|required|string|max:255',
            'description' => 'sometimes|required|string',
            'stock' => 'sometimes|required|boolean',
            'prix' => 'sometimes|required|numeric|min:0',
            'quantite' => 'sometimes|required|integer|min:0',
            'image' => 'sometimes|required|string',
            'id_employee' => 'sometimes|required|exists:employees,id_employee',
            'id_categorie' => 'sometimes|required|exists:categories,id_categorie',
        ]);

        $produit = Produit::findOrFail($id);
        $produit->update($validated);

        return $produit;
    }

    public function destroy($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->delete();

        return response()->noContent();
    }
}
