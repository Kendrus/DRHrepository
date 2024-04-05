@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Planning individuel de {{ $employee->first_name }} {{ $employee->last_name }}</h2>
    <!-- Affichage du planning de l'employé -->
    <!-- Vous pouvez personnaliser la mise en page en fonction de vos besoins -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Date</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($plannings as $planning)
            <tr>
                <td>{{ $planning->date }}</td>
                <td>{{ $planning->type }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
