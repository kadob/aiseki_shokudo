<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\NiceController;

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
Route::controller(LocationController::class)->middleware(['auth'])->group(function(){
    Route::get('/locations','showLocalist');
    Route::get('/locations/search','searchLocation')->name('searchLocation');
    Route::get('/locations/locapop','showLocapop');
    Route::get('/locations/{location}','showLocadetail')->name('showLocadetail');
});

Route::get('/nice/locations/{location}',[NiceController::class,'niceLoca'])->name('nice');
Route::get('/unnice/locations/{location}',[NiceController::class,'unniceLoca'])->name('unnice');

Route::get('/',function (){
    return view('maps/map');
});
Route::get('/maps/{map}',[MapController::class,'showMapspot']);

/**Route::get('/', function () {
    return view('welcome');
});**/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
