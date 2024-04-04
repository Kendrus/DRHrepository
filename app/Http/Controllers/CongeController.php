<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conge;

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
        return view('conge.create');
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
}

