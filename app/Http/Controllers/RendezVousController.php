<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Patient;
use App\Models\RendezVous;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rendezvouss = RendezVous::all();
        $medecins = Medecin::all();
        $patients = Patient::all();
        return view('layouts.rendezvous', compact('rendezvouss', 'medecins', 'patients'));
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
        $request->validate([
            'patient_id' => 'required',
            'medecin_id' => 'required',
            'date'=> 'required',
        ]);
        
        $rendezvous = new RendezVous();
        $rendezvous->medecin_id = $request->input('medecin_id');
        $rendezvous->patient_id = $request->input('patient_id');
        $rendezvous->date = $request->input('date');
        $rendezvous->save();

        return redirect()->back()->with('success', 'rendezvous enregistrez avec success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(RendezVous $rendezVous)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RendezVous $rendezVous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RendezVous $rendezVous)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RendezVous $rendezVous)
    {
        //
    }
}
