<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\serviceConsumerController;
use App\Http\Controllers\serviceProviderController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\serviceController;

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
Route::get('/admindash',[loginController::class,'adminDashboardPage']);
// Route::get('/dash',[loginController::class,'DashboardPage']);
Route::get('/users',[loginController::class,'UserPage']);
// Route::get('/Consumer',[loginController::class,'ManageServiceConsumerPage']);
// Route::get('/Provider',[loginController::class,'ManageServiceProviderPage']);
Route::get('/logout',[loginController::class,'logoutPage']);
// Route::get('/addSC',[loginController::class,'addSCPage']);
// Route::get('/editProfile/{id}',[loginController::class,'editProfilePage']);

//CURD operation
Route::resource("/serviceConsumer",serviceConsumerController::class);
Route::resource("/serviceProvider",serviceProviderController::class);
Route::resource("/admin",adminController::class);
// Route::resource("/admin/store",adminController::class,'store');
Route::resource("/service",serviceController::class);
