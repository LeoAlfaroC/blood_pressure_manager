<?php

namespace Database\Init;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SuperUserSeeder
{
    public function __invoke()
    {
        if ($this->present() || !in_array(app()->environment(), ['local', 'development'])) {
            return;
        }

        $super_admin = new User;
        $super_admin->name = 'Super Admin';
        $super_admin->email = 'example@example.com';
        $super_admin->password = Hash::make('secret');
        $super_admin->assignRole('super-admin');
        $super_admin->save();
    }

    public function present(): bool
    {
        return DB::table('users')->count() > 0;
    }
}
