<?php

use App\Http\Controllers\ManualUploadController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/manual-upload', [ManualUploadController::class, 'index'])->name('manual-upload.index');
Route::post('/manual-upload/store', [ManualUploadController::class, 'store'])->name('manual-upload.store');
