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
    return view('welcome');
});
Route::get('/', function () { return view('demo'); });
Route::get('/item/zapatilla-blanca-adidas-mujer', function () { return view('item'); });
Route::get('/categoria/mujer', function () { return view('item'); });
// Route::get('/demo/destacados', function () { return view('item'); });
// Route::get('/demo/carrito', function () { return view('item'); });
// Route::get('/demo/contacto', function () { return view('item'); });



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');