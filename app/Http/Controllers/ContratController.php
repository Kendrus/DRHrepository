<?php

namespace App\Http\Controllers;

use App\Models\Contrat;
use App\Models\Employee;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    public function create(Employee $employee)
    {
        return view('contrats.create', compact('employee'));
        $employees = Employee::all();
    return view('contrats.create', compact('employees'));
    }

    public function store(Request $request, Employee $employee)
    {
        $request->validate([
            'type' => 'required|string',
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after_or_equal:date_debut',
        ]);

        $employee->contrats()->create($request->all());

        return redirect()->route('employee.show', $employee)->with('success', 'Contrat créé avec succès.');
    }

    public function index(Employee $employee)
    {
        $contrats = $employee->contrats;
        return view('contrats.index', compact('employee', 'contrats'));
    }
   
}
