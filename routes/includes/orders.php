<?php

use App\Http\Controllers\Ecommerce\OrdersController;


Route::group(['middleware' => ['role:superadmin']], function () {
    //
    Route::get('/orders',[OrdersController::class,'index'])->middleware(['auth'])->name('orders.index');
   
});
Route::resource('orders', OrdersController::class)->middleware(['auth'])->names('orders')->except(['destroy']);
