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
})->name('home');

Route::get('/products', function () {

    $pasta = config('data.products');
    
    // dd($pasta);

    return view('guests.products', compact('pasta'));
    
})->name('products');

Route::get('/news', function () {
    return view('guests.news');
})->name('news');

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
