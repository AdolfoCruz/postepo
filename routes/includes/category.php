<?php

use App\Http\Controllers\Ecommerce\CategoryController;


Route::group(['middleware' => ['role:superadmin']], function () {
    //
    Route::get('/categories',[CategoryController::class,'index'])->middleware(['auth'])->name('index-categories');
    Route::get('/category/get-all', [CategoryController::class, 'getCategory'])->middleware(['auth'])->name('products.get');
    Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->middleware(['auth'])->name('products.delete'); //TO: DELETE
    Route::get('/category/editar/{id}', [CategoryControllerroller::class, 'edit'])->middleware(['auth'])->name('products.edit'); //TO: EDIT

});
Route::resource('distribuidores', DistribuidorController::class)->middleware(['auth'])->names('distribuidores')->except(['destroy']);
