@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Planning d'équipe</h2>
    <!-- Affichage des plannings de l'équipe -->
    <!-- Vous pouvez personnaliser la mise en page en fonction de vos besoins -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Employé</th>
                <th>Date</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plannings as $planning)
            <tr>
                <td>{{ $planning->employee->first_name }} {{ $planning->employee->last_name }}</td>
                <td>{{ $planning->date }}</td>
                <td>{{ $planning->type }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
