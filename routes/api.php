<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

use App\Http\Controllers\api\NhanvienController;
use App\Http\Controllers\api\KhachhangController;
use App\Http\Controllers\api\LoaisanphamController;
use App\Http\Controllers\api\SanphamController;
use App\Http\Controllers\api\NhacungcapController;
use App\Http\Controllers\api\NewsController;
use App\Http\Controllers\api\SlideshowController;
use App\Http\Controllers\api\HDBanController;
use App\Http\Controllers\api\ChitietHDBanController;
use App\Http\Controllers\api\HDNhapController;
use App\Http\Controllers\api\ChitietHDNhapController;
use App\Http\Controllers\api\KhoController;
use App\Http\Controllers\api\UsersController;
use App\Http\Controllers\api\PhanhoiController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('nhanviens', NhanvienController::class);
Route::resource('khachhangs', KhachhangController::class);
Route::resource('loaisanphams', LoaisanphamController::class);
Route::resource('sanphams', SanphamController::class);
Route::resource('nhacungcaps', NhacungcapController::class);
Route::resource('newss', NewsController::class);
Route::resource('slideshows', SlideshowController::class);
Route::resource('hdbans', HDBanController::class);
Route::resource('chitiethdbans', ChitietHDBanController::class);
Route::resource('hdnhaps', HDNhapController::class);
Route::resource('chitiethdnhaps', ChitietHDNhapController::class);
Route::resource('khos', KhoController::class);
Route::resource('userss', UsersController::class);
Route::resource('phanhois', PhanhoiController::class);