@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Demande de Congé</h1>
        <form action="{{ route('conge.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="user_id">Employé :</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->first_name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="type">Type de congé :</label>
                <input type="text" name="type" id="type" class="form-control">
            </div>
            <div class="form-group">
                <label for="date_debut">Date de début :</label>
                <input type="date" name="date_debut" id="date_debut" class="form-control">
            </div>
            <div class="form-group">
                <label for="date_fin">Date de fin :</label>
                <input type="date" name="date_fin" id="date_fin" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Demander le Congé</button>
        </form>
    </div>
@endsection
