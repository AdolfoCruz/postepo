<?php

use App\Http\Controllers\Company\CompanyController;


Route::group(['middleware' => ['role:superadmin']], function () {
    //
    Route::get('/company',[CompanyController::class,'index'])->middleware(['auth'])->name('index-company');
    Route::get('/company/get-all', [CompanyController::class, 'getCompany'])->middleware(['auth'])->name('products.get');
    Route::get('/company/delete/{id}', [CompanyController::class, 'delete'])->middleware(['auth'])->name('products.delete'); //TO: DELETE
    Route::get('/company/editar/{id}', [CompanyController::class, 'edit'])->middleware(['auth'])->name('products.edit'); //TO: EDIT

});
// Route::resource('company', CompanyController::class)->middleware(['auth'])->names('company')->except(['destroy']);
