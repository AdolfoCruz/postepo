<?php

use App\Http\Controllers\Ecommerce\ProviderController;


Route::group(['middleware' => ['role:superadmin']], function () {
    //
    Route::get('/providers',[ProviderController::class,'index'])->middleware(['auth'])->name('provider.index');
    /* Route::get('/category/get-all', [CategoryController::class, 'getCategory'])->middleware(['auth'])->name('products.get');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->middleware(['auth'])->name('products.delete'); //TO: DELETE
    Route::get('/category/editar/{id}', [CategoryControllerroller::class, 'edit'])->middleware(['auth'])->name('products.edit'); //TO: EDIT */

});
//Route::resource('categories', CategoryController::class)->middleware(['auth'])->names('categories')->except(['destroy']);
