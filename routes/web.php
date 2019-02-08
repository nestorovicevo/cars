<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('cars', function () {
//     $zoka = 'Zrc';
//     $age = 25;
//     return view('cars.cars', compact('zoka', 'age'));
// });

// Route::get('/', function () {
//     $age = 25;
//     return view('welcome', compact('age'));
// });



Route::get('about', function () {
    return view('cars.about');
});


Route::resource('cars', 'CarsController');