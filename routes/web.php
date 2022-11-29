<?php

use App\Http\Controllers\Admin as ControllersAdmin;
use App\Http\Controllers\Category;
use App\Http\Controllers\Frontend\Category as FrontendCategory;
use App\Http\Controllers\Frontend\Guest;
use App\Http\Controllers\Frontend\Menu as FrontendMenu;
use App\Http\Controllers\Frontend\Reservation as FrontendReservation;
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

    Route::get('/list' , [ControllersAdmin::class , "list"])->name('list');
    Route::get('/create' , [ControllersAdmin::class , "create"])->name('create');
    Route::get('/edit/{id}' , [ControllersAdmin::class , "edit"])->name('edit');
    Route::post('/store' , [ControllersAdmin::class , "store"])->name('store');
    Route::put('/update}' , [ControllersAdmin::class , "update"])->name('update');
    Route::delete('/destroy/{id}' , [ControllersAdmin::class , "destroy"])->name('destroy');

    Route::get("/" , [ControllersAdmin::class , "index"])->name('index');

});



Route::get('/menu',[FrontendMenu::class,'index'])->name('menu.index');

Route::get('/menu/show',[FrontendMenu::class,'show'])->name('menu.show');


Route::get('/',[Guest::class , 'index'])->name('index');


Route::get('/category', [FrontendCategory::class , 'index'])->name('category.index');
Route::get('category/show' , [FrontendCategory::class , 'show'])->name('category.show');


Route::get('/reservation' , [FrontendReservation::class , 'stepOne'])->name('reservation.step.one');

Route::get('/reservation/stepTwo' , [FrontendReservation::class , 'stepTwo'])->name('reservation.step.two');

Route::post('/reservation/step/one/store' , [FrontendReservation::class , 'stepOneStore'])->name('reservation.step.one.store');
Route::post('/reservation/step/two/store' , [FrontendReservation::class , 'stepTwoStore'])->name('reservation.step.two.store');


Route::get('/thank',[Guest::class , 'thankyou'])->name('thankyou');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
