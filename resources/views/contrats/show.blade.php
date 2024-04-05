@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Détails du Contrat de {{ $employee->nom }} {{ $employee->prenom }}</h1>

        <div class="card">
            <div class="card-body">
                <p><strong>Type de Contrat:</strong> {{ $contrat->type }}</p>
                <p><strong>Date de Début:</strong> {{ $contrat->date_debut }}</p>
                <p><strong>Date de Fin:</strong> {{ $contrat->date_fin }}</p>
                <!-- Ajoutez d'autres détails du contrat ici -->
            </div>
        </div>
    </div>
@endsection
