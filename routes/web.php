<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\PharmacyPurchaseStockController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\SlipCategoryController;
use App\Http\Controllers\SlipController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/hamza', [PharmacyPurchaseStockController::class , 'deletedfunction']);
// Route::get('/slip-num-rename', [PharmacyPurchaseStockController::class , 'slipDate']);

Route::get('/', function () {
    return view('auth.login');
})->name('admin.login');

Route::get('/users/filter', [HomeController::class, 'filterUsers'])->name('filterUsers');


Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {


    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::get('/admin/profile', [HomeController::class, 'userprofile'])->name('admin.profile');
    Route::post('/change-password', [HomeController::class, 'updatePassword'])->name('adminupdate-password');

    Route::prefix('admin')->group(function () {
        Route::resource('doctors', DoctorController::class);
        // Route::resource('pharmacy', PharmacyController::class);
        Route::resource('slipcategory', SlipCategoryController::class);
        Route::resource('slip', SlipController::class);
        Route::resource('sale', SaleController::class);
        Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('admindashboard.index');
        // Route::get('add-purchase-stock', [PharmacyPurchaseStockController::class, 'index'])->name('purchasestock.index');
        Route::get('token-reports', [ReportsController::class, 'index'])->name('slipreport.index');
        Route::get('token-reports-search', [ReportsController::class, 'searchCustomers'])->name('tokenreports.values');
        // Route::post('add-purchase-stock', [PharmacyPurchaseStockController::class, 'store'])->name('purchasestock.store');
        Route::get('/slip/edit/{id}', [PharmacyPurchaseStockController::class, 'print'])->name('slip.print');
    });
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'managerHome'])->name('manager.home');
});
