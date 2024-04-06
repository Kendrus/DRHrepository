@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Enregistrer une Absence</h1>
        <form action="{{ route('absences.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="user_id">Employe:</label>
                <select name="user_id" id="user_id" class="form-control">
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }} </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="type">Type d'absence :</label>
                <input type="text" name="type" id="type" class="form-control">
            </div>
            <div class="form-group">
                <label for="start_date">Date de début :</label>
                <input type="date" name="start_date" id="start_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="end_date">Date de fin :</label>
                <input type="date" name="end_date" id="end_date" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer une Absence</button>
        </form>
    </div>
@endsection
