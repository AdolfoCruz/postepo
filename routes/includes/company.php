<?php

use App\Http\Controllers\Company\CompanyController;


Route::group(['middleware' => ['role:superadmin']], function () {
    //
    Route::get('/company',[CompanyController::class,'index'])->middleware(['auth'])->name('index-company');
    Route::get('/category/get-all', [CompanyController::class, 'getCategory'])->middleware(['auth'])->name('products.get');
    Route::get('/category/delete/{id}', [CompanyController::class, 'delete'])->middleware(['auth'])->name('products.delete'); //TO: DELETE
    Route::get('/category/editar/{id}', [CompanyController::class, 'edit'])->middleware(['auth'])->name('products.edit'); //TO: EDIT

});
Route::resource('distribuidores', DistribuidorController::class)->middleware(['auth'])->names('distribuidores')->except(['destroy']);
