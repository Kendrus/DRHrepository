<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;
use App\Models\User;

class AbsenceController extends Controller
{
    public function index()
    {
        $absences = Absence::with('user')->get();
        return view('absence.index', compact('absences'));
    }

    public function create()
    {
        $users = User::all();
        return view('absence.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'type' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        Absence::create([
            'user_id' => $request->user_id,
            'type' => $request->type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'status' => 'Pending',
        ]);

        return redirect()->route('absence.index')->with('success', 'Absence created successfully.');
    }

    public function show(Absence $absence)
    {
        return view('absence.show', compact('absence'));
    }

    public function edit(Absence $absence)
    {
        $users = User::all();
        return view('absence.edit', compact('absence', 'users'));
    }

    public function update(Request $request, Absence $absence)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'type' => 'required|string',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
        ]);

        $absence->update([
            'user_id' => $request->user_id,
            'type' => $request->type,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);

        return redirect()->route('absences.index')->with('success', 'Absence updated successfully.');
    }

    public function destroy(Absence $absence)
    {
        $absence->delete();
        return redirect()->route('absences.index')->with('success', 'Absence deleted successfully.');
    }
}
