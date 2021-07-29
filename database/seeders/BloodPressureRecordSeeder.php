<?php

namespace Database\Seeders;

use App\Models\BloodPressureRecord;
use App\Models\Patient;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class BloodPressureRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BloodPressureRecord::factory()
            ->count(2500)
            ->state(new Sequence(
                fn ($sequence) => ['patient_id' => Patient::all()->random()],
            ))
            ->create();
    }
}
