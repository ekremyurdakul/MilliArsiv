<?php

use Illuminate\Database\Seeder;

class FakeMaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        $n = 25000;

        $min = \App\Depot::min('id');
        $max = \App\Depot::max('id');

        for($i = 0; $i < $n ;  $i++){


            $temp = \App\MaterialData::create([

            ]);

            \App\Material::create([
                'name'              => $faker->unique()->isbn10(),
                'locator'           => $faker->uuid(),
                'material_type_id'  => rand(1,20),
                'depot_id'          => rand($min,$max),
                'material_data_id'  => $temp->id
            ]);

            $this->command->info($temp->name . ' created !');
        }

    }
}
