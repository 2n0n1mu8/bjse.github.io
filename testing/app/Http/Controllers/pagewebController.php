<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagewebController extends Controller
{
    public function __invoke($x1)
    {
        return view("home", [
            "username" => $x1,
            "variable" => "contenido de la variable",
            "pais"=> "Perú"
        ]);
    }

}
