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

Route::get('getmodel1', [KendaraanController::class,'getDataModel1']);
Route::get('getmodel2', [KendaraanController::class,'getDataModel2']);
// Route::post('getmodel2', [KendaraanController::class,'getDataModel2']);
Route::get('motors', [MotorController::class,'index']);
Route::get('mobils', [MobilController::class,'index']);
Route::post('kendaraans', [KendaraanController::class,'index']);
Route::get('kendaraans', [KendaraanController::class,'index']);
Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class,'authenticate']);
Route::get('kendaraanAuth', [DataController::class, 'kendaraanAutclearh']);

Route::get('user', [UserController::class,'getAuthenticatedUser']);
Route::group(['middleware' => ['jwt.verify']], function() {
Route::get('kendaraan', [DataController::class, 'kendaraan']);
});