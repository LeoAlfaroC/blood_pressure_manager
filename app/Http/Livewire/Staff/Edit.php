<?php

namespace App\Http\Livewire\Staff;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    public User $user;
    public $password;
    public $role_id;
    public $roles;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->role_id = $this->user->roles()->first()->id;
        $this->roles = Role::all();
    }

    public function render()
    {
        return view('livewire.staff.edit');
    }

    protected function rules()
    {
        return [
            'user.name' => ['required'],
            'user.email' => ['required', 'email', Rule::unique('users', 'email')->ignore($this->user->id)],
            'role_id' => ['required', 'exists:roles,id'],
        ];
    }

    public function submit()
    {
        $this->validate();

        if ($this->password) {
            $this->user->password = Hash::make($this->password);
        }

        $this->user->save();

        $this->user->roles()->detach();
        $this->user->assignRole($this->role_id);

        session()->flash('success', 'Practice staff user successfully updated');

        return redirect()->route('staff.index');
    }
}
