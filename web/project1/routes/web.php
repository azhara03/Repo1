<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Contollers\MainController;
use  App\Http\Contollers\LoginController;
use  App\Http\Contollers\RegisterController;
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

//Route::view('/', 'welcome');

Route::get('/review', [MainController::class,'review']);

Route::post('/review/check', [MainConroller::class,'review_check']);

Route::name('user.')->group(function(){ 
    Route::view('/private','private')->middleware(middleware: 'auth')->name(name: 'private');
    
    //Route::view('/private', 'private')->middleware( middleware 'auth')->name( name 'private');
    Route::get('/', [MainConroller::class,'home']);

    Route::get('/login', function(){
        if(Auth::check()){
            return redirect(route( name: 'user.private'));
        }
        return view( view: 'login');
    })->name(name: 'login');

    Route::post('/login', [LoginController::class,'login']);

    Route::get('/logout',  action: 'MainConroller@logout')->name(name: 'logout');

    Route::get('/registration', function() {
        if(Auth::check()){
            return redirect(route(name: 'user.private'));
        }
    return view( view: 'registration');
    })->name(name: 'registration');
 
    Route::post('/registration', [RegisterController::class,'save']);
    //Route::post('/registration', [\App\Http\Controllers\RegisterController::class, 'save']);
});



