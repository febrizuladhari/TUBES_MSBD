<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

// Controller Admin
use App\Http\Controllers\AdminController;





// Controller Super Admin




// Controller Staff






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

// Route Admin

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homeadmin', [AdminController::class, 'index'])->name('homeadmin');


Route::get('/itemadmin', function () {
    return view('admin.itemadmin');
});

Route::get('/accshifting', function () {
    return view('admin.accshiftingadmin');
});

Route::get('/accdamaged', function () {
    return view('admin.accdamagedadmin');
});

Route::get('/accincoming', function () {
    return view('admin.accincomingadmin');
});

Route::get('/additem', function () {
    return view('admin.additemadmin');
});

Route::get('/addshifting', function () {
    return view('admin.addshiftingadmin');
});

Route::get('/profileadmin', function () {
    return view('admin.profileadmin');
});








// Route Super Admin
Route::get('/dashboard', function () {
    return view('superadmin.homesuperadmin');
})->middleware('superadmin');

Route::get('/viewBarang', function(){
    return view('superadmin.viewBarang');
});









// Route Staff
Route::get('/itemstaff',function(){
    return view('staff.itemstaff');
});

Route::get('/profilestaff', function(){
    return view('staff.profilestaff');
});










//Routes Login

Route::get('login', 'App\Http\Controllers\LoginController@index')->name('login');
Route::post('proses_login', 'App\Http\Controllers\LoginController@proses_login')->name('proses_login');
Route::get('logout', 'App\Http\Controllers\LoginController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['checklogin:superadmin']], function () {
        Route::resource('superadmin', LoginController::class);
    });
    Route::group(['middleware' => ['checklogin:admin']], function () {
        Route::resource('admin', LoginController::class);
    });
    Route::group(['middleware' => ['checklogin:staff']], function () {
        Route::resource('staff', LoginController::class);
    });
});

