<?php

use App\Models\KaziForm;
use App\Models\OfficeForm;
use App\Models\RegistrationForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaziListController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaziOfficeController;
use App\Http\Controllers\UserRequestController;
use App\Http\Controllers\Website\HomeController;
use App\Http\Controllers\Website\LoginController;
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
// Route::get('/', function () {

  
//   return view('website.pages.home');
//   });
Route::get('/',[HomeController::class,'Home'])->name('home');

Route::group(['prefix'=>'website'], function () {
   Route::get('/user/search',[HomeController::class,'search'])->name('user.search');
   Route::get('/marriagerules',[HomeController::class,'Rules'])->name('rules');
  Route::get('/aboutus',[ManagementController::class,'Aboutus'])->name('aboutus');
  Route::get('/speciality',[ManagementController::class,'Speciality'])->name('speciality');
  Route::get('/employee',[ManagementController::class,'Employee'])->name('employee');
  Route::get('/ouroffices',[FindUsController::class,'Ouroffices'])->name('ouroffices');
  Route::get('/support',[FindUsController::class,'Support'])->name('support');
  Route::get('/payment',[PaymentController::class,'Payment'])->name('payment');
  Route::get('/payment.condition',[PaymentController::class,'Paymentcondition'])->name('paymentcondition');
  Route::get('/marriage',[ServiceController::class,'Marriage'])->name('marriage');
  Route::post('/marriageform',[ServiceController::class,'MarriageForm'])->name('marriage.requestform');
  Route::get('/devorce',[ServiceController::class,'Devorce'])->name('devorce');
  Route::post('/devorceform',[ServiceController::class,'DevorceForm'])->name('devorce.requestform');
  Route::get('/certificate',[ServiceController::class,'Certificate'])->name('certificate');
  Route::post('/certificateform',[ServiceController::class,'CertificateForm'])->name('certificate.requestform');
  Route::get('/user',[LoginController::class,'User'])->name('user');
  Route::post('/userlogin',[LoginController::class,'UserLogin'])->name('user.login');
  Route::get('/signup',[LoginController::class,'Signup'])->name('signup');
  Route::post('/usersignup',[LoginController::class,'UserSignup'])->name('user.signup');
  Route::get('/logout',[LoginController::class,'userlogout'])->name('logout');
  Route::get('/adminlogout',[LoginController::class,'adminlogout'])->name('admin.logout');
});

//admin login
Route::get('/login',[LoginController::class,'Admin'])->name('admin');
Route::post('/adminlogin',[LoginController::class,'AdminLogin'])->name('admin.login');




  Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
    // Route::get('/admin', function () {
    //   return view('admin.pages.dashboard');
    //  });
    Route::get('/dashboard',[DashboardController::class,'Dashboard'])->name('dashboard'); 
    Route::get('/kazilist',[KaziListController::class,'KaziList'])->name('kazilist');
    Route::get('/userlist',[KaziListController::class,'UserList'])->name('userlist');
    Route::get('/kazidetails/{id}',[KaziListController::class,'KaziDetails'])->name('kazidetails');
    Route::get('/kazidelete/{id}',[KaziListController::class,'KaziDelete'])->name('kazidelete');
    Route::get('/kaziform',[KaziListController::class,'KaziForm'])->name('kaziform');
    Route::post('/kstore',[KaziListController::class,'KStore'])->name('kstore');
    Route::get('/office',[KaziOfficeController::class,'Office'])->name('kazioffice');
    Route::get('/officedetails/{id}',[KaziOfficeController::class,'OfficeDetails'])->name('officedetails');
    Route::get('/officedelete/{id}',[KaziOfficeController::class,'OfficeDelete'])->name('officedelete');
    Route::get('/officeform',[KaziOfficeController::class,'OfficeForm'])->name('officeform');
    Route::post('/ostore',[KaziOfficeController::class,'OStore'])->name('ostore');
    Route::get('/marrigeregistration',[MarriageRegistrationController::class,'MarriageRegistration'])->name('marrigeregistration');
    Route::get('/userregistrationform',[MarriageRegistrationController::class,'UserRegistrationForm'])->name('userregistrationform');
    Route::post('/store',[MarriageRegistrationController::class,'Store'])->name('store');
    Route::get('/view/{bridal_id}',[MarriageRegistrationController::class,'View'])->name('view');
    Route::get('/delete/{bridal_id}',[MarriageRegistrationController::class,'Delete'])->name('delete');
    Route::get('/edit/{bridal_id}',[MarriageRegistrationController::class,'Edit'])->name('edit');
    Route::put('/update/{bridal_id}',[MarriageRegistrationController::class,'Update'])->name('update');
    Route::get('/devorcerequestslist',[UserRequestController::class,'DevorceRequestList'])->name('devorce.requestlist');
    Route::get('divorce/view/{divorce_id}',[UserRequestController::class,'DivorceView'])->name('divorceview');
    Route::get('divorce/delete/{divorce_id}',[UserRequestController::class,'DivorceDelete'])->name('divorcedelete');
    Route::get('/certificaterequestslist',[UserRequestController::class,'CertificateRequestList'])->name('certificate.requestlist');
    Route::get('/marriagerequestslist',[UserRequestController::class,'MarriageRequestList'])->name('marriage.requestlist');
});


