<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'marital_status',
        'sex',
        'department',
        'position',
        'salary',
        'language',
        'leave_days',
        'skills',
        'qualifications',
    ];

    public function contrats()
    {
        return $this->hasMany(Contrat::class);
    }
}
