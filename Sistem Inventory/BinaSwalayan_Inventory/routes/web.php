<?php

use Illuminate\Support\Facades\Route;

// Controller Login & Register
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Controller Update Profile & Pasword All User
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;

// Controller Admin
use App\Http\Controllers\AdminController;

// Controller Super Admin
use App\Http\Controllers\SuperAdminController;
use App\Http\Livewire\SuperAdmin\AccountsShow;
use App\Http\Livewire\SuperAdmin\AccountsEdit;




// Controller Staff
use App\Http\Controllers\StaffController;










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

//Routes Login

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('proses_login', [LoginController::class, 'proses_login'])->name('proses_login');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
Route::post('store', [RegisterController::class, 'store'])->name('store');

Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

Route::get('/changepassword', [PasswordController::class, 'edit'])->name('changepassword.edit');
Route::patch('/changepassword', [PasswordController::class, 'update'])->name('changepassword.update');

Route::group(['middleware' => ['auth']], function () {

    // Middleware Superadmin
    Route::group(['middleware' => ['checklogin:superadmin']], function () {
        Route::resource('superadmin', LoginController::class);
        Route::resource('superadmin', RegisterController::class);

        Route::get('/homesuperadmin', [SuperAdminController::class, 'index'])->name('homesuperadmin');
        Route::get('/homesuperadmin', [SuperAdminController::class, 'chartSuperAdmin']);

        // Route::get('/accounts', function(){
        //     return view('superadmin.accounts');
        // })->name('accounts_show');

        Route::get('/accounts', [SuperAdminController::class, 'showAllAccounts'])->name('accounts_show');

        Route::get('/register', [RegisterController::class, 'index'])->name('register_account');
        Route::get('/register/create', [RegisterController::class, 'store'])->name('accounts_create');

        Route::get('/addshifting_sa', function () {
            return view('superadmin.addshiftingsuperadmin');
        })->name('addshifting_sa');

        Route::get('/additem_sa', [SuperAdminController::class, 'formInsertItem'])->name('additem_sa.edit');
        // Route::post('/additem_sa', [SuperAdminController::class, 'insertItem'])->name('additem_sa.insert');

        Route::get('/addkategori_sa/edit', [SuperAdminController::class, 'formInsertKategori'])->name('addkategori_sa.edit');
        Route::post('/addkategori_sa/insert', [SuperAdminController::class, 'insertKategori'])->name('addkategori_sa.insert');

        Route::get('/addsupplier_sa/edit', [SuperAdminController::class, 'formInsertSupplier'])->name('addsupplier_sa.edit');
        Route::post('/addsupplier_sa/insert', [SuperAdminController::class, 'insertSupplier'])->name('addsupplier_sa.insert');

        Route::get('/addrack_sa/edit', [SuperAdminController::class, 'formInsertRack'])->name('addrack_sa.edit');
        Route::post('/addrack_sa/insert', [SuperAdminController::class, 'insertRack'])->name('addrack_sa.insert');

        Route::get('/addoutlet_sa/edit', [SuperAdminController::class, 'formInsertOutlet'])->name('addoutlet_sa.edit');
        Route::post('/addoutlet_sa/insert', [SuperAdminController::class, 'insertOutlet'])->name('addoutlet_sa.insert');

        Route::get('/addwarehouse_sa/edit', [SuperAdminController::class, 'formInsertWarehouse'])->name('addwarehouse_sa.edit');
        Route::post('/addwarehouse_sa/insert', [SuperAdminController::class, 'insertWarehouse'])->name('addwarehouse_sa.insert');

    });


    // Middleware Admin
    Route::group(['middleware' => ['checklogin:admin']], function () {
        Route::resource('admin', LoginController::class);

        Route::get('/homeadmin', [AdminController::class, 'index'])->name('homeadmin');
        Route::get('/homeadmin', [AdminController::class, 'chartAdmin']);
        Route::get('/itemadmin', [AdminController::class, 'showitem'])->name('itemadmin');

        Route::get('/additem', [AdminController::class, 'formInsertItem'])->name('additem.edit');
        Route::post('/additem', [AdminController::class, 'insertItem'])->name('additem.insert');

        Route::get('/addkategori/edit', [AdminController::class, 'formInsertKategori'])->name('addkategori.edit');
        Route::post('/addkategori/insert', [AdminController::class, 'insertKategori'])->name('addkategori.insert');

        Route::get('/addsupplier/edit', [AdminController::class, 'formInsertSupplier'])->name('addsupplier.edit');
        Route::post('/addsupplier/insert', [AdminController::class, 'insertSupplier'])->name('addsupplier.insert');

        Route::get('/addrack/edit', [AdminController::class, 'formInsertRack'])->name('addrack.edit');
        Route::post('/addrack/insert', [AdminController::class, 'insertRack'])->name('addrack.insert');


        Route::get('/accshifting', function () {
            return view('admin.accshiftingadmin');
        })->name('accshifting');

        Route::get('/accdamaged', function () {
            return view('admin.accdamagedadmin');
        })->name('accdamaged');

        Route::get('/accincoming', function () {
            return view('admin.accincomingadmin');
        })->name('accincoming');

        Route::get('/addshifting', function () {
            return view('admin.addshiftingadmin');
        })->name('addshifting');

    });

    // Middleware Staff
    Route::group(['middleware' => ['checklogin:staff']], function () {
        Route::resource('staff', LoginController::class);

        Route::get('/homestaff',function(){
            return view('staff.homestaff');
        })->name('homestaff');

        Route::get('/itemstaff',function(){
            return view('staff.itemstaff');
        })->name('itemstaff');

        Route::get('/adddamagedstaff', function(){
            return view('staff.adddamagedstaff');
        })->name('adddamagedstaff');

        Route::post('storeAddDamage', [StaffController::class, 'storeAddDamage'])->name('storeAddDamage');

        Route::get('reqitemstaff', function(){
            return view('staff.reqitemstaff');
        })->name('reqitemstaff');

        Route::get('reqbelistaff', function(){
            return view('staff.reqbelistaff');
        })->name('reqbelistaff');

        Route::get('listpinjamstaff', function(){
            return view('staff.listpinjamstaff');
        })->name('listpinjamstaff');


        Route::post('storeReqBuy', [StaffController::class, 'storeReqBuy'])->name('storeReqBuy');
    });

});
