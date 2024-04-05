<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conge;
use App\Models\User;

class CongeController extends Controller
{
    public function index()
    {
        // Récupérer tous les congés
        $conges = Conge::all();
        return view('conge.index', compact('conges'));
    }

    public function create()
    {
        $users= User::all();
        return view('conge.create',compact('users'));
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'type' => 'required',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date',
        ]);

        // Enregistrer le congé dans la base de données
        Conge::create([
            'user_id' => auth()->user()->id, // L'ID de l'utilisateur connecté
            'type' => $request->type,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'statut' => 'En attente', // Statut par défaut
        ]);

        // Rediriger avec un message de succès
        return redirect()->route('conge.index')->with('success', 'Congé demandé avec succès.');
    }
    public function destroy(Conge $conge)
    {
        // Vérifie si l'utilisateur a la permission de supprimer la demande de congé
        // Vous pouvez ajouter une logique de vérification ici selon vos besoins

        // Supprime la demande de congé de la base de données
        $conge->delete();

        // Redirige l'utilisateur avec un message de succès
        return redirect()->route('conge.index')->with('success', 'Demande de congé supprimée avec succès.');
    }
    public function edit($id)
    {
        $conge = Conge::findOrFail($id);
        return view('conge.edit', compact('conge'));
    }
    public function update(Request $request, $id)
    {
        // Valider les données de la demande de congé
        $request->validate([
            'type' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
        ]);

        // Récupérer la demande de congé à mettre à jour
        $conge = Conge::findOrFail($id);

        // Mettre à jour les champs de la demande de congé avec les données du formulaire
        $conge->update([
            'type' => $request->type,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            // Ajoutez d'autres champs si nécessaire
        ]);

        // Rediriger l'utilisateur avec un message de succès
        return redirect()->route('conge.index')->with('success', 'La demande de congé a été mise à jour avec succès.');
    }
}

