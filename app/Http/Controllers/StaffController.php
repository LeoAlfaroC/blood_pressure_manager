<?php

namespace App\Http\Controllers;

use App\Exports\StaffExport;
use App\Models\User;
use Maatwebsite\Excel\Facades\Excel;
use \Maatwebsite\Excel\Excel as FileType;

class StaffController extends Controller
{
    public function index()
    {
        return view('staff.index');
    }

    public function create()
    {
        return view('staff.create');
    }

    public function edit(User $user)
    {
        return view('staff.edit')->with(compact('user'));
    }

    public function export()
    {
        return Excel::download(new StaffExport, 'practice_staff.csv', FileType::CSV);
    }
}
