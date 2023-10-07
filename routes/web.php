<?php

use App\Http\Controllers\Inventories_controller;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/inv', [Inventories_controller::class, 'index']);
Route::get('/inv/create', [Inventories_controller::class, 'create']);
Route::post('/inv/add', [Inventories_controller::class, 'store']);
Route::get('/inv/delete/{inventories_model}', [Inventories_controller::class, 'destroy']);
Route::get('/inv/edit/{inventories_model}', [Inventories_controller::class, 'edit']);
Route::post('/inv/update/{inventories_model}', [Inventories_controller::class, 'update']);

Route::get('/master', [Inventories_controller::class, 'edit']);
