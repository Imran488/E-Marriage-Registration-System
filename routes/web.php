<?php

use App\Models\RegistrationForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaziListController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Website\HomeController;

use App\Http\Controllers\MarriageRegistrationController;

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

Route::group(['prefix'=>'website'], function () {
  Route::get('/menu/home',[HomeController::class,'menuHome'])->name('menu.home');
  Route::get('/register',[HomeController::class,'Register'])->name('register');

   
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('dashboard'); 
    Route::get('/kazilist',[KaziListController::class,'KaziList'])->name('kazilist');
    Route::get('/kaziform',[KaziListController::class,'KaziForm'])->name('kaziform');
    Route::post('/kstore',[KaziListController::class,'KStore'])->name('kstore');
    Route::get('/marrigeregistration',[MarriageRegistrationController::class,'MarriageRegistration'])->name('marrigeregistration');
    Route::get('/userregistrationform',[MarriageRegistrationController::class,'UserRegistrationForm'])->name('userregistrationform');
    Route::post('/store',[MarriageRegistrationController::class,'Store'])->name('store');
    
});


