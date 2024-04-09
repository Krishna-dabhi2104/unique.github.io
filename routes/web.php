<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Forms;
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

Route::get('/registers',[Forms::class ,'index']);
Route::post('/registers',[Forms::class ,'registers']);
Route::get('/registers/view',[Forms::class ,'view']);
Route::get('/edit/{id}',[Forms::class ,'edit']);
Route::put('update-data/{id}',[Forms::class ,'update']);
Route::get('/delete/{id}',[Forms::class ,'remove']);