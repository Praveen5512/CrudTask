<?php

use App\Http\Controllers\CrudController;
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

Route::get('create', function(){
    return view('create');
})->name('create');
Route::get('read', [CrudController::class,'read'])->name('read');
Route::get('update', [CrudController::class,'getData'])->name('update');
Route::post('update', [CrudController::class,'update'])->name('update');



Route::post('create', [CrudController::class,'create'])->name('create');
Route::post('delete', [CrudController::class,'delete'])->name('delete');
