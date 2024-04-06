<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $fillable = [
        'type',
        'date_debut',
        'date_fin',
    ];

    // Définir la relation avec l'utilisateur (si nécessaire)
    // Par exemple, si un contrat appartient à un utilisateur
    // Assurez-vous d'avoir la clé étrangère user_id dans votre table de contrats

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
