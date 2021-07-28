<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
}
