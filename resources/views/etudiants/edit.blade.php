@extends('layout.app')
@section('title', 'Etudiant')
@section('titleHeader', 'Information personnelles')
@section('content')

<div class="row mt-4 justify-content-center">
    <div class="col-6">
        <form method="post">
            @csrf
            @method('put')
            <div class="card">
                <div class="card-header">
                    <h3>Formulaire de modification</h3>
                </div>
                <div class="card-body">
                    <label for="first_name">Prénom</label>
                    <input type="text" id="first_name" name="first_name" class="form-control mt-2" value="{{$etudiants->first_name}}">

                    <label for="last_name">Nom de famille</label>
                    <input type="text" id="last_name" name="last_name" class="form-control mt-2" value="{{$etudiants->last_name}}">

                    <label for="date_naissance">Date de naissance</label>
                    <input type="date" id="date_naissance" name="date_naissance" class="form-control mt-2" value="{{$etudiants->date_naissance}}">

                    <label for="email">Courriel</label>
                    <input type="email" id="email" name="email" class="form-control mt-2" value="{{$etudiants->email}}">

                    <label for="phone">Téléphone</label>
                    <input type="phone" id="phone" name="phone" class="form-control mt-2" value="{{$etudiants->phone}}">

                    <label for="address">Adresse</label>
                    <input type="text" id="address" name="address" class="form-control mt-2" value="$etudiants->address">

                    <label for="ville_id">Ville</label>
                    <select name="ville_id" id="ville_id" class="form-control mt-2">
                        @foreach($villes as $ville)
                        <option value="{{ $ville->id }}">{{ $ville->name }}</option>
                        @endforeach
                    </select>
                    <div class="card-footer text-center">
                        <input type="submit" value="Sauvegarder" class="btn btn-success mt-4">
                    </div>
        </form>
    </div>
</div>

@endsection