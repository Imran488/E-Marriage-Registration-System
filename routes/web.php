<?php

use App\Models\KaziForm;
use App\Models\OfficeForm;
use App\Models\RegistrationForm;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaziListController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaziOfficeController;
use App\Http\Controllers\UserRequestController;
use App\Http\Controllers\AdminPaymentController;
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


// User Login and SignUp

Route::get('/user',[LoginController::class,'User'])->name('user');
  Route::post('/userlogin',[LoginController::class,'UserLogin'])->name('user.login');
  Route::get('/signup',[LoginController::class,'Signup'])->name('signup');
  Route::post('/usersignup',[LoginController::class,'UserSignup'])->name('user.signup');



Route::group(['middleware'=>'user'], function () {
  Route::get('/',[HomeController::class,'Home'])->name('home');
  Route::get('/appointment',[HomeController::class,'Appointment'])->name('kazi.appointment');
  Route::post('/appointmentform',[HomeController::class,'AppointmentForm'])->name('form.appointment');
  Route::get('/kazilist',[HomeController::class,'KaziList'])->name('kazi');
  Route::get('/marriagerules',[HomeController::class,'Rules'])->name('rules');
  Route::get('/aboutus',[ManagementController::class,'Aboutus'])->name('aboutus');
  Route::get('/speciality',[ManagementController::class,'Speciality'])->name('speciality');
  Route::get('/employee',[ManagementController::class,'Employee'])->name('employee');
  Route::get('/ouroffices',[FindUsController::class,'Ouroffices'])->name('ouroffices');
  Route::get('/support',[FindUsController::class,'Support'])->name('support');
  Route::get('/payment',[PaymentController::class,'Payment'])->name('payment');
  Route::post('/paymentform',[PaymentController::class,'PaymentForm'])->name('payment.store');
  Route::get('/payment.condition',[PaymentController::class,'Paymentcondition'])->name('paymentcondition');
  Route::get('/marriage',[ServiceController::class,'Marriage'])->name('marriage');
  Route::post('/marriageform',[ServiceController::class,'MarriageForm'])->name('marriage.requestform');
  Route::get('/devorce',[ServiceController::class,'Devorce'])->name('devorce');
  Route::post('/devorceform',[ServiceController::class,'DevorceForm'])->name('devorce.requestform');
  Route::get('/certificate',[ServiceController::class,'Certificate'])->name('certificate');
  Route::post('/certificateform',[ServiceController::class,'CertificateForm'])->name('certificate.requestform');
  Route::get('/logout',[LoginController::class,'userlogout'])->name('logout');
  Route::get('/adminlogout',[LoginController::class,'adminlogout'])->name('admin.logout');
});

//admin login
Route::get('/login',[LoginController::class,'Admin'])->name('admin');
Route::post('/adminlogin',[LoginController::class,'AdminLogin'])->name('admin.login');




  Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function(){
    Route::get('/', function () {
      return view('admin.pages.dashboard');
        })->name('dashboard');
    
    Route::get('/kazilist',[KaziListController::class,'KaziList'])->name('kazilist');
    Route::get('/userlist',[KaziListController::class,'UserList'])->name('userlist');
    Route::get('/delete/{id}',[KaziListController::class,'UserDelete'])->name('userlist.delete');
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
    Route::get('marriage/edit/{marriage_id}',[UserRequestController::class,'MarriageEdit'])->name('marriage.edit');
    Route::get('marriage/delete/{marriage_id}',[UserRequestController::class,'MarriageDelete'])->name('marriage.delete');
    Route::put('/marriageupdate/{marriage_id}',[UserRequestController::class,'MarriageUpdate'])->name('marriage.update');
    Route::get('/paymentlist',[AdminPaymentController::class,'PaymentList'])->name('payment.list');
    Route::get('/paymentdetails/{id}',[AdminPaymentController::class,'PaymentDetails'])->name('paymentdetails');
});


