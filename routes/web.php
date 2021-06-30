<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TwoPhaseVerificationController;
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
//All the Pages Routes
Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/register', [PageController::class, 'register'])->name('register');

Route::get('/login', [PageController::class, 'login'])->name('login');

//Registration Route
Route::post('/register', [RegisterController::class, 'registerUser'])->name('registerUser');

//Login Route
Route::post('/login', [LoginController::class, 'loginUser'])->name('loginUser');


Route::get('/logout', [TwoPhaseVerificationController::class, 'logout'])->name('logout');	



Route::group(['middleware' => ['auth']], function(){

	Route::get('/security-code', [PageController::class, 'securityCode'])->name('securityCode');

	//Two Phase Verification Route
	Route::post('/verify-security-key', [TwoPhaseVerificationController::class, 'verifySecurityKey'])
			->name('verifySecurityKey');

	Route::get('/dashboard', [PageController::class, 'dashboard'])->name('dashboard')->middleware('2fa');
});



	






