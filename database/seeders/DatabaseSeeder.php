<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SlideTypeSeederMedical::class,
            SlideTypeSeederZKH::class,
            SlideTypeSeederTransport::class,
            SlideTypeSeederEmergency::class,
            SlideTypeSeederUniversal::class,
        ]);
    }
}
