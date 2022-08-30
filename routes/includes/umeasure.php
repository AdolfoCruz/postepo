<?php

use App\Http\Controllers\Ecommerce\OrdersController;


Route::group(['middleware' => ['role:superadmin']], function () {
    //
    Route::get('/umeasure',[OrdersController::class,'index'])->middleware(['auth'])->name('umeasure.index');
   
});
Route::resource('umeasure', OrdersController::class)->middleware(['auth'])->names('umeasure')->except(['destroy']);
