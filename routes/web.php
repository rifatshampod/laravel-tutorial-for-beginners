<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\homeController;
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

// Route::get('/', function () {
//     return view('home');
// });

// Route::view('/', 'home');

//Route::view('about-us', 'about'); 

Route::get('about-us', [aboutController::class , 'about']);

Route::get('contact-us', [aboutController::class , 'contact']);



Route::view('admin', 'adminPage');

//Controller based route

Route::get('/', [homeController::class, 'homeFunction']);

//get = send from controller to view. 

//Contact form submission
Route::post('contact-form', [contactController::class, 'getContact']);

// Route::get('data', [contactController::class, 'getAllContact']);

Route::get('all-contact', [contactController::class, 'getAllContact']);


//post = send from view to controller


// Route::get('part 1', 'part 2);
//part 1 = name of the link/ url
//part 2 = file directory/ name of the view