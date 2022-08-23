<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

require __DIR__.'/includes/general.php';

require __DIR__.'/includes/purchases.php';

require __DIR__.'/includes/inventory.php';

require __DIR__.'/includes/orders.php';

require __DIR__.'/includes/category.php';

require __DIR__.'/includes/history.php';

require __DIR__.'/includes/company.php';

require __DIR__.'/includes/user.php';

require __DIR__.'/includes/brand.php';

require __DIR__.'/includes/provider.php';

require __DIR__.'/includes/umeasure.php';
