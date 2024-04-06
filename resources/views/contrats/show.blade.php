@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du Contrat</h1>
        <p><strong>Type de contrat :</strong> {{ $contrat->type }}</p>
        <p><strong>Date de début :</strong> {{ $contrat->date_debut }}</p>
        <p><strong>Date de fin :</strong> {{ $contrat->date_fin }}</p>
        <a href="{{ route('contrat.index') }}" class="btn btn-primary">Retour</a>
    </div>
@endsection
