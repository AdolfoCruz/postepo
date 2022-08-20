<?php

use App\Http\Controllers\Ecommerce\RegisterPurchasesController;


Route::group(['middleware' => ['role:superadmin']], function () {
    //
    Route::get('/purchases',[RegisterPurchasesController::class,'index'])->middleware(['auth'])->name('purchases.index');
   
});
Route::resource('purchases', RegisterPurchasesController::class)->middleware(['auth'])->names('purchases')->except(['destroy']);
