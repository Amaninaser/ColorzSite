<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FullCalenderController;
use App\Http\Controllers\Admin\MunicipalController;
use App\Http\Controllers\Admin\UserSystemController;
use App\Http\Controllers\Admin\UserCenterController;

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

Route::get('/', function () {
    return view('welcome');
});



Route::get('full-calender', [FullCalenderController::class, 'index']);

Route::post('full-calender/action', [FullCalenderController::class, 'action']);
Route::delete('admin/municipal/{id}', [MunicipalController::class, 'destroy']);


Route::namespace('Admin')
    ->prefix('admin')
    ->as('admin.')
    ->group(function() {

Route::resource('municipal','MunicipalController');
Route::resource('user','UserSystemController');
Route::resource('usercenter','UserCenterController');

});



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
