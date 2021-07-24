<?php

namespace App\Listeners;

use Database\Init\RolesAndPermissionsSeeder;
use Database\Init\SuperUserSeeder;

class SeedRequiredDataOnce
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @return void
     */
    public function handle()
    {
        collect([
            new RolesAndPermissionsSeeder,
            new SuperUserSeeder,
        ])->each->__invoke();
    }
}
