<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Specialite;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medecins = Medecin::all();
        $specialites = Specialite::all();
        return view('layouts.medecin', compact('medecins', 'specialites'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Medecin $medecin)
    {
        $medecins = Medecin::all();
        return view('layouts.medecin', compact('medecins'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medecin $medecin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medecin $medecin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medecin $medecin)
    {
        //
    }
}
