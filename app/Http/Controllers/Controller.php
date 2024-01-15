<?php

namespace App\Http\Controllers;

use App\Models\Medecin;
use App\Models\Patient;
use App\Models\RendezVous;
use App\Models\Specialite;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {
        $medecins = Medecin::count();
        $patients = Patient::count();
        $specialites = Specialite::count();
        $rendezvous = RendezVous::count();
        return view('welcome', compact('medecins', 'patients', 'specialites', 'rendezvous'));
    }
}
