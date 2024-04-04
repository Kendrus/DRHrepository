@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier le Congé</h1>
        <form action="{{ route('conges.update', $conge->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="type">Type de congé :</label>
                <input type="text" name="type" id="type" class="form-control" value="{{ $conge->type }}">
            </div>
            <div class="form-group">
                <label for="date_debut">Date de début :</label>
                <input type="date" name="date_debut" id="date_debut" class="form-control" value="{{ $conge->date_debut }}">
            </div>
            <div class="form-group">
                <label for="date_fin">Date de fin :</label>
                <input type="date" name="date_fin" id="date_fin" class="form-control" value="{{ $conge->date_fin }}">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
@endsection
