@extends('layout.app')
@section('title', 'Etudiant')
@section('titleHeader', 'Information personnelles')
@section('content')

@if (session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif

<div class="row mt-4 justify-content-center">
    <h2 class="row mb-4">{{ $etudiants->first_name }} {{ $etudiants->last_name }}</h2>
    <p>{{ $etudiants->date_naissance }}</p>
    <p>{{ $etudiants->address }} {{ $etudiants->ville->name }}</p>
    <p>{{ $etudiants->email }}</p>
    <p>{{ $etudiants->date_naissance }}</p>
    <p>{{ $etudiants->phone }}</p>
</div>

<div class="row mt-5">
    <div class="col-12 d-flex justify-content-between">
        <a href="{{route('etudiants.index')}}" class="btn btn-secondary btn-md">Retourner</a>
        <div>
            <a href="{{route('etudiants.edit', $etudiants->id)}}" class="btn btn-dark btn-md">Modifier</a>
            <a href="{{route('etudiants.edit', $etudiants->id)}}" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Supprimer
            </a>

        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Êtes-vous certain de vouloir supprimer l'étudiant {{ $etudiants->first_name }} {{ $etudiants->last_name }}?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                    <form method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" class="btn btn-primary" value="Supprimer définitivement">
                    </form>
                </div>
            </div>
        </div>
    </div>




</div>
</div>
@endsection