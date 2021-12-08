<?php

use App\Models\KaziForm;
use App\Models\OfficeForm;
use App\Models\RegistrationForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaziListController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaziOfficeController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\website\FindUsController;
use App\Http\Controllers\website\PaymentController;
use App\Http\Controllers\website\ServiceController;
use App\Http\Controllers\website\ManagementController;
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
Route::get('/', function () {

  $registerlist=RegistrationForm::all();
  return view('website.pages.home',compact('registerlist'));
  });

Route::group(['prefix'=>'website'], function () {
  Route::get('/home',[HomeController::class,'Home'])->name('home');
  Route::get('/register',[HomeController::class,'Register'])->name('register');
  Route::get('/aboutus',[ManagementController::class,'Aboutus'])->name('aboutus');
  Route::get('/speciality',[ManagementController::class,'Speciality'])->name('speciality');
  Route::get('/employee',[ManagementController::class,'Employee'])->name('employee');
  Route::get('/ouroffices',[FindUsController::class,'Ouroffices'])->name('ouroffices');
  Route::get('/support',[FindUsController::class,'Support'])->name('support');
  Route::get('/payment',[PaymentController::class,'Payment'])->name('payment');
  Route::get('/payment.condition',[PaymentController::class,'Paymentcondition'])->name('paymentcondition');
  Route::get('/marriage',[ServiceController::class,'Marriage'])->name('marriage');
  Route::get('/devorce',[ServiceController::class,'Devorce'])->name('devorce');
  Route::get('/certificate',[ServiceController::class,'Certificate'])->name('certificate');
});

Route::group(['prefix'=>'admin'],function(){
    Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('dashboard'); 
    Route::get('/kazilist',[KaziListController::class,'KaziList'])->name('kazilist');
    Route::get('/kaziform',[KaziListController::class,'KaziForm'])->name('kaziform');
    Route::post('/kstore',[KaziListController::class,'KStore'])->name('kstore');
    Route::get('/office',[KaziOfficeController::class,'Office'])->name('kazioffice');
    Route::get('/officeform',[KaziOfficeController::class,'OfficeForm'])->name('officeform');
    Route::post('/ostore',[KaziOfficeController::class,'OStore'])->name('ostore');
    Route::get('/marrigeregistration',[MarriageRegistrationController::class,'MarriageRegistration'])->name('marrigeregistration');
    Route::get('/userregistrationform',[MarriageRegistrationController::class,'UserRegistrationForm'])->name('userregistrationform');
    Route::post('/store',[MarriageRegistrationController::class,'Store'])->name('store');
    
});


