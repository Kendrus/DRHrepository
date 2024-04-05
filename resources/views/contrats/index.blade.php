@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des Contrats de {{ $employee->nom }} {{ $employee->prenom }}</h1>
        <a href="{{ route('contrats.create', $employee) }}" class="btn btn-primary mb-3">Ajouter un Contrat</a>
        @if ($contrats->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contrats as $contrat)
                        <tr>
                            <td>{{ $contrat->type }}</td>
                            <td>{{ $contrat->date_debut }}</td>
                            <td>{{ $contrat->date_fin }}</td>
                            <td>
                                <a href="{{ route('contrats.edit', ['employee' => $employee, 'contrats' => $contrat]) }}" class="btn btn-sm btn-primary">Modifier</a>
                                <!-- Ajoutez le lien vers la page de détails du contrat -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucun contrat n'a été ajouté pour cet employé.</p>
        @endif
    </div>
@endsection
