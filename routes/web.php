<?php

use App\Http\Controllers\VendorContrller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::group(['prefix'=>'admin','as'=>'admin'],function(){

    Route::group(['prefix'=>'vendor','as'=>'.vendor.'],function(){

        Route::get('/index',[VendorContrller::class,'index'])->name('index');
        Route::get('/create',[VendorContrller::class,'create'])->name('create');
        Route::POST('/store',[VendorContrller::class,'store'])->name('store');
        Route::get('/edit',[VendorContrller::class,'edit']);
        Route::POST('/update',[VendorContrller::class,'update']);
        Route::POST('/delete',[VendorContrller::class,'delete']);


    });
});
