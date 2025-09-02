<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController; // <-- use ต้องอยู่บนสุด

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

// Redirect หน้าแรกไปที่ /news เพื่อความสะดวก
Route::get('/', function () {
    return redirect('/news');
});

// Route สำหรับแสดงหน้ารวมข่าวทั้งหมด
Route::get('/news', [NewsController::class, 'index'])->name('news');

// Route สำหรับแสดงรายละเอียดข่าวแต่ละชิ้น
Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.detail');