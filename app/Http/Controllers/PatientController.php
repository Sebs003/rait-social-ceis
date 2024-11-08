<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::with('user')
            ->latest()
            ->paginate(10);

        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'type' => 'required|in:parent,child,staff',
            'education_level' => 'nullable|string|max:255',
            'medical_history' => 'nullable|string'
        ]);

        $patient = Patient::create($validated + ['user_id' => auth()->id()]);

        return redirect()
            ->route('patients.show', $patient)
            ->with('success', 'Paciente creado exitosamente.');
    }

    public function show(Patient $patient)
    {
        $patient->load(['appointments.service', 'user']);
        
        return view('patients.show', compact('patient'));
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'type' => 'required|in:parent,child,staff',
            'education_level' => 'nullable|string|max:255',
            'medical_history' => 'nullable|string'
        ]);

        $patient->update($validated);

        return redirect()
            ->route('patients.show', $patient)
            ->with('success', 'Paciente actualizado exitosamente.');
    }

    public function destroy(Patient $patient)
    {
        $patient->delete();

        return redirect()
            ->route('patients.index')
            ->with('success', 'Paciente eliminado exitosamente.');
    }
}
