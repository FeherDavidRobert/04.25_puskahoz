<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\tablazat;
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

Route::get('/', [tablazat::class,"megjelenites"]); //a megjelenites, es az elkuld a ket publicxd

Route::post('/rogzites', [tablazat::class,"elkuld"]);