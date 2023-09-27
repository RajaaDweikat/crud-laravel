<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\CarController;
use App\Http\Controllers\CarOwnerController;



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


Route::get('/cars', [CarController::class, 'index']);
Route::get('/customers',[CustomerController::class,'index']);
Route::get('/details/{id}',[CarController::class,'showDetails'])->name('info');



////crud system /////
Route::get('/form', function () {
    return view('store');
})->name('back');

Route::post('/create',[CarOwnerController::class, 'storedata']);
Route::get('/read',[CarOwnerController::class,'index']);
Route::get('/view/edit',[CarOwnerController::class,'viewEdit'])->name('viewEdit');
Route::get('/edit/{id}',[CarOwnerController::class,'edit'])->name('edit');
Route::post('/update/{id}',[CarOwnerController::class,'update'])->name('update');
Route::get('/view/delete',[CarOwnerController::class,'viewdelete'])->name('viewDelete');
Route::get('/delete/{id}',[CarOwnerController::class,'destroy'])->name('delete');





