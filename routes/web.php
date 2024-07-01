<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $data = config("store");
    return view('welcome', $data);
})->name("welcome");


// Route::get('/card/{indice}', function ($indice) {
//     $fumetti=config("store.fumetti");
//     $data=[
//         "fumetto"=> $fumetti[$indice]
//     ];
    
//     return view('card', $data);
// })->name("card");

Route::get('/card/{indice}', function ($indice) {
    $fumetti=config("store.fumetti");

    if ($indice < count($fumetti) && $indice >= 0) {
        $data=[
            "fumetto"=> $fumetti[$indice]
        ];
        return view('card', $data);
    } else {
        abort(404);
    }

})->name("card");

