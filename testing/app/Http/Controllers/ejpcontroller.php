<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ejpcontroller extends Controller
{
    // el metodo __invoke se usa para definir un controlador de una sola accion
    // por eso en web.php no es necesario especificar el metodo
    public function __invoke() {
        return "estoy en el controlador ejpcontroller";
    }
}
