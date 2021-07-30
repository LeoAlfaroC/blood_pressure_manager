<?php

namespace App\Http\Controllers;

use App\Exports\BloodPressureRecordExport;
use App\Exports\PatientExport;
use App\Models\Patient;
use Maatwebsite\Excel\Excel as FileType;
use Maatwebsite\Excel\Facades\Excel;

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

    public function export()
    {
        return Excel::download(new PatientExport, 'patients.csv', FileType::CSV);
    }

    public function exportRecords(Patient $patient)
    {
        return Excel::download(new BloodPressureRecordExport($patient->id), 'patient_records.csv', FileType::CSV);
    }
}
