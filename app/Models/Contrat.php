<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $fillable = ['employee_id', 'type', 'date_debut', 'date_fin'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}
