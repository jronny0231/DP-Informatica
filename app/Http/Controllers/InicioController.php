<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function index(Request $peticion){
        $data = ['nombre' => $peticion->query('nombre','SIN DATOS')];

        return view('inicioVista')->with($data);
    }
}
 