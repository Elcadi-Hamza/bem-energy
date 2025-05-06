<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SerattacherController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_projet' => 'required|exists:projets,id_projet',
            'id_produit' => 'required|exists:produits,id_produit',
        ]);

        DB::table('serattachers')->insert([
            'id_projet' => $validated['id_projet'],
            'id_produit' => $validated['id_produit'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Produit rattaché au projet avec succès.']);
    }

    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'id_projet' => 'required|exists:projets,id_projet',
            'id_produit' => 'required|exists:produits,id_produit',
        ]);

        DB::table('serattachers')
            ->where('id_projet', $validated['id_projet'])
            ->where('id_produit', $validated['id_produit'])
            ->delete();

        return response()->json(['message' => 'Rattachement supprimé avec succès.']);
    }
}
