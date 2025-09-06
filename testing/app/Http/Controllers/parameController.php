<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class parameController extends Controller
{
    public function __invoke($x1, $x2 = null, $x3 = null)
    {
        if ($x3) {
            return "Estoy en el metodo parameter del controlador con tres parametros, este obligatorio: " . $x1 . " y los no obligatorios: " . $x2 . " y " . $x3 ;
            
        };
        if ($x2) {
            return "Estoy en el metodo parameter del controlador con dos parametros ubligatorios, este obligatorio: " . $x1 . " y el no obligatorio: " . $x2;
        };


        return "Estoy en el metodo parameter del controlador con un parametro ubligatorio:" . $x1;
    }
}
