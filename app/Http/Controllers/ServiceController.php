<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return Service::with(['categorie', 'employee', 'projets'])->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'image' => 'required|string',
            'description' => 'required|string',
            'id_categorie' => 'required|exists:categories,id_categorie',
            'id_employee' => 'required|exists:employees,id_employee',
        ]);

        return Service::create($validated);
    }

    public function show($id)
    {
        return Service::with(['categorie', 'employee', 'projets'])->findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'titre' => 'sometimes|required|string|max:255',
            'image' => 'sometimes|required|string',
            'description' => 'sometimes|required|string',
            'id_categorie' => 'sometimes|required|exists:categories,id_categorie',
            'id_employee' => 'sometimes|required|exists:employees,id_employee',
        ]);

        $service = Service::findOrFail($id);
        $service->update($validated);

        return $service;
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();

        return response()->noContent();
    }
}
