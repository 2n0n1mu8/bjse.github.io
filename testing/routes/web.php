<?php

use App\Http\Controllers\ejpcontroller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\pagewebController;
use App\Http\Controllers\parameController;

route::get("/home", [HomeController::class,"index"]);
route::get("/{nameuser}", pagewebController::class);
// route::get("/{x1}/{x2?}/{x3?}", parameController::class);
// lo mas importante antes de los tipos es el orden en el que se crean las rutas
// las rutas se leen de arriba hacia abajo, por lo que si una ruta coincide con otra
// solo se ejecutara la primera que coincida
route::get("/ej", ejpcontroller::class);

// este es el defautl de laravel
Route::get('/', function () {
    return view('welcome');
});

// existen varios tipos de rutas en laravel
// get es el mas común, sirve para obtener datos, por ejemplo, una vista
/* route::get('/ruta', function () {
    return 'Hola mundo';
}); */
Route::get('/about', function () {
    return "Acerca de nosotros";
});

// post es para enviar datos por ejemplo, un formulario
/* route::post('/ruta', function () {
    return 'Hola mundo';
}); */

// put es para actualizar datos, por ejemplo, un registro
/* route::put('/ruta', function () {
    return 'Hola mundo';
}); */

// delete es para eliminar datos, por ejemplo, un registro
/* route::delete('/ruta', function () {
    return 'Hola mundo';
}); */

// patch es para actualizar datos parcialmente, por ejemplo, solo un campo de un registro
/* route::patch('/ruta', function () {
    return 'Hola mundo';
}); */

// options es para obtener las opciones de una ruta, por ejemplo, los métodos HTTP que soporta
/* route::options('/ruta', function () {
    return 'Hola mundo';
}); */

// any
/* route::any('/ruta', function () {
    return 'Hola mundo';
}); */

// match
/* route::match(['get', 'post'], '/ruta', function () {
    return 'Hola mundo';
}); */

// tambien se pueden definir rutas con parametros, no solo 1 parametro sino tantos como queramos
// los parametros se definen con llaves {}
/* route::get('/ruta/{parametro1}/{parametro2}', function ($parametro1, $parametro2) {
    return 'primer parametro ' . $parametro1 . 'segundo parametro' . $parametro2;
}); */
Route::get("/test/{parametro1}/{parametro2}", function ($para, $para2) {
    return "estoy en el pais de " . $para . ", en la ciudad de " . $para2;
});
Route::get("/test1/{parametro_necesario}/{parametro_opcional?}", function ($obligatorio, $opcional = null) {
    
    if ($opcional) {
        return 'necesario: ' . $obligatorio . ' opcional: ' . $opcional;
    }
    
    return 'necesario: ' . $obligatorio;
});

// los parametros pueden ser opcionales, se definen con un signo de interrogacion ?
/* route::get('/ruta/{parametro?}', function ($parametro = null) {
    return 'Hola mundo ' . $parametro;
}); */

// total los mas comunes son get y post
// los parametros pueden ser obligatorios u opcionales
// get/post/put/delete/patch/options/any/match
