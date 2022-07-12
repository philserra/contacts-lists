<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\EntrepriseController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/* |-------------------------------------------------------------------------- | Web Routes |-------------------------------------------------------------------------- | | Here is where you can register web routes for your application. These | routes are loaded by the RouteServiceProvider within a group which | contains the "web" middleware group. Now create something great! | */


Route::get('/', function () {
    return view("welcomes");

})->name('welcomes.index');
// Route::get('/', [WelcomeController::class , 'index'])->name('welcomes.index');
Route::resource('/contacts', ContactsController::class);
Route::resource('/entreprises', EntrepriseController::class);
Route::resource('/invoices', InvoicesController::class);
