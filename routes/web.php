<?php

use App\Http\Controllers\LogEventController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('lang/{lang}',function($lang){
    session(['lang'=>$lang]);
    return back();
})->name('lang');

Route::middleware('role:SuperAdmin','auth')->group(function(){
    Route::resource('/admins',UserController::class);
    Route::resource('/order',OrderController::class);
    Route::resource('/logevent',LogEventController::class);

});

Route::middleware('role:Admin|SuperAdmin','auth')->group(function(){
    Route::get('/index',function(){return view('admin.layouts.main');})->name('index');
    Route::resource('/order',OrderController::class);
    Route::get('/myOrder',[OrderController::class,'myOrder'])->name('myOrder');
});




require __DIR__.'/auth.php';
