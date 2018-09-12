<?php

use Illuminate\Database\Seeder;

class MaterialTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $row = 1;
        $meta = array();
        if (($handle = fopen("milli_arsiv_data.csv", "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
                $num = count($data);
                $row++;
                $temp = \App\MaterialType::where('name',$data[0])->get();

                if(count($temp) == 0){
                    $temp = \App\MaterialType::create([
                        'name' => trim($data[0])
                    ]);
                    $meta[$temp->id] = [trim($data[1])];
                }else{

                    array_push($meta[$temp->first()->id],trim($data[1]));
                }


            }
            fclose($handle);
        }

        foreach ($meta as $k=>$v){

            $temp = \App\MaterialType::find($k);
            $counter = 0;

            foreach ($v as $meta){
                $temp["meta".(string)$counter] = $meta;
                $counter++;
            }
            $temp->save();

         }

    }
}
