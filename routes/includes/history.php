<?php

use App\Http\Controllers\Ecommerce\PriceHistoryController;


Route::group(['middleware' => ['role:superadmin']], function () {
    //
    Route::get('/history',[PriceHistoryController::class,'index'])->middleware(['auth'])->name('history.index');
   
});
Route::resource('history', PriceHistoryController::class)->middleware(['auth'])->names('history')->except(['destroy']);
