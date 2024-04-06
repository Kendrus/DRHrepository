<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrat;

class ContratController extends Controller
{
    public function index()
    {
        // Récupérer tous les contrats
        $contrats = Contrat::all();
        return view('contrat.index', compact('contrats'));
    }

    public function create()
    {
        return view('contrat.create');
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'type' => 'required|string|in:CDI,CDD,Prestation de service',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
        ]);

        // Enregistrer le contrat dans la base de données
        Contrat::create([
            'type' => $request->type,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
        ]);

        // Rediriger avec un message de succès
        return redirect()->route('contrat.index')->with('success', 'Contrat ajouté avec succès.');
    }

    public function edit($id)
    {
        $contrat = Contrat::findOrFail($id);
        return view('contrat.edit', compact('contrat'));
    }

    public function update(Request $request, $id)
    {
        // Valider les données du formulaire
        $request->validate([
            'type' => 'required|string|in:CDI,CDD,Prestation de service',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
        ]);

        // Récupérer le contrat à mettre à jour
        $contrat = Contrat::findOrFail($id);

        // Mettre à jour les champs du contrat avec les données du formulaire
        $contrat->update([
            'type' => $request->type,
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
        ]);

        // Rediriger avec un message de succès
        return redirect()->route('contrat.index')->with('success', 'Contrat mis à jour avec succès.');
    }

    public function destroy($id)
    {
        // Supprimer le contrat
        Contrat::findOrFail($id)->delete();

        // Rediriger avec un message de succès
        return redirect()->route('contrat.index')->with('success', 'Contrat supprimé avec succès.');
    }
}
