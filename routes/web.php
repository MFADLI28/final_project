<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardReportController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\WeeklyController;
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

//Route::get('/dashboard', function () {return view('dashboard');});

Route::get('/dashboard', [DashboardReportController::class,'index']);
Route::get('/report', [ReportController::class,'index']);
Route::get('/create_report', [ReportController::class,'create']);
Route::get('/create',[WeeklyController::class,'index']);
Route::get('/upload',[UploadController::class,'index']);



