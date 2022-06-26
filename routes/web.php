<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ECController;
use App\Http\Controllers\NiceController;
use App\Http\Controllers\SettingController;
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

Route::get('/',[ECController::class,'index'])->middleware(['auth'])->name('home');
Route::post('/create',[ECController::class,'create']);
Route::get('/chat/{eC}',[ECController::class,'show'])->name('chat');

//いいね機能
Route::post('nice/{eC}',[NiceController::class,'nice'])->name('nice');
Route::delete('unnice/{eC}',[NiceController::class,'unnice'])->name('unnice');

//設定
Route::prefix('setting')->group(function(){
    Route::get('/{eC}',[SettingController::class,'index'])->name('setting');
    Route::post('/{eC}/update',[SettingController::class,'update'])->name('setting-update');
    Route::delete('/{eC}/destroy',[SettingController::class,'destroy'])->name('setting-destroy');
});

//ログアウト
Route::post('/logout',[AuthenticatedSessionController::class,'destroy']);
Route::get('/logout',[AuthenticatedSessionController::class,'destroy']);

//アカウント削除
// Route::delete('/destroy/{eC}',[SettingController::class,'destroy'])->name('setting-destroy');

require __DIR__.'/auth.php';
