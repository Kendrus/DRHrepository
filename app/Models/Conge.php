<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conge extends Model
{
    protected $fillable = [
        'user_id',
        'type',
        'date_debut',
        'date_fin',
        'statut',
    ];

    // Relation avec l'utilisateur
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

