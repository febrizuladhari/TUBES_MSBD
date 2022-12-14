<?php

use Illuminate\Support\Facades\Route;

// Controller Login & Register
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

// Controller Update Profile & Pasword All User
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PasswordController;

use App\Http\Controllers\PdfController;
// Controller Super Admin
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\LogController;
use App\Http\Controllers\PrintController;

// Controller Admin
use App\Http\Controllers\AdminController;

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

        Route::get('/itemsuperadmin', [SuperAdminController::class, 'showitem'])->name('itemsuperadmin');

        Route::get('/accounts', [SuperAdminController::class, 'showAllAccounts'])->name('accounts_show');

        Route::get('/register', [RegisterController::class, 'index'])->name('register_account');
        Route::get('/register/create', [RegisterController::class, 'store'])->name('accounts_create');

        Route::get('/accshifting_sa', function () {
            return view('superadmin.accshiftingsuperadmin');
        })->name('accshifting_sa');

        Route::get('/accdamaged_sa', function () {
            return view('superadmin.accdamagedsuperadmin');
        })->name('accdamaged_sa');

        Route::get('/accincoming_sa', function () {
            return view('superadmin.accincomingsuperadmin');
        })->name('accincoming_sa');

        Route::get('/listperbaikan_sa', function () {
            return view('superadmin.listrusaksuperadmin');
        })->name('listrusaksuperadmin');

        Route::get('/lostitem_sa', function () {
            return view('superadmin.lostitemsuperadmin');
        })->name('lostitemsuperadmin');

        Route::get('/printitem_sa', function () {
            return view('superadmin.printsuperadmin');
        })->name('printsuperadmin');

        Route::get('cetaklistbarang_sa', [PdfController::class, 'cetakListBarang']);
        Route::get('cetaklaporanrusak_sa', [PdfController::class, 'cetakLaporanRusak']);
        Route::get('cetakrequestbeli_sa', [PdfController::class, 'cetakRequestBeli']);
        Route::get('cetakrequestperpindahan_sa', [PdfController::class, 'cetakRequestPerpindahan']);
        Route::get('cetakqrcodebarang_sa', [PdfController::class, 'cetakQrCodeBarang']);

        Route::get('/qritem_sa', function () {
            return view('superadmin.qritemsuperadmin');
        })->name('qritem_sa');

        Route::get('/exportlistbarang_sa', [SuperAdminController::class, 'exportListBarang']);
        Route::get('/exportlogupdatebarang_sa', [SuperAdminController::class, 'exportLogUpdateBarang']);
        Route::get('/exportlogdeletebarang_sa', [SuperAdminController::class, 'exportLogDeleteBarang']);
        Route::get('/exportlogupdateuser_sa', [SuperAdminController::class, 'exportLogUpdateUser']);
        Route::get('/exportlogdeleteuser_sa', [SuperAdminController::class, 'exportLogDeleteUser']);

        Route::get('/logupdateitems', [LogController::class, 'showLogUpdateBarang'])->name('logupdatebarang');

        Route::get('/logdeleteitems', [LogController::class, 'showLogDeleteBarang'])->name('logdeletebarang');

        Route::get('/logupdateusers', [LogController::class, 'showLogUpdateUser'])->name('logupdateuser');

        Route::get('/logdeleteusers', [LogController::class, 'showLogDeleteUser'])->name('logdeleteuser');

        Route::get('/historyitem_sa', [LogController::class, 'historyitem'])->name('historyitem_sa');

        Route::get('/additem_sa', [SuperAdminController::class, 'formInsertItem'])->name('additem_sa.edit');

        Route::get('/editenvironment', [SuperAdminController::class, 'editEnvironment'])->name('editenvironment');

        Route::get('/addkategori_sa/edit', [SuperAdminController::class, 'formInsertKategori'])->name('addkategori_sa.edit');
        Route::post('/addkategori_sa/insert', [SuperAdminController::class, 'insertKategori'])->name('addkategori_sa.insert');
        Route::get('/editkategori_sa/edit', [SuperAdminController::class, 'formEditKategori'])->name('editkategori_sa.edit');

        Route::get('/addsupplier_sa/edit', [SuperAdminController::class, 'formInsertSupplier'])->name('addsupplier_sa.edit');
        Route::post('/addsupplier_sa/insert', [SuperAdminController::class, 'insertSupplier'])->name('addsupplier_sa.insert');
        Route::get('/editsupplier_sat/edit', [SuperAdminController::class, 'formEditSupplier'])->name('editsupplier_sa.edit');

        Route::get('/addrack_sa/edit', [SuperAdminController::class, 'formInsertRack'])->name('addrack_sa.edit');
        Route::post('/addrack_sa/insert', [SuperAdminController::class, 'insertRack'])->name('addrack_sa.insert');
        Route::get('/editrack_sa/edit', [SuperAdminController::class, 'formEditRack'])->name('editrack_sa.edit');

        Route::get('/addoutlet_sa/edit', [SuperAdminController::class, 'formInsertOutlet'])->name('addoutlet_sa.edit');
        Route::post('/addoutlet_sa/insert', [SuperAdminController::class, 'insertOutlet'])->name('addoutlet_sa.insert');
        Route::get('/editoutlet_sa/edit', [SuperAdminController::class, 'formEditOutlet'])->name('editoutlet_sa.edit');
        Route::get('/outletsuperadmin', [SuperAdminController::class, 'formEditOutlet'])->name('outletsuperadmin');


        Route::get('/addwarehouse_sa/edit', [SuperAdminController::class, 'formInsertWarehouse'])->name('addwarehouse_sa.edit');
        Route::post('/addwarehouse_sa/insert', [SuperAdminController::class, 'insertWarehouse'])->name('addwarehouse_sa.insert');
        Route::get('/editwarehouse_sa/edit', [SuperAdminController::class, 'formEditWarehouse'])->name('editwarehouse_sa.edit');


        Route::get('/printbarang_sa', [PrintController::class, 'printBarang'])->name('printbarang_sa');
        Route::get('/printbarangpdf_sa/{startDate}/{endDate}', [PrintController::class, 'printBarangPdf'])->name('printbarangpdf_sa');

        Route::get('/printkategori_sa', [PrintController::class, 'printKategori'])->name('printkategori_sa');
        Route::get('/printkategoripdf_sa/{startDate}/{endDate}', [PrintController::class, 'printKategoriPdf'])->name('printkategoripdf_sa');

        Route::get('/printsupllier_sa', [PrintController::class, 'printSupplier'])->name('printsupllier_sa');
        Route::get('/printsupplierpdf_sa/{startDate}/{endDate}', [PrintController::class, 'printSupplierPdf'])->name('printsupplierpdf_sa');

        Route::get('/printfinishrepair_sa', [PrintController::class, 'printFinishRepair'])->name('printfinishrepair_sa');
        Route::get('/printfinishrepairpdf_sa/{startDate}/{endDate}', [PrintController::class, 'printFinishRepairPdf'])->name('printfinishrepairpdf_sa');

        Route::get('/printlostitem_sa', [PrintController::class, 'printLostItem'])->name('printlostitem_sa');
        Route::get('/printlostitempdf_sa/{startDate}/{endDate}', [PrintController::class, 'printLostItemPdf'])->name('printlostitempdf_sa');

        Route::get('/printaccshifting_sa', [PrintController::class, 'printAccShifting'])->name('printaccshifting_sa');
        Route::get('/printaccshiftingpdf_sa/{startDate}/{endDate}', [PrintController::class, 'printAccShiftingPdf'])->name('printaccshiftingpdf_sa');

        Route::get('/printaccdamaged_sa', [PrintController::class, 'printAccDamaged'])->name('printaccdamaged_sa');
        Route::get('/printaccdamagedpdf_sa/{startDate}/{endDate}', [PrintController::class, 'printAccDamagedPdf'])->name('printaccdamagedpdf_sa');

        Route::get('/printaccincoming_sa', [PrintController::class, 'printAccIncoming'])->name('printaccincoming_sa');
        Route::get('/printaccincomingpdf_sa/{startDate}/{endDate}', [PrintController::class, 'printAccIncomingPdf'])->name('printaccincomingpdf_sa');

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

        Route::get('/historyitem', [LogController::class, 'historyitem'])->name('historyitem');

        Route::get('/accshifting', function () {
            return view('admin.accshiftingadmin');
        })->name('accshifting');

        Route::get('/accdamaged', function () {
            return view('admin.accdamagedadmin');
        })->name('accdamaged');

        Route::get('/accincoming', function () {
            return view('admin.accincomingadmin');
        })->name('accincoming');

        Route::get('/listperbaikan', function () {
            return view('admin.listrusakadmin');
        })->name('listrusakadmin');

        Route::get('/lostitem', function () {
            return view('admin.lostitemadmin');
        })->name('lostitemadmin');

        Route::get('/printitem', function () {
            return view('admin.printadmin');
        })->name('printadmin');

        Route::get('cetaklistbarang', [PdfController::class, 'cetakListBarang']);
        Route::get('cetaklaporanrusak', [PdfController::class, 'cetakLaporanRusak']);
        Route::get('cetakrequestbeli', [PdfController::class, 'cetakRequestBeli']);
        Route::get('cetakrequestperpindahan', [PdfController::class, 'cetakRequestPerpindahan']);
        Route::get('cetakqrcodebarang', [PdfController::class, 'cetakQrCodeBarang']);

        Route::get('/qritem', function () {
            return view('admin.qritemadmin');
        })->name('qritem');

        Route::get('exportlistbarang', [AdminController::class, 'exportListBarang']);

        Route::get('/printbarang', [PrintController::class, 'printBarang'])->name('printbarang');
        Route::get('/printbarangpdf/{startDate}/{endDate}', [PrintController::class, 'printBarangPdf'])->name('printbarangpdf');

        Route::get('/printkategori', [PrintController::class, 'printKategori'])->name('printkategori');
        Route::get('/printkategoripdf/{startDate}/{endDate}', [PrintController::class, 'printKategoriPdf'])->name('printkategoripdf');

        Route::get('/printsupllier', [PrintController::class, 'printSupplier'])->name('printsupllier');
        Route::get('/printsupplierpdf/{startDate}/{endDate}', [PrintController::class, 'printSupplierPdf'])->name('printsupplierpdf');

        Route::get('/printfinishrepair', [PrintController::class, 'printFinishRepair'])->name('printfinishrepair');
        Route::get('/printfinishrepairpdf/{startDate}/{endDate}', [PrintController::class, 'printFinishRepairPdf'])->name('printfinishrepairpdf');

        Route::get('/printlostitem', [PrintController::class, 'printLostItem'])->name('printlostitem');
        Route::get('/printlostitempdf/{startDate}/{endDate}', [PrintController::class, 'printLostItemPdf'])->name('printlostitempdf');

        Route::get('/printaccshifting', [PrintController::class, 'printAccShifting'])->name('printaccshifting');
        Route::get('/printaccshiftingpdf/{startDate}/{endDate}', [PrintController::class, 'printAccShiftingPdf'])->name('printaccshiftingpdf');

        Route::get('/printaccdamaged', [PrintController::class, 'printAccDamaged'])->name('printaccdamaged');
        Route::get('/printaccdamagedpdf/{startDate}/{endDate}', [PrintController::class, 'printAccDamagedPdf'])->name('printaccdamagedpdf');

        Route::get('/printaccincoming', [PrintController::class, 'printAccIncoming'])->name('printaccincoming');
        Route::get('/printaccincomingpdf/{startDate}/{endDate}', [PrintController::class, 'printAccIncomingPdf'])->name('printaccincomingpdf');


    });

    // Middleware Staff
    Route::group(['middleware' => ['checklogin:staff']], function () {
        Route::resource('staff', LoginController::class);

        Route::get('/homestaff', [StaffController::class, 'index'])->name('homestaff');
        Route::get('/homestaff', [StaffController::class, 'chartStaff']);

        Route::get('/itemstaff',function(){
            return view('staff.itemstaff');
        })->name('itemstaff');

        Route::get('/adddamagedstaff', function(){
            return view('staff.adddamagedstaff');
        })->name('adddamagedstaff');

        Route::get('/addloststaff', function(){
            return view('staff.addloststaff');
        })->name('addloststaff');

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
