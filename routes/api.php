<?php

use App\Http\Controllers\Ktpcontroller;
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
Route::get('/data',[Ktpcontroller::class,'index']);
Route::post('/data/create',[Ktpcontroller::class,'store']);
Route::get('/data/show{nik}',[Ktpcontroller::class,'show']);
Route::get('/data/update/{nik}',[Ktpcontroller::class,'update']);
Route::get('/data/delete/{nik}',[Ktpcontroller::class,'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
