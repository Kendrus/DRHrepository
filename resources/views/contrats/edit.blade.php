@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier Contrat</h1>
        <form action="{{ route('contrat.update', $contrat->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">Employé :</label>
                <select name="user_id" id="user_id" class="form-control" disabled>
                    <option value="{{ $contrat->user_id }}">{{ $contrat->user->name }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="type">Type de Contrat :</label>
                <select name="type" id="type" class="form-control">
                    <option value="CDI" {{ $contrat->type == 'CDI' ? 'selected' : '' }}>CDI</option>
                    <option value="CDD" {{ $contrat->type == 'CDD' ? 'selected' : '' }}>CDD</option>
                    <option value="Prestation de service" {{ $contrat->type == 'Prestation de service' ? 'selected' : '' }}>Prestation de service</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date_debut">Date de Début :</label>
                <input type="date" name="date_debut" id="date_debut" class="form-control" value="{{ $contrat->date_debut }}">
            </div>
            <div class="form-group">
                <label for="date_fin">Date de Fin :</label>
                <input type="date" name="date_fin" id="date_fin" class="form-control" value="{{ $contrat->date_fin }}">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
@endsection
