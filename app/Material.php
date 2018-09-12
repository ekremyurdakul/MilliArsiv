<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{

    protected $fillable = ['name', 'locator' ,'depot_id','material_type_id','material_group_id'];

    public function material_type(){

        return $this->belongsTo('App\MaterialType');
    }

    public function material_group(){

        return $this->belongsTo('App\MaterialGroup');
    }

    public function  material_data(){

        return MaterialData::where('id',$this->material_type_id);
    }

    public function metadata(){
        $retVal = array();
        $materialData = MaterialData::where('id',$this->material_type_id)->get()->first();
        $materialType= $this->material_type()->get()->first();


        for ($i = 0; $i <= 36; $i++){
            if($materialType["meta".$i] != "")
            $retVal[$materialType["meta".$i]] = $materialData["data".$i];
        }


        return $retVal;
    }
}
