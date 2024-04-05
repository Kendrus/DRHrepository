@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier le Contrat de {{ $employee->nom }} {{ $employee->prenom }}</h1>

        <form method="POST" action="{{ route('contrat.update', ['employee' => $employee, 'contrat' => $contrat]) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="type">Type de Contrat :</label>
                <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" value="{{ $contrat->type }}" required>
                @error('type')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="date_debut">Date de Début :</label>
                <input type="date" name="date_debut" id="date_debut" class="form-control @error('date_debut') is-invalid @enderror" value="{{ $contrat->date_debut }}" required>
                @error('date_debut')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="date_fin">Date de Fin :</label>
                <input type="date" name="date_fin" id="date_fin" class="form-control @error('date_fin') is-invalid @enderror" value="{{ $contrat->date_fin }}" required>
                @error('date_fin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Enregistrer les Modifications</button>
        </form>
    </div>
@endsection
