<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

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

Route::get('/menus/list' , [MenuController::class , 'index']);
// Route::get('/menus/create' , [MenuController::class , 'create']);
// Route::post('/menus/store' , [MenuController::class, 'store']);

Route::get('/menus/edit/{id}' , [MenuController::class , 'edit']);
Route::post('/menus/edit/{id}' , [MenuController::class , 'store']);