<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NiceController;
use App\Http\Controllers\PostController;

/**
 * ホーム画面のルーティング
 */
Route::get('/', function () {
    return view('index');
});

/**
 * マップ機能のルーティング
 */
Route::controller(MapController::class)->middleware(['auth'])->group(function () {
    Route::get('/maps/{map}', 'detail');
});

/**
 * いいね機能のルーティング
 */
Route::controller(NiceController::class)->middleware(['auth'])->group(function () {
    Route::get('/nice/maps/{map}', 'niceMap')->name('niceMap');
    Route::get('/unnice/maps/{map}', 'unniceMap')->name('unniceMap');
    Route::get('/nice/locations/{location}', 'niceLocation')->name('niceLocation');
    Route::get('/unnice/locations/{location}', 'unniceLocation')->name('unniceLocation');
    Route::get('/nice', 'showNiceList');
});

/**
 * ロケ機能のルーティング
 */
Route::controller(LocationController::class)->middleware(['auth'])->group(function () {
    Route::get('/locations', 'showList');
    Route::get('/locations/search', 'search')->name('search');
    Route::get('/locations/pop', 'pop');
    Route::get('/locations/{location}', 'detail')->name('detail');
});

/**
 * 投稿機能のルーティング
 */
Route::controller(PostController::class)->middleware(['auth'])->group(function () {
    Route::get('/posts', 'showList');
    Route::post('/posts', 'save');
    Route::get('/posts/create', 'create');
    Route::put('/posts/{post}', 'update');
    Route::delete('/posts/{post}', 'delete');
    Route::get('/posts/{post}/edit', 'edit');
});

/**
 * 
 */
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

/**
 * 
 */
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
