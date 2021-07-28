<?php

namespace App\Listeners;

use Database\Init\RolesAndPermissionsSeeder;
use Database\Init\FirstAdminUserSeeder;

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
            new FirstAdminUserSeeder,
        ])->each->__invoke();
    }
}
