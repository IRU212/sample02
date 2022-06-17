<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/',[ECController::class,'index']);
Route::post('/create',[ECController::class,'create']);
Route::get('/chat/{eC}',[ECController::class,'show'])->name('chat');

//いいね機能
Route::post('nice/{eC}',[NiceController::class,'nice'])->name('nice');
Route::delete('unnice/{eC}',[NiceController::class,'unnice'])->name('unnice');

//設定
Route::prefix('setting')->group(function(){
    Route::get('/',[SettingController::class,'index']);
});

require __DIR__.'/auth.php';
