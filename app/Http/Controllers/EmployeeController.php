<?php

namespace App\Http\Controllers;

use App\Models\Employee;
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
       $this->middleware('auth');
       $this->middleware('permission:create-employee|edit-employee|delete-employee', ['only' => ['index','show']]);
       $this->middleware('permission:create-employee', ['only' => ['create','store']]);
       $this->middleware('permission:edit-employee', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-employee', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        return view('employee.index', [
            'employees' => Employee::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmployeeRequest $request): RedirectResponse
    {
        Employee::create($request->all());
        return redirect()->route('employees.index')
                ->withSuccess('New employee is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee): View
    {
        return view('employees.show', [
            'employee' => $employee
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee): View
    {
        return view('employees.edit', [
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmployeeRequest $request, Employee $employee): RedirectResponse
    {
        $employee->update($request->all());
        return redirect()->back()
                ->withSuccess('Employee is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee): RedirectResponse
    {
        $employee->delete();
        return redirect()->route('employee.index')
                ->withSuccess('Employee is deleted successfully.');
    }
}
