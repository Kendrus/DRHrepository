@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Créer un nouveau planning</h2>
    <!-- Formulaire de création du planning -->
    <!-- Vous pouvez personnaliser la mise en page en fonction de vos besoins -->
    <form action="{{ route('plannings.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="date">Date :</label>
            <input type="date" name="date" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="type">Type :</label>
            <select name="type" class="form-control" required>
                <option value="jour de travail">Jour de travail</option>
                <option value="jour de congé">Jour de congé</option>
                <option value="jour de vacances">Jour de vacances</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</div>
@endsection
