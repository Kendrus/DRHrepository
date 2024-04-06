@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Modifier l'Absence</h1>
        <form action="{{ route('absences.update', $absence->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="user_id">Employe :</label>
                <select name="user_id" id="user_id" class="form-control" disabled>
                    <option value="{{ $absence->user_id }}">{{ $absence->user->name }}</option>
                </select>
            </div>
            <div class="form-group">
                <label for="type">Type d'absence :</label>
                <input type="text" name="type" id="type" class="form-control" value="{{ $absence->type }}">
            </div>
            <div class="form-group">
                <label for="start_date">Date de début :</label>
                <input type="date" name="start_date" id="start_date" class="form-control" value="{{ $absence->start_date }}">
            </div>
            <div class="form-group">
                <label for="end_date">Date de fin :</label>
                <input type="date" name="end_date" id="end_date" class="form-control" value="{{ $absence->end_date }}">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
        </form>
    </div>
@endsection
