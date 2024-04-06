@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des Contrats</h1>
        <a href="{{ route('contrat.create') }}" class="btn btn-primary mb-3">Ajouter un Contrat</a>
        @if ($contrats->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Employé</th>
                        <th>Type</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contrats as $contrat)
                        <tr>
                            <td>{{ $contrat->user->name }}</td>
                            <td>{{ $contrat->type }}</td>
                            <td>{{ $contrat->date_debut }}</td>
                            <td>{{ $contrat->date_fin }}</td>
                            <td>
                                <a href="{{ route('contrat.edit', $contrat->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                                <form action="{{ route('contrat.destroy', $contrat->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce contrat ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucun contrat ajouté pour le moment.</p>
        @endif
    </div>
@endsection
