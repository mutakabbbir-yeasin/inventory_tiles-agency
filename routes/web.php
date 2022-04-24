<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BillerController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PurchaseController;


 Route::get('/', function () {
    return view('layout.index');
 });



 //All User routes are here ...................
Route::get('/user-add',[UserController::class, 'create'])->name('user.add-user');
Route::get('/user-list',[UserController::class, 'index'])->name('user.user-list');
Route::get('/user-list-show',[UserController::class, 'show'])->name('show.user.user-list');


//All biller routes are here ...................
Route::get('/biller',[BillerController::class, 'index'])->name('biller.add-biller');
Route::get('/biller/add',[BillerController::class, 'create'])->name('biller.add-biller');
Route::post('/biller/create',[BillerController::class, 'store'])->name('biller.store');
Route::get('/biller/list',[BillerController::class, 'list'])->name('biller.biller-list');
Route::get('biller/edit/{id}',[BillerController::class, 'edit']);
Route::put('biller/update/{id}',[BillerController::class, 'update']);
Route::delete('biller/delete/{id}',[BillerController::class, 'destroy']);
Route::get('biller/show',[BillerController::class, 'show'])->name('show.biller.biller-list');

//All category routes are here ...................
Route::get('/category-add',[CategoryController::class, 'create']);
Route::post('/category-store',[CategoryController::class, 'store']);
Route::get('/category-add',[CategoryController::class, 'index']);
Route::get('/cat-status-active{id}',[CategoryController::class,'Active']);
Route::get('/cat-status-inactive{id}',[CategoryController::class,'Inactive']);
Route::get('edit/categories{id}',[CategoryController::class,'edit']);
Route::put('update/categories/{id}',[CategoryController::class,'update']);
Route::delete('delete-category/{id}', [CategoryController::class, 'destroy']);

//All Supplier routes are here ...................
Route::get('/supplier-add',[SupplierController::class, 'create'])->name('supplier.add-supplier');
Route::get('/supplier-list',[SupplierController::class, 'list'])->name('supplier.supplier-list');
Route::post('/supplier/create',[SupplierController::class, 'store'])->name('supplier.store');
Route::get('supplier/edit/{id}',[SupplierController::class, 'edit']);
Route::put('supplier/update/{id}',[SupplierController::class, 'update']);
Route::delete('supplier/delete/{id}',[SupplierController::class, 'destroy']);


//All Customer routes are here ...................
Route::get('/customer-add',[CustomerController::class, 'create'])->name('customer.add-customer');
Route::get('/customer-list',[CustomerController::class, 'list'])->name('customer.customer-list');
Route::post('/customer/create',[CustomerController::class, 'store'])->name('customer.store');
Route::get('customer/edit/{id}',[CustomerController::class, 'edit']);
Route::put('customer/update/{id}',[CustomerController::class, 'update']);
Route::delete('customer/delete/{id}',[CustomerController::class, 'destroy']);



// Route::get('/customer-list-show',[CustomerController::class, 'show'])->name('show.customer.customer-list');



















//All Purchase routes are here ...................
Route::get('/purchase-add',[PurchaseController::class, 'create'])->name('purchase.add-purchase');
Route::get('/purchase-list',[PurchaseController::class, 'index'])->name('purchase.purchase-list');
Route::get('/purchase-list-return',[PurchaseController::class, 'return'])->name('purchase.purchase-return');
Route::get('/purchase-list-show',[PurchaseController::class, 'show'])->name('show.customer.customer-list');



