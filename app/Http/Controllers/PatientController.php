<?php

namespace App\Http\Controllers;

use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        return view('patients.index');
    }

    public function create()
    {
        return view('patients.create');
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit')->with(compact('patient'));
    }

    public function show(Patient $patient)
    {
        return view('patients.show')->with(compact('patient'));
    }
}
