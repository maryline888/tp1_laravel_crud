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
                    <td>{{ $etudiant->first_name }} </td>
                    <td>{{ $etudiant->last_name }}</td>
                    <td><a href="{{ route('etudiants.show', $etudiant->id) }}" class="btn btn-outline-secondary">Voir détails</a></td>
                    <td><a href="{{ route('etudiants.edit' , $etudiant->id) }}" class="btn btn-outline-dark">Modifier</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
            {{ $etudiants->links('pagination::bootstrap-4') }}
        </div>
    </div>
</div>

@endsection