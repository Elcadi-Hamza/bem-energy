<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppartenirController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'id_projet' => 'required|exists:projets,id_projet',
            'id_service' => 'required|exists:services,id_service',
        ]);

        DB::table('appartenirs')->insert([
            'id_projet' => $validated['id_projet'],
            'id_service' => $validated['id_service'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Service associé au projet avec succès.']);
    }

    public function destroy(Request $request)
    {
        $validated = $request->validate([
            'id_projet' => 'required|exists:projets,id_projet',
            'id_service' => 'required|exists:services,id_service',
        ]);

        DB::table('appartenirs')
            ->where('id_projet', $validated['id_projet'])
            ->where('id_service', $validated['id_service'])
            ->delete();

        return response()->json(['message' => 'Association supprimée avec succès.']);
    }
}
