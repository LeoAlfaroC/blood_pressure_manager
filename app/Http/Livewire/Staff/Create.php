<?php

namespace App\Http\Livewire\Staff;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    public $name, $email, $password, $role_id;
    public $roles;

    protected $rules = [
        'name' => ['required'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required'],
        'role_id' => ['required', 'exists:roles,id'],
    ];

    public function mount()
    {
        $this->roles = Role::all();
    }

    public function render()
    {
        return view('livewire.staff.create');
    }

    public function submit()
    {
        $this->validate();

        $user = new User;
        $user->name = $this->name;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->save();

        $user->assignRole($this->role_id);

        session()->flash('success', 'Practice staff user successfully created');

        return redirect()->route('staff.index');
    }
}
