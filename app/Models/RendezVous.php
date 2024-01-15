<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RendezVous extends Model
{
    use HasFactory;

    public function medecins(): HasMany
    {
        return $this->hasMany((Medecin::class));
    }

    public function patients(): HasMany
    {
        return $this->hasMany((Patient::class));
    }
}
