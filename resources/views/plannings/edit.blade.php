@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Modifier le planning</h2>
    <!-- Formulaire d'édition du planning -->
    <form action="{{ route('plannings.update', $planning->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="date">Date :</label>
            <input type="date" name="date" class="form-control" value="{{ $planning->date }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type :</label>
            <select name="type" class="form-control" required>
                <option value="jour de travail" @if($planning->type == 'jour de travail') selected @endif>Jour de travail</option>
                <option value="jour de congé" @if($planning->type == 'jour de congé') selected @endif>Jour de congé</option>
                <option value="jour de vacances" @if($planning->type == 'jour de vacances') selected @endif>Jour de vacances</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
</div>
@endsection
