<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medicina;

class Vista1Controller extends Controller
{
    function index(){

        $medicinas = Medicina::all();
        //dd($medicinas);
        return view('vista1', ['medicinas' => $medicinas]);

    }
}
