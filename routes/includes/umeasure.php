<?php

use App\Http\Controllers\Ecommerce\UmeasureController;


Route::group(['middleware'=> ['role:superadmin']], function () {
    //
    Route::get('/unidad-de-medida',[UmeasureController::class,'um'])->middleware(['auth'])->name('umeasure.index');

});
