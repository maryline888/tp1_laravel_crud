<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiants;
use App\Models\villes;

class EtudiantsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Etudiants $etudiants)
    {
        $etudiants = Etudiants::all();
        return view('etudiants.index', ['etudiants' => $etudiants]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $villes = Villes::all();
        return view('etudiants.create', ['villes' => $villes]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     */
    public function show(Etudiants $etudiants)
    {
        return view('etudiants.show', ['etudiants' => $etudiants]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     */
    public function edit(Etudiants $etudiants)
    {
        $villes = Villes::all();
        return view('etudiants.edit', ['etudiants' => $etudiants, 'villes' => $villes]);
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(Request $request, Etudiants $etudiants)
    {

        $etudiants->update([
            'last_name' => $request->last_name,
            'first_name' => $request->first_name,
            'address' => $request->address,
            'email' => $request->email,
            'phone' => $request->phone,
            'date_naissance' => $request->date_naissance,
            'ville_id' => $request->ville_id
        ]);
        $request->session()->flash('message', 'Vos modifications ont été enregistrées avec succès!');
        return redirect(route('etudiants.show', $etudiants->id));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     */
    public function destroy(Etudiants $etudiants)
    {
        $etudiants->delete();
        return redirect(route('etudiants.index'));
    }
}
