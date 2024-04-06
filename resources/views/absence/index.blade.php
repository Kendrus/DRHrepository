@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Liste des Absences</h1>
        <a href="{{ route('absences.create') }}" class="btn btn-primary mb-3">Enregistrer une Absence</a>
        @if ($absences->count() > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Employe</th>
                        <th>Type</th>
                        <th>Date de début</th>
                        <th>Date de fin</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absences as $absence)
                        <tr>
                            <td>{{ $absence->user->name }}</td>
                            <td>{{ $absence->type }}</td>
                            <td>{{ $absence->start_date }}</td>
                            <td>{{ $absence->end_date }}</td>
                            <td>{{ $absence->status }}</td>
                            <td>
                                <a href="{{ route('absences.edit', $absence->id) }}" class="btn btn-sm btn-primary">Modifier</a>
                                <form action="{{ route('absences.destroy', $absence->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cette absence ?')">Supprimer</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Aucune absence enregistrée pour le moment.</p>
        @endif
    </div>
@endsection
