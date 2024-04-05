<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEmployeeRequest;
use App\Http\Requests\UpdateEmployeeRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class EmployeeController extends Controller
{
    /**
     * Instantiate a new EmployeeController instance.
     */
    public function __construct()
    {
        $this->middleware('auth'); // Middleware d'authentification
        $this->middleware('can:create-employee', ['only' => ['create', 'store']]); // Middleware de permission pour créer un employé
        $this->middleware('can:edit-employee', ['only' => ['edit', 'update']]); // Middleware de permission pour modifier un employé
        $this->middleware('can:delete-employee', ['only' => ['destroy']]); // Middleware de permission pour supprimer un employé
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $employee= Employee::paginate(3);
        // return view('employee.index', [
           // 'employee' => Employee::latest('id')->paginate(10) // Paginer les employés
       //  ]);
       return view('employee.index',compact('employee'));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        // Retourner la vue avec le formulaire de création d'employé
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request): RedirectResponse
    {
        // Créer un nouvel employé avec les données fournies dans la requête
       
      // die($request->all());
       Employee::create($request->validated());

        // Rediriger avec un message de succès
        return redirect()->route('employee.index')->withSuccess('New employee is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee): View
    {
        // Retourner la vue avec les détails de l'employé spécifié
        return view('employee.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee): View
    {
        // Retourner la vue avec le formulaire pour modifier l'employé spécifié
        return view('employee.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee): RedirectResponse
    {
        // Mettre à jour les informations de l'employé avec les données validées de la requête
        $employee->update($request->validated());

        // Rediriger avec un message de succès
        return redirect()->route('employee.index')->withSuccess('Employee is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee): RedirectResponse
    {
        // Supprimer l'employé spécifié
        $employee->delete();

        // Rediriger avec un message de succès
        return redirect()->route('employee.index')->withSuccess('Employee is deleted successfully.');
    }
}
