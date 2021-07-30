<?php

namespace App\Http\Controllers;

use App\Models\BloodPressureRecord;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $staff_count = User::count();
        $patient_count = Patient::count();
        $blood_pressure_records = BloodPressureRecord::count();

        return view('dashboard.index')->with(compact('staff_count', 'patient_count', 'blood_pressure_records'));
    }
}
