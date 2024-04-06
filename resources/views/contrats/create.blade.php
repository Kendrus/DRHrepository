@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ajouter un Contrat</h1>
        <form action="{{ route('contrat.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="user_id">Employé :</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="type">Type de Contrat :</label>
                <select name="type" id="type" class="form-control">
                    <option value="CDI">CDI</option>
                    <option value="CDD">CDD</option>
                    <option value="Prestation de service">Prestation de service</option>
                </select>
            </div>
            <div class="form-group">
                <label for="date_debut">Date de Début :</label>
                <input type="date" name="date_debut" id="date_debut" class="form-control">
            </div>
            <div class="form-group">
                <label for="date_fin">Date de Fin :</label>
                <input type="date" name="date_fin" id="date_fin" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Ajouter Contrat</button>
        </form>
    </div>
@endsection
