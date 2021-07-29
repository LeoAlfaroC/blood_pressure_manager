<?php

namespace App\Http\Livewire\Patient;

use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Create extends Component
{
    public $first_name, $last_name, $birthday, $email, $medical_history, $allergies, $family_background;

    protected $rules = [
        'first_name' => ['required'],
        'last_name' => ['required'],
        'birthday' => ['required', 'date'],
        'email' => ['required', 'email', 'unique:users,email'],
    ];

    public function render()
    {
        return view('livewire.patients.create');
    }

    public function submit()
    {
        $this->validate();

        $patient = new Patient;
        $patient->first_name = $this->first_name;
        $patient->last_name = $this->last_name;
        $patient->birthday = $this->birthday;
        $patient->email = $this->email;
        $patient->medical_history = $this->medical_history;
        $patient->allergies = $this->allergies;
        $patient->family_background = $this->family_background;
        $patient->save();

        session()->flash('success', 'Patient successfully created');

        return redirect()->route('patients.index');
    }
}
