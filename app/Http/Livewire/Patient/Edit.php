<?php

namespace App\Http\Livewire\Patient;

use App\Models\Patient;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Edit extends Component
{
    public Patient $patient;

    public function mount(Patient $patient)
    {
        $this->patient = $patient;
    }

    public function render()
    {
        return view('livewire.patients.edit');
    }

    protected function rules()
    {
        return [
            'patient.first_name' => ['required'],
            'patient.last_name' => ['required'],
            'patient.birthday' => ['required', 'date_format:Y-m-d'],
            'patient.medical_history' => ['nullable'],
            'patient.allergies' => ['nullable'],
            'patient.family_background' => ['nullable'],
            'patient.email' => ['required', 'email', Rule::unique('patients', 'email')->ignore($this->patient->id)],
        ];
    }

    public function submit()
    {
        $this->validate();

        $this->patient->save();

        session()->flash('success', 'Patient successfully updated');

        return redirect()->route('patients.index');
    }
}
