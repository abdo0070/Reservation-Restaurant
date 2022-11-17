<?php

use App\Http\Controllers\Admin as ControllersAdmin;
use App\Http\Controllers\Category;
use App\Http\Controllers\Menu;
use App\Http\Controllers\Reservation;
use App\Http\Controllers\Table;
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


Route::middleware( [ 'auth' , 'AdminMiddleware'])->name('admin.')->prefix('admin')->group(function(){

    Route::get("index" , [ControllersAdmin::class , "index"])->name('index');
    Route::resource("menu",Menu::class);
    //admin.category.index
    Route::resource("category" , Category::class);
    Route::resource("table",Table::class); 
    Route::resource("reservation",Reservation::class );

    Route::get('/', function () {
        return view('welcome');
    });

});

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
