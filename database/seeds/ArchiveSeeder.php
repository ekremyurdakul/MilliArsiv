<?php

use Illuminate\Database\Seeder;

class ArchiveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Inıtial Arhive
        $archive = new \App\Archive();
        $archive->name = "Milli Arşiv Girne";
        $archive->save();
    }
}
