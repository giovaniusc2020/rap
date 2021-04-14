<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!

    
        $data = file_get_contents("hola.json");
        $palabras = json_decode($data, true);
 
        foreach ($palabras as $palabra) {
      echo '<pre>';
    print_r($palabra);
    echo '</pre>';

|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/palabras={letra}', 'PalabraController@palabrab_aleatoria');
Route::get('/scrap={palabra}','ScrapController@prueba');
