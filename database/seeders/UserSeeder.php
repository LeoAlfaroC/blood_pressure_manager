<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin_role = Role::findByName('Admin');
        $doctor_role = Role::findByName('Doctor');
        $nurse_role = Role::findByName('Nurse');

        User::factory()
            ->count(5)
            ->hasAttached($admin_role)
            ->create();

        User::factory()
            ->count(30)
            ->hasAttached($doctor_role)
            ->create();

        User::factory()
            ->count(65)
            ->hasAttached($nurse_role)
            ->create();
    }
}
