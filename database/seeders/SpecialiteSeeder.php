<?php

namespace Database\Seeders;

use App\Models\Specialite;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specialite::create([
            "type"=>"Pulmonaire"
        ]);

        Specialite::create([
            "type"=>"Dentise"
        ]);
    }
}
