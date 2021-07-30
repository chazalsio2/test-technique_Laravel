<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ActivitiesControlleur;
use App\Http\Controllers\editeController;
use App\Http\Controllers\utilisateurController;

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
    return('welcome');
})->name('connexion');
Route::resource('/activities', ActivitiesControlleur::class);
Route::resource('user', utilisateurController::class);
