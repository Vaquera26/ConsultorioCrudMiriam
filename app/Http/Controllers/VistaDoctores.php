<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VistaDoctores extends Controller
{
    function index(){

        $doctores = Medicina::all();
        dd($doctores);
        return view('vistadoctores', ['doctores' => $doctores]);

    }
}
