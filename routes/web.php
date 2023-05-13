<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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
Route :: get('/', [
    PagesController::class,
    'index'
])->name('home');

Route :: get('/about', [
    PagesController::class,
    'about'
]);

Route :: get('/products', [
    ProductController::class,
    'index'
])->name('products');

Route :: get('/products/{atribute}/{id}', [
    ProductController::class,
    'detail'
])->where([
            'id'=> '[0-9]+',
            'atribute' => '[a-zA-Z]+'
        ]); // use validate



Route :: get('/services', [ServicesController::class, 'index'])->name('services');

Route::get('/about', function () {
    return view('abouts.index');
})->name('about');
