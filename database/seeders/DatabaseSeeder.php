<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Medecin;
use App\Models\Patient;
use App\Models\Specialite;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $pat1 = Patient::create([
            'first_name' => 'Souleymane',
            'last_name' => 'SAWADOGO',
            'number' => 'AB1-01'
        ]);

        $pat2 = Patient::create([
            'first_name' => 'Karim',
            'last_name' => 'OUANGA',
            'number' => 'AB1-02'
        ]);

        $pat3 = Patient::create([
            'first_name' => 'Salim',
            'last_name' => 'LANKOANDE',
            'number' => 'AB1-03'
        ]);
        
        $sp1 = Specialite::create([
            "type"=>"Pulmonaire"
        ]);

        $sp2 = Specialite::create([
            "type"=>"Dentise"
        ]);

        $md1 = Medecin::create([
            'first_name' => 'Souleymane',
            'last_name' => 'SAWADOGO',
            'specialite_id' => $sp1->id
        ]);

        $md2 = Medecin::create([
            'first_name' => 'Karim',
            'last_name' => 'OUANGA',
            'specialite_id' => $sp1->id
        ]);

        $md2 = Medecin::create([
            'first_name' => 'Salim',
            'last_name' => 'LANKOANDE',
            'specialite_id' => $sp2->id
        ]);

    }
}
