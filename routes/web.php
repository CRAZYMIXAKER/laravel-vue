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

//Route::prefix('login/google')->name('google.')->group(function () {
//    Route::post('', [LoginController::class, 'loginWithGoogle'])->name('login');
//    Route::get('callback', [LoginController::class, 'callbackFromGoogle'])->name('callback');
//});
//
//Route::post('logout', [LoginController::class, 'logout'])->name('logout');

//Route::get('/', function () {
//    return ['Laravel' => app()->version()];
//});

Route::any('{all}', function () {
    //    $user = Auth::user();
    //    return view('vue')->with(compact('user'));
    return view('vue');
})->where(['all' => '.*']);

require __DIR__.'/auth.php';
