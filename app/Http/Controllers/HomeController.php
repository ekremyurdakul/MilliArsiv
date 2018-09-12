<?php

namespace App\Http\Controllers;

use Alert;
use App\Archive;
use App\Depot;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //retrieving the archives
        $archives = Archive::all();

        Alert::message('Milli Arşive Hoşgeldiniz.');


        return view('home')->with([
            'archives'  => $archives,
        ]);
    }
}
