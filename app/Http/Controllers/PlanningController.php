<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planning;

class PlanningController extends Controller
{
    // Afficher tous les plannings
    public function index()
    {
        $plannings = Planning::all();
        return view('plannings.index', ['plannings' => $plannings]);
    }

    // Afficher le formulaire de création d'un planning
    public function create()
    {
        // Retourner une vue avec le formulaire de création
        return view('plannings.create');
    }

    // Stocker un nouveau planning dans la base de données
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'date' => 'required|date',
            'type' => 'required|string',
            // Autres règles de validation selon vos besoins
        ]);

        // Créer un nouveau planning dans la base de données
        Planning::create($request->all());

        // Rediriger l'utilisateur vers la page d'index des plannings avec un message de succès
        return redirect()->route('plannings.index')->with('success', 'Planning créé avec succès.');
    }

    // Afficher les détails d'un planning
    public function show($id)
    {
        $planning = Planning::findOrFail($id);
        return view('plannings.show', ['planning' => $planning]);
    }

    // Afficher le formulaire d'édition d'un planning
    public function edit($id)
    {
        $planning = Planning::findOrFail($id);
        return view('plannings.edit', ['planning' => $planning]);
    }

    // Mettre à jour un planning dans la base de données
    public function update(Request $request, $id)
    {
        $planning = Planning::findOrFail($id);

        // Valider les données du formulaire
        $request->validate([
            'date' => 'required|date',
            'type' => 'required|string',
            // Autres règles de validation selon vos besoins
        ]);

        // Mettre à jour les informations du planning
        $planning->update($request->all());

        // Rediriger l'utilisateur vers la page d'index des plannings avec un message de succès
        return redirect()->route('plannings.index')->with('success', 'Planning mis à jour avec succès.');
    }

    // Supprimer un planning de la base de données
    public function destroy($id)
    {
        $planning = Planning::findOrFail($id);
        $planning->delete();

        // Rediriger l'utilisateur vers la page d'index des plannings avec un message de succès
        return redirect()->route('plannings.index')->with('success', 'Planning supprimé avec succès.');
    }
}



