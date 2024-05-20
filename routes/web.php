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
    return view('guests.welcome');
});

Route::get('/products', function () {
    return view('guests.products');
});

Route::get('/news', function () {
    return view('guests.news');
});

Route::get('/app', function () {
    return view('layouts.app');
});

// Example
// Route::get('/contact', function () {
//     return view('guests.contact');
// });

// Route::get('/about', function () {

//     $data = [
//         'name' => 'Salvatore',
//         'lastname' => 'Stefanelli'
//     ];

//     return view('guests.about', $data);
// });
