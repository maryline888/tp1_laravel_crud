<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\etudiants;
use App\Models\villes;

class EtudiantsController extends Controller
{
    public function index()
    {
        $etudiants = Etudiants::all();
        return view('etudiants.index', ['etudiants' => $etudiants]);
    }

    public function create()
    {
        $villes = Villes::all();
        return view('etudiants.create', ['villes' => $villes]);
    }

    public function store(Request $request)
    {
        $newEtudiant = Etudiants::create([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id

        ]);

        return redirect(route('etudiants.show', $newEtudiant->id));
    }

    public function show()
    {

        $etudiants = Etudiants::all();
        return view('etudiants.index', ['etudiants' => $etudiants]);
    }
}
