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

// Route Admin

Route::get('/', function () {
    return view('welcome');
});

Route::get('/adminhome', function () {
    return view('admin.homeadmin');
});

Route::get('/item', function () {
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
});

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











