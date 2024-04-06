@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails de l'Absence</h1>
        <p><strong>Utilisateur :</strong> {{ $absence->user->name }}</p>
        <p><strong>Type d'absence :</strong> {{ $absence->type }}</p>
        <p><strong>Date de début :</strong> {{ $absence->start_date }}</p>
        <p><strong>Date de fin :</strong> {{ $absence->end_date }}</p>
        <p><strong>Statut :</strong> {{ $absence->status }}</p>
        <a href="{{ route('absences.index') }}" class="btn btn-primary">Retour</a>
    </div>
@endsection
