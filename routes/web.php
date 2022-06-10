<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tenant\ProvisionSchemaTables;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Tenant\BlogPostController;
use App\Http\Controllers\Tenant\CustomerController;

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


// Tenant Routes
Route::get('/up', [ProvisionSchemaTables::class, 'up'])->name('migration.up');
Route::get('/down', [ProvisionSchemaTables::class, 'down'])->name('migration.up');
Auth::routes();

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::domain('{username}.' . env('APP_URL'))->group(function () {
    Route::get('/post', [BlogPostController::class, 'index'])->name('post.all');
});

Route::get('/post', [BlogPostController::class, 'index'])->name('post.all');
Route::get('/customer', [CustomerController::class, 'index'])->name('all');