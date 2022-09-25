<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NotFoundController;
use App\Http\Controllers\FaqController;
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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function (){
    return view('home.index');
})->name('home');
Route::get('/project', [ProductsController::class, 'index'])->name('project');
Route::get('/project/details', [ProductsController::class, 'project_details'])->name('project_details');
Route::get('/product_price', [ProductsController::class, 'product_price'])->name('product_price');

Route::get('/services', [ServicesController::class, 'index'])->name('services');
Route::get('/services/details', [ServicesController::class, 'services_details'])->name('services_details');
Route::get('/team', [ServicesController::class, 'team'])->name('team');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');

Route::get('/blogs', [BlogsController::class, 'index'])->name('blogs');
Route::get('/blogs/details', [BlogsController::class, 'blogs_details'])->name('blogs_details');

Route::get('/about', [AboutController::class, 'index'])->name('about');

// 404 page
Route::get('/not-found', [NotFoundController::class, 'index'])->name('not_found');

// Faq 
Route::get('/faq', [FaqController::class, 'index'])->name('faq');

// coming soon 
Route::get('/coming_soon', [HomeController::class, 'coming_soon'])->name('coming_soon');

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
