<?php

use App\Http\Controllers\Ecommerce\UmeasureController;


Route::group(['middleware'=> ['role:superadmin']], function () {
    //
    Route::get('/unidad-de-medida',[UmeasureController::class,'index'])->middleware(['auth'])->name('umeasure.index');
    Route::get('/unitmeasure/get-all', [UmeasureController::class, 'getUmeasure'])->middleware(['auth'])->name('unitmeasure.get');
    Route::get('/unitmeasure/delete/{id}', [UmeasureController::class, 'delete'])->middleware(['auth'])->name('unitmeasure.delete'); //TO: DELETE
    Route::get('/unitmeasure/editar/{id}', [UmeasureController::class, 'edit'])->middleware(['auth'])->name('unitmeasure.edit'); //TO: EDIT

});
Route::resource('unidad-de-medida', UmeasureController::class)->middleware(['auth'])->names('umeasure')->except(['destroy']);
