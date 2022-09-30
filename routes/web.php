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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/',[\App\Http\Controllers\PoliController::class,'index'])->name('home');

Route::get('/print',[\App\Http\Controllers\ScheduleController::class,'print'])->name('print');
Route::get('poli/destroy/{id}',[\App\Http\Controllers\PoliController::class,'destroy'])->name('poliDestroy');
Route::resource('poli',\App\Http\Controllers\PoliController::class);

Route::get('employee/destroy/{id}',[\App\Http\Controllers\EmployeeController::class,'destroy'])->name('employeeDestroy');
Route::resource('employee',\App\Http\Controllers\EmployeeController::class);

Route::get('/set/employeePoli/{id}',[\App\Http\Controllers\ScheduleController::class,'setEmployee'])->name('setEmployee');
Route::get('/set/SetSchedule/{id}',[\App\Http\Controllers\ScheduleController::class,'SetSchedule'])->name('SetSchedule');

Route::get('/setEdit/SetSchedule/{id}/{schedule_id}',[\App\Http\Controllers\ScheduleController::class,'editSetSchedule'])->name('editSetSchedule');
Route::get('/setDestroy/SetSchedule/{id}',[\App\Http\Controllers\ScheduleController::class,'destroySetSchedule'])->name('destroySetSchedule');

Route::post('/actionSet/update/SetSchedule/{employee_poli_id}/{schedule_id}',[\App\Http\Controllers\ScheduleController::class,'actionUpdateSetSchedule'])->name('actionUpdateSetSchedule');
Route::post('/actionSet/SetSchedule/{id}',[\App\Http\Controllers\ScheduleController::class,'actionSetSchedule'])->name('actionSetSchedule');

Route::post('/actionSet/employeePoli/{id}',[\App\Http\Controllers\ScheduleController::class,'actionSet'])->name('actionSet');
Route::get('/destroy/employeePoli/{id}',[\App\Http\Controllers\ScheduleController::class,'destroySetEmployee'])->name('destroySetEmployee');

Route::resource('schedule',\App\Http\Controllers\ScheduleController::class);
