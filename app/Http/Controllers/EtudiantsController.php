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
}
