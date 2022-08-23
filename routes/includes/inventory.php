<?php

use App\Http\Controllers\Ecommerce\InventoryController;


Route::group(['middleware' => ['role:superadmin']], function () {
    //
    Route::get('/inventory',[InventoryController::class,'index'])->middleware(['auth'])->name('inventory.index');
   
});
Route::resource('inventory', InventoryController::class)->middleware(['auth'])->names('inventory')->except(['destroy']);
