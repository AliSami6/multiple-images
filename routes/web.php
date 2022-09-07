<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CompanyController;
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
Route::controller(ImageController::class)->group(function(){
    Route::get('image-upload', 'index');
    Route::post('image-upload', 'store')->name('image.store');
});

Route::controller(CompanyController::class)->group(function(){
    Route::get('/company', 'view')->name('company.index');
    Route::get('/companies', 'get_company_data')->name('data');
    Route::get('/addcompany', 'view')->name('company.view');
    Route::post('/addcompany','Store')->name('company.store');
    Route::delete('/addcompany/{id}', 'destroy')->name('company.destroy');
    Route::get('/addcompany/{id}/edit', 'update')->name('company.update');
});
