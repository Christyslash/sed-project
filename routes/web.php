<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\ProjetController;
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

Route::post('/oauth/redirect/{driver}', [SocialiteController::class, 'redirect'])->name('oauth.redirect');
Route::get('/oauth/callback/{driver}', [SocialiteController::class, 'callback'])->name('oauth.callback');


    Route::get('/about',[AppController::class,'about'])->name('about');
    Route::get('/',[AppController::class,'index'])->name('home');
Route::get('/services',[AppController::class,'service'])->name('service');
Route::get('/projets',[AppController::class,'projet'])->name('projet');
Route::get('/volontaire',[AppController::class,'volontaire'])->name('volontaire');
Route::get('/dons',[AppController::class,'dons'])->name('dons');
Route::get('/contact',[AppController::class,'contact'])->name('contact');
Route::get('/contribution',[AppController::class,'contribution'])->name('contribution');
Route::post('/projects/save',[ProjetController::class,'save'])->name('addproject');
Route::get('/projects/new',[ProjetController::class,'new'])->name('newproject');
Route::post('/projects/new',[ProjetController::class,'newprojectsave'])->name('newproject');
Route::get('/projets/paid',[ProjetController::class,'paidc'])->name('paid');




Route::get('/login', function(){
    return redirect('/admin/login');
})->name('login');
