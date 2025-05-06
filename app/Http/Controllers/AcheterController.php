<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AcheterController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_client' => 'required|exists:clients,id_client',
            'id_produit' => 'required|exists:produits,id_produit',
        ]);

        DB::table('acheters')->insert([
            'id_client' => $validated['id_client'],
            'id_produit' => $validated['id_produit'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Produit acheté avec succès.']);
    }

    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'id_client' => 'required|exists:clients,id_client',
            'id_produit' => 'required|exists:produits,id_produit',
        ]);

        DB::table('acheters')
            ->where('id_client', $validated['id_client'])
            ->where('id_produit', $validated['id_produit'])
            ->delete();

        return response()->json(['message' => 'Achat supprimé avec succès.']);
    }
}