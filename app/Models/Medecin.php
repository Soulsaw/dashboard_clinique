<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Medecin extends Model
{
    use HasFactory;
     /**
     * Get the post that owns the comment.
     */
    public function specialite(): BelongsTo
    {
        return $this->belongsTo(Specialite::class);
    }
}
