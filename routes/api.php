<?php

use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\MotorController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// // Route::resource('Kendaraans', KendaraanController::class);
// Route::resource('motors', MotorController::class);
// Route::resource('mobils', MobilController::class);
Route::resource('kendaraans', KendaraanController::class);
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class,'authenticate']);
Route::get('kendaraanAuth', [DataController::class, 'kendaraanAuth']);

Route::get('user', [UserController::class,'getAuthenticatedUser']);
Route::group(['middleware' => ['jwt.verify']], function() {
Route::get('kendaraan', [DataController::class, 'kendaraan']);
});