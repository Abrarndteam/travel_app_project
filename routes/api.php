<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\Controller;
use App\Http\Controller\FController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


                            // User Controller functions Routes


Route::post('/registerUser', [Controller::class,'']);


Route::post('/loginUser', [Controller::class,'']);


Route::post('/logoutUser', [Controller::class,''])->name('logoutUser');


Route::get('/profileuser', [Controller::class,'']);


Route::get('/searchUser', [Controller::class,'']);


                                // File Controller functions Routes


Route::post("/",[FController::class,'upload']);


Route::get('',[FController::class,'list']);


Route::get('/',[FController::class,'delivery']);


Route::get('/',[FController::class,'Single']);


Route::get('/',[FController::class,'Posts']);
