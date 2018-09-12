<?php

namespace App\Http\Controllers;

use Alert;
use App\Material;
use App\MaterialData;
use App\MaterialType;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\HttpCache\Esi;

class MaterialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){



        return view('show_material')->with([
            'material' => Material::find($id)
        ]);
    }

    public function addMaterial($depot_id){
        return view('add_material')->with(
            [
                'depot_id' => $depot_id

            ]);
    }

    public function getParameters($type_id){
        $current_material_type = MaterialType::find($type_id);
        $retVal = array();

        for ($i = 0; $i <= 36; $i++){
            $temp = "meta".$i;
            if($current_material_type[$temp] != null){
                $retVal[$i] = $current_material_type[$temp];
            }else{
                break;
            }
        }

        return json_encode($retVal);
    }

    public function add(Request $request){


        Material::create([
            'depot_id'          => $request->depot_id,
            'name'              => $request->material_name,
            'locator'           => $request->material_locator,
            'material_type_id'  => $request->material_type_id,
        ]);

        Alert::message('Başarıyla Kaydedildi');

        return redirect('/depot/'. $request->depot_id);
    }

    public function delete($id,$depot_id){
        Material::find($id)->forceDelete();

        Alert::message('Başarıyla Silindi');
        return redirect('/depot/'. $depot_id);
    }

    public function update(Request $request){

        $material = Material::find($request->material_id);
        $metaData = $material->material_data()->get()->first();

        unset($request['_token']);
        unset($request['material_id']);


        foreach ($request->all() as $key => $value){
            $metaData['data'.$key] = $value;
        }

        $metaData->save();

        Alert::message('Başarıyla Güncellendi');
        return redirect()->back();
    }

    public function search(){

        $search = array_pop($_GET);
        // Turkish char fix
        $query = str_replace("ı", "i", $search);

        $suggestions  = array();

        $first_part = Material::where('name','LIKE',"%{$query}%")->orWhere('locator','LIKE',"%{$query}%")->get();

            foreach ($first_part as $r) {
                array_push($suggestions, ["value" => $r->name, "data" => $r->id]);
            }

            return json_encode(["suggestions"=>$suggestions]);

    }
}
