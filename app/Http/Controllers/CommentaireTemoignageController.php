<?php

namespace App\Http\Controllers;

use App\Models\CommentaireTemoignage;
use Illuminate\Http\Request;

class CommentaireTemoignageController extends Controller
{
    public function index()
    {
        return CommentaireTemoignage::with(['employee', 'blog', 'client', 'service', 'produit'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'contenu' => 'required|string',
            'datePublication' => 'required|date',
            'etat' => 'required|string|max:100',
            'id_employee' => 'nullable|required|exists:employees,id_employee',
            'id_blog' => 'required|exists:blogs,id_blog',
            'id_client' => 'required|exists:clients,id_client',
            'id_service' => 'nullable|exists:services,id_service',
            'id_produit' => 'nullable|exists:services,id_produit',
        ]);

        return CommentaireTemoignage::create($validated);
    }

    public function show($id)
    {
        return CommentaireTemoignage::with(['employee', 'blog', 'client'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'contenu' => 'sometimes|required|string',
            'datePublication' => 'sometimes|required|date',
            'etat' => 'sometimes|required|string|max:100',
            'id_employee' => 'sometimes|required|exists:employees,id_employee',
            'id_blog' => 'sometimes|required|exists:blogs,id_blog',
            'id_client' => 'sometimes|required|exists:clients,id_client',
        ]);

        $comtem = CommentaireTemoignage::findOrFail($id);
        $comtem->update($validated);

        return $comtem;
    }

    public function destroy($id)
    {
        $comtem = CommentaireTemoignage::findOrFail($id);
        $comtem->delete();

        return response()->noContent();
    }
}
