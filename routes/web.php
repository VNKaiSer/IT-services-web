<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ServicesController;

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
#home route
Route :: get('/', [
    PagesController::class,
    'index'
])->name('home');



#services route
Route :: get('/services', [ServicesController::class, 'index'])->name('services');
Route :: get('/services/{id}', [ServicesController::class, 'dentail'])->name('services.dentail');

#about route
Route::get('/about',[AboutController::class,'index'])->name('about');

#news route
Route::get('/news', [NewsController::class,'index'])->name('news');

#contact route
Route::get('/contact', [ContractController::class, 'index'])->name('contact');
