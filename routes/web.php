<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;

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


Route::get('/', function () {
    return view('welcome');
});


Route::get('/ecommerce', function(){
    return view('ecommerce');
});

Route::post('/contacto', [ContactController::class, 'store']);



/**
 * Projects
 */
Route::get('/proyecto-insumos-informaticos', function(){
    return view('projects/project_1');
});

Route::get('/proyecto-homeopatia-cosmeticos', function(){
    return view('projects/project_2');
});