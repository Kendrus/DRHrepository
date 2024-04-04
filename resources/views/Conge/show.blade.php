@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du Congé</h1>
        <p><strong>Type de congé :</strong> {{ $conge->type }}</p>
        <p><strong>Date de début :</strong> {{ $conge->date_debut }}</p>
        <p><strong>Date de fin :</strong> {{ $conge->date_fin }}</p>
        <p><strong>Statut :</strong> {{ $conge->statut }}</p>
        <a href="{{ route('conges.index') }}" class="btn btn-primary">Retour</a>
    </div>
@endsection
