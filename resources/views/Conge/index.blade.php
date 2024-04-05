@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des Congés</h1>
        <a href="{{ route('conge.create') }}" class="btn btn-primary mb-3">Demander un Congé</a>
        @if ($conges->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Employé</th>
                        <th>Type</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($conges as $conge)
                        <tr>
                            <td>{{ $conge->user->name }}</td>
                            <td>{{ $conge->type }}</td>
                            <td>{{ $conge->date_debut }}</td>
                            <td>{{ $conge->date_fin }}</td>
                            <td>{{ $conge->statut }}</td>
                            <td>
                                <a href="{{ route('conge.edit', $conge->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                                <form action="{{ route('conge.destroy', $conge->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce congé ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucun congé demandé pour le moment.</p>
        @endif
    </div>
@endsection
    