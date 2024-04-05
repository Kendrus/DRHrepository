<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planning extends Model
{
    protected $fillable = ['employee_id', 'date', 'type'];

    // Relation avec l'employé
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}

