<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\serviceConsumerController;
use App\Http\Controllers\serviceProviderController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\serviceController;
use App\Http\Controllers\Auth\ForgotPasswordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/d', function () {
//     return view('adminDashboard');
// });

Route::get('/',[loginController::class,'loginPage']);
// Route::get('/admindash',[loginController::class,'adminDashboardPage']);
Route::get('/admindash',[loginController::class,'adminDashboardPage'])->middleware('userValid');
// Route::get('/dash',[loginController::class,'DashboardPage']);
Route::get('/users',[loginController::class,'UserPage']);
// Route::get('/Consumer',[loginController::class,'ManageServiceConsumerPage']);
// Route::get('/Provider',[loginController::class,'ManageServiceProviderPage']);
Route::get('/feedback',[loginController::class,'feedBack']);
Route::get('/add-admin',[loginController::class,'addAdmin']);
Route::get('/logout',[loginController::class,'logoutPage']);


Route::get('/forgotPassword',[loginController::class,'forgotPasswordPage']);
Route::post('/forgot-password', [loginController::class,'sendResetLinkEmail'])->name('password.email');
Route::get('password/reset/{token}', [loginController::class,'showResetForm'])->name('password.reset');
Route::post('/Update-password', [loginController::class,'updatePassword'])->name('password.update');
// Route::get('/addSC',[loginController::class,'addSCPage']);
// Route::get('/editProfile/{id}',[loginController::class,'editProfilePage']);

//CURD operation
Route::resource("/serviceConsumer",serviceConsumerController::class);
Route::resource("/serviceProvider",serviceProviderController::class);
Route::resource("/admin",adminController::class);
// Route::resource("/admin/store",adminController::class,'store');
Route::resource("/service",serviceController::class);

Route::get('/chart',[loginController::class,'chart']);
