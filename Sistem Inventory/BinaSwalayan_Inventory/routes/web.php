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
Route::get('/itemadmin', [AdminController::class, 'showitem'])->name('itemadmin');

Route::get('/itemadmin', function () {
    return view('admin.itemadmin');
})->name('itemadmin');

Route::get('/accshifting', function () {
    return view('admin.accshiftingadmin');
})->name('accshifting');

Route::get('/accdamaged', function () {
    return view('admin.accdamagedadmin');
})->name('accdamageadmin');

Route::get('/accincoming', function () {
    return view('admin.accincomingadmin');
})->name('accincoming');

Route::get('/additem', function () {
    return view('admin.additemadmin');
})->name('additem');

Route::get('/addshifting', function () {
    return view('admin.addshiftingadmin');
})->name('addshifting');

Route::get('/profileadmin', function () {
    return view('admin.profileadmin');
})->name('profileadmin');


// Route Super Admin
Route::get('/dashboard', function () {
    return view('superadmin.homesuperadmin');
})->middleware('superadmin')->name('dashboard');

Route::get('/viewBarang', function(){
    return view('superadmin.viewBarang');
})->name('viewbarang');


// Route Staff
Route::get('/itemstaff',function(){
    return view('staff.itemstaff');
})->name('itemstaff');

Route::get('/profilestaff', function(){
    return view('staff.profilestaff');
})->name('profilestaff');

Route::get('/adddamagedstaff', function(){
    return view('staff.adddamagedstaff');
})->name('adddamagedstaff');

Route::get('reqitemstaff', function(){
    return view('staff.reqitemstaff');
})->name('reqitemstaff');


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
