<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return Blog::with(['employee', 'categorie', 'commentaires'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'image' => 'required|string',
            'contenu' => 'required|string',
            'datePublication' => 'required|date',
            'id_employee' => 'required|exists:employees,id_employee',
            'id_categorie' => 'required|exists:categories,id_categorie',
        ]);

        return Blog::create($validated);
    }

    public function show($id)
    {
        return Blog::with(['employee', 'categorie', 'commentaires'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'titre' => 'sometimes|required|string|max:255',
            'image' => 'sometimes|required|string',
            'contenu' => 'sometimes|required|string',
            'datePublication' => 'sometimes|required|date',
            'id_employee' => 'sometimes|required|exists:employees,id_employee',
            'id_categorie' => 'sometimes|required|exists:categories,id_categorie',
        ]);

        $blog = Blog::findOrFail($id);
        $blog->update($validated);

        return $blog;
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return response()->noContent();
    }
}
