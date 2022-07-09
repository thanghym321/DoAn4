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

use App\Http\Controllers\api\NhanvienController;
use App\Http\Controllers\api\KhachController;
use App\Http\Controllers\api\LoaisanphamController;
use App\Http\Controllers\api\SanphamController;
use App\Http\Controllers\api\NhacungcapController;
use App\Http\Controllers\api\SlideController;
use App\Http\Controllers\api\NewsController;
use App\Http\Controllers\api\SlideshowController;
use App\Http\Controllers\api\HDBanController;
use App\Http\Controllers\api\ChitietHDBanController;
use App\Http\Controllers\api\HDNhapController;
use App\Http\Controllers\api\ChitietHDNhapController;
use App\Http\Controllers\api\KhoController;
use App\Http\Controllers\api\UsersController;
use App\Http\Controllers\api\PhanhoiController;

// ADMIN
Route::get('/adminat', function () {
    return view('admin.admin');
});
Route::get('/admin/nhanvien', function () {
    return view('admin.nhanvien');
});
Route::get('/admin/khachhang', function () {
    return view('admin.khachhang');
});
Route::get('/admin/loaisanpham', function () {
    return view('admin.loaisanpham');
});
Route::get('/admin/sanpham', function () {
    return view('admin.sanpham');
});
Route::get('/admin/nhacungcap', function () {
    return view('admin.nhacungcap');
});
Route::get('/admin/news', function () {
    return view('admin.news');
});
Route::get('/admin/slideshow', function () {
    return view('admin.slideshow');
});
Route::get('/admin/hdban', function () {
    return view('admin.hdban');
});
Route::get('/admin/chitiethdban', function () {
    return view('admin.chitiethdban');
});
Route::get('/admin/hdnhap', function () {
    return view('admin.hdnhap');
});
Route::get('/admin/chitiethdnhap', function () {
    return view('admin.chitiethdnhap');
});
Route::get('/admin/kho', function () {
    return view('admin.kho');
});
Route::get('/admin/users', function () {
    return view('admin.users');
});
Route::get('/admin/phanhoi', function () {
    return view('admin.phanhoi');
});

// ANHTHAWNGS
Route::get('/', function () {
    return view('anhthawngs.index');
});
Route::get('/chitiet/{id}', function () {
    return view('anhthawngs.chitiet');
});
Route::get('/cart', function () {
    return view('anhthawngs.cart');
});
Route::get('/about', function () {
    return view('anhthawngs.about');
});
Route::get('/contact', function () {
    return view('anhthawngs.contact');
});
Route::get('/checkout', function () {
    return view('anhthawngs.checkout');
});
Route::get('/blog', function () {
    return view('anhthawngs.blog');
});
Route::get('/shop/{id}', function () {
    return view('anhthawngs.shop');
});

