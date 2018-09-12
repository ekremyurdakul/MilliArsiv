<?php

use Illuminate\Database\Seeder;

class DepotSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultArchive = \App\Archive::find(1);

        $depot_names = ["A1","A2","A3","A4","B1","B2","B3","B4","C1","C2","C3","C4","C5","C6","C7","C8"];

        foreach ($depot_names as $name){
            \App\Depot::create([
                'name'          => $name,
                'description'   => 'Açıklama Yok',
                'archive_id'    => $defaultArchive->id
            ]);
        }

    }
}