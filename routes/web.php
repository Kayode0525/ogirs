<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome2');
});


Route::get('/confirm', 'VerificationController@tin')->name('tin_home');

Route::get('/udetails', 'VerificationController@udetails')->name('udetails_tin_home');

Route::get('/individual-registration', 'VerificationController@registerIndividual')->name('personal_registration');
Route::post('/create_individual_registration', 'VerificationController@createTaxPayer')->name('create_tax_payer');

Route::get('/registration', 'VerificationController@register')->name('registration');
Route::post('/register-agent', 'VerificationController@createAgent')->name('register_agent');

Route::post('/verify', 'VerificationController@verify_agent')->name('tax_identification_verify_home');

//Route::post('/verify', 'VerificationController@verify_agent')->name('verify_tin');

Route::post('/update_email_phone', 'VerificationController@update_email_phone')->name('update_email_phone');



Auth::routes();


Route::group(['middleware' => 'auth'], function(){


    Route::group(['prefix' => 'customer'], function () {

      
           // Route::get('/','CustomerHomeController@index')->name("customer_home");

              Route::get('/','HomeController@index')->name("home");
              Route::get('/employees','EmployeeController@index')->name("employee_home");
              Route::get('/monthly_returns', 'MonthlyReturnsController@index')->name("monthly_returns_home");
              Route::get('/annual_returns', 'AnnualReturnsController@index')->name("annual_returns_home");
              Route::get('/invoice_details/{id}', 'InvoiceController@invoice')->name('invoice_details_home');
              Route::get('/upload_employee', 'EmployeeController@uploademployeeHome')->name("upload_employee_home");

              Route::get('/employee_delete', 'EmployeeController@employeeDelete')->name('employee_delete');

              Route::post('/update', 'HomeController@update')->name('update_profile');

              Route::post('/upload_new_file','UploadController@fileStore')->name('upload_new_file');

              

              Route::post('/import_monthly','ExcelUploadController@importMonthlyReturns')->name('import_monthly_returns');
              
                Route::post('/import_annual','ExcelUploadController@importAnnualReturns')->name('import_annual_returns');
                
          
                Route::post('/import_employees','ExcelUploadController@importEmployeeRecord')->name('import_employee_records');
          
              Route::post('/tax_deduction_card','ExcelUploadController@importTaxDeductionCard')->name('import_tax_deduction_cards');
          
              Route::post('/import_witholding_tax','ExcelUploadController@importWitholdingTax')->name('import_witholding_tax');
              
              Route::post('/test_dropzone','ExcelUploadController@testt')->name("test_dropzone");
          
          
          
              Route::get('/create_employee_home','EmployeeController@employeeHome')->name("create_employee_home");
          
              Route::get('/employee_details/{id}', 'EmployeeController@employeeDetail')->name('employee_details_home');
          
              Route::post('/update_employee_data/{id}', 'EmployeeController@update')->name('update_employee_profile');
              Route::get('/create_employee_home','EmployeeController@employeeHome')->name("create_employee_home");
              
              Route::get('/invoice','InvoiceController@show_invoice')->name('show_invoice');
              Route::post('/create_employee','EmployeeController@create')->name("create_employee");
          
              Route::get('/tcc_apply','TaxClearanceController@index')->name('tax_clearance_certificate_home');




       //       Route::post('/import_monthly','ExcelUploadController@importMonthlyReturns')->name('import_monthly_returns');

              Route::post('/tax_deduction_card','ExcelUploadController@importTaxDeductionCard')->name('import_tax_deduction_cards');

              Route::post('/import_witholding_tax','ExcelUploadController@importWitholdingTax')->name('import_witholding_tax');

              Route::post('/test_dropzone','ExcelUploadController@testt')->name("test_dropzone");
              Route::get('/create_employee_home','EmployeeController@employeeHome')->name("create_employee_home");

              Route::get('/employee_details/{id}', 'EmployeeController@employeeDetail')->name('employee_details_home');

              Route::post('/update_employee_data/{id}', 'EmployeeController@update')->name('update_employee_profile');
              Route::get('/create_employee_home','EmployeeController@employeeHome')->name("create_employee_home");
              
              Route::get('/invoice','InvoiceController@show_invoice')->name('show_invoice');
              Route::post('/create_employee','EmployeeController@create')->name("create_employee");

              Route::get('/tcc_application', 'VerificationController@tax_clearance_app_home')->name('tax_clearance_app_home');
              Route::get('/tcc_apply','TaxClearanceController@index')->name('tax_clearance_certificate_home');


              Route::get('/taxdeductions','TaxDeductionController@index')->name('tax_deduction_card_home');

              Route::post('/create','TaxClearanceController@create')->name('create_tcc');
              Route::get('/witholding_tax', 'WitholdingTaxController@index')->name('witholding_tax_home');
              
              Route::get('/make-payment', 'PaymentController@index')->name('payment_home');
              Route::post('/paynow','InvoiceController@make_payment_now')->name("payment_now");
              Route::get('/payment','PaymentController@generateRRRdemo')->name('pay');

              Route::group(['prefix' => 'exports'], function () {
                Route::get('/monthly/{type}', 'TemplateController@monthly');
                   Route::get('/annual/{type}', 'TemplateController@annual');
                Route::get('/pending/{type}', 'TemplateController@pending');
                Route::get('/taxdeductions/{type}', 'TemplateController@taxdeductions');
                Route::get('/witholding/{type}', 'TemplateController@witholding');
                Route::get('/employee/{type}', 'TemplateController@employee');
            });
          
              
          });


  //Routes Available to only instructor
  Route::group(['prefix' => 'super-admin'], function () {


  });


  Route::get('/logout','Auth\LoginController@logout')->name("logout");
  Route::get('password/expired', 'Auth\ExpiredPasswordController@expired')->name('password.expired');
  Route::get('password/change',[App\Http\Controllers\Auth\ResetPasswordController::class, 'index'] )->name('password.change');
  Route::post('/changePassword',[App\Http\Controllers\Auth\ResetPasswordController::class,'changePassword'])->name('changePassword');
  //Welcome route
  Route::get('/forbidden','HomeController@noAccess')->name("non_access");

  });

  Route::get('/clear-cache', function() {
  $exitCode = Artisan::call('config:clear');
  return $exitCode;
  });
  Route::get('/clear-route', function() {
  $exitCode = Artisan::call('route:clear');
  return $exitCode;
  });

  Route::get('/clear-view', function() {
  $exitCode = Artisan::call('view:clear');
  return $exitCode;
  });







