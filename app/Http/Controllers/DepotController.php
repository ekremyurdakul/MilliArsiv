<?php

namespace App\Http\Controllers;

use App\Depot;
use Illuminate\Http\Request;

class DepotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index($id){

        return view('depot')->with([
            'depot' => Depot::find($id)
        ]);

    }

    public function getByArhive($id){

        return json_encode(Depot::where('archive_id',$id)->get());

    }
}
