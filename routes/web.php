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
Route::post('/register', [\App\Http\Controllers\AuthController::class,'store'])->name('store');
Route::get('/register', [\App\Http\Controllers\AuthController::class,'register'])->name('register');
Route::get('/', [\App\Http\Controllers\AuthController::class,'login'])->name('login');
Route::post('login', [\App\Http\Controllers\AuthController::class,'processLogin'])->name('process_login');


Route::group(['middleware'=>\App\Http\Middleware\CheckLoginMiddleware::class],function () {
    Route::resource('user',\App\Http\Controllers\UserController::class)->except([
        'sua',
        'xoa',
        'update',
    ]);
    Route::get('index', [\App\Http\Controllers\UserController::class,'index'])->name('index');
    Route::get('/logout', [\App\Http\Controllers\AuthController::class,'logout'])->name('logout');
    Route::get('/xemchitiet/{user}', [\App\Http\Controllers\UserController::class,'xemchitiet'])->name('xemchitiet');
    Route::get('suacanhan', [\App\Http\Controllers\UserController::class,'suacanhan'])->name('suacanhan');
    Route::put('suacanhan', [\App\Http\Controllers\UserController::class,'updatecanhan'])->name('updatecanhan');
    Route::get('/inbox/{user}', [\App\Http\Controllers\MessageController::class,'inbox'])->name('inbox');
    Route::post('/inbox', [\App\Http\Controllers\MessageController::class,'storeinbox'])->name('storeinbox');
    Route::get('indexinbox/{user}', [\App\Http\Controllers\MessageController::class,'indexinbox'])->name('indexinbox');
    Route::delete('/xoainbox/{message}', [\App\Http\Controllers\MessageController::class,'xoainbox'])->name('xoainbox');
    Route::get('/suainbox/{message}', [\App\Http\Controllers\MessageController::class,'inboxsua'])->name('inboxsua');
    Route::put('/suainbox/{message}', [\App\Http\Controllers\MessageController ::class,'inboxupdate'])->name('inboxupdate');
    Route::get('xembaitap', [\App\Http\Controllers\GiaobaitapController::class,'xembaitap'])->name('xembaitap');
    Route::post('/taobaitapnop', [\App\Http\Controllers\NopbaitapController::class,'luubaitapnop'])->name('luubaitapnop');
    Route::get('/taobaitapnop/{giaobaitap}', [\App\Http\Controllers\NopbaitapController::class,'taobaitapnop'])->name('taobaitapnop');
    Route::get('indexhopthuden', [\App\Http\Controllers\MessageController::class,'indexhopthuden'])->name('indexhopthuden');
    Route::get('/download/{giaobaitap}', [\App\Http\Controllers\GiaobaitapController::class,'download'])->name('download');
    Route::get('xemtrochoi', [\App\Http\Controllers\TrochoiController::class,'xemtrochoi'])->name('xemtrochoi');
    Route::get('/traloi', [\App\Http\Controllers\TrochoiController::class,'traloi'])->name('traloi');
    Route::post('/checktraloi', [\App\Http\Controllers\TrochoiController::class,'checktraloi'])->name('checktraloi');
});

Route::group(['middleware'=>\App\Http\Middleware\CheckGiaoVienMiddleware::class],function () {
    Route::delete('/xoa/{user}', [\App\Http\Controllers\UserController::class,'xoa'])->name('xoa');
    Route::get('/sua/{user}', [\App\Http\Controllers\UserController::class,'sua'])->name('sua');
    Route::put('/sua/{user}', [\App\Http\Controllers\UserController::class,'update'])->name('update');
    Route::post('/taobaitap', [\App\Http\Controllers\GiaobaitapController::class,'luubaitap'])->name('luubaitap');
    Route::get('/taobaitap', [\App\Http\Controllers\GiaobaitapController::class,'taobaitap'])->name('taobaitap');
    Route::delete('/xoabaitap/{giaobaitap}', [\App\Http\Controllers\GiaobaitapController::class,'xoabaitap'])->name('xoabaitap');
    Route::get('/suabaitap/{giaobaitap}', [\App\Http\Controllers\GiaobaitapController::class,'suabaitap'])->name('suabaitap');
    Route::put('/suabaitap/{giaobaitap}', [\App\Http\Controllers\GiaobaitapController::class,'updatebaitap'])->name('updatebaitap');
    Route::get('/xembaitapnop/{giaobaitap}', [\App\Http\Controllers\NopbaitapController::class,'xembaitapnop'])->name('xembaitapnop');
    Route::get('/downloadnop/{nopbaitap}', [\App\Http\Controllers\NopbaitapController::class,'downloadnop'])->name('downloadnop');
    Route::post('/taotrochoi', [\App\Http\Controllers\TrochoiController::class,'luutrochoi'])->name('luutrochoi');
    Route::get('/taotrochoi', [\App\Http\Controllers\TrochoiController::class,'taotrochoi'])->name('taotrochoi');
});
