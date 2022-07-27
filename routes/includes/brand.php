<?php

use App\Http\Controllers\Ecommerce\BrandController;


Route::group(['middleware' => ['role:superadmin']], function () {
    //
    Route::get('/brands',[BrandController::class,'index'])->middleware(['auth'])->name('brands.index');
    Route::get('/brand/get-all', [BrandController::class, 'getBrand'])->middleware(['auth'])->name('brands.get');
    Route::get('/brand/delete/{id}', [BrandController::class, 'delete'])->middleware(['auth'])->name('brands.delete'); //TO: DELETE
    Route::get('/brand/editar/{id}', [BrandController::class, 'edit'])->middleware(['auth'])->name('brands.edit'); //TO: EDIT

});
Route::resource('brands', BrandController::class)->middleware(['auth'])->names('brands')->except(['destroy']);
