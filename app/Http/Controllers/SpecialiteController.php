<?php

namespace App\Http\Controllers;

use App\Models\Specialite;
use Illuminate\Http\Request;

class SpecialiteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $specialites = Specialite::all();
       return view('layouts.specialite', compact('specialites'));
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
            'type' => 'required|unique:specialites',
        ]);
        $sp = new Specialite();
        $sp->type = $request->input('type');
        $sp->save();
        return redirect()->back()->with('success', 'Specialite enregistrez avec success!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Specialite $specialite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Specialite $specialite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Specialite $specialite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Specialite $specialite)
    {
        //
    }
}
