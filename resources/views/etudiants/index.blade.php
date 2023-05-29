@extends('layout.app')
@section('title', 'Liste des étudiants')
@section('titleHeader', 'Liste des étudiants')
@section('content')

<div class="card mt-3">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Prénom</th>
                    <th>Nom de famille</th>
                </tr>
            </thead>
            <tbody>
                @foreach($etudiants as $etudiant)
                <tr>
                    <td>{{ $etudiant->id }}</td>
                    <td>{{ $etudiant->first_name }}</td>
                    <td>{{ $etudiant->last_name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection