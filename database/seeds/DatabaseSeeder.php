<?php

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
        $this->call(ArchiveSeeder::class);

        $this->call(DepotSeeder::class);

        $this->call(MaterialTypeSeeder::class);

        $this->call(FakeMaterialSeeder::class);
    }
}
