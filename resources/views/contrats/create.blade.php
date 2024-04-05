@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Créer un Contrat</h1>
        <p>Employé : {{ $employee->nom }} {{ $employee->prenom }}</p>

        <form action="{{ route('contrats.store', $employee) }}" method="post">
            @csrf

            <div class="form-group">
    <label for="type">Type de Contrat :</label>
    <select name="type" id="type" class="form-control @error('type') is-invalid @enderror" required>
        <option value="" disabled selected>Choisissez le type de contrat</option>
        <option value="CDI" {{ old('type') == 'CDI' ? 'selected' : '' }}>CDI</option>
        <option value="CDD" {{ old('type') == 'CDD' ? 'selected' : '' }}>CDD</option>
        <option value="Prestation de service" {{ old('type') == 'Prestation de service' ? 'selected' : '' }}>Prestation de service</option>
    </select>
    @error('type')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>


            <div class="form-group">
                <label for="date_debut">Date de Début :</label>
                <input type="date" name="date_debut" id="date_debut" class="form-control @error('date_debut') is-invalid @enderror" value="{{ old('date_debut') }}" required>
                @error('date_debut')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="date_fin">Date de Fin :</label>
                <input type="date" name="date_fin" id="date_fin" class="form-control @error('date_fin') is-invalid @enderror" value="{{ old('date_fin') }}" required>
                @error('date_fin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Créer le Contrat</button>
        </form>
    </div>
@endsection
