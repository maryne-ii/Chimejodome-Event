<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/test', function () {
    return view('profile.index');
});

// Route::get('/greeting', function () {
//     return 'Hello World';
// });
Route::get('/', function () {
    return view('events.index');
});

Route::get('/manage', [EventController::class, 'manage'])
    ->name('events.manage');
Route::get('/manage/{event}/kaban', [EventController::class, 'kaban'])
    ->name('events.kaban');
Route::get('/manage/{event}/join', [EventController::class, 'join'])
    ->name('events.kaban');
// Route::get('/manage/{event}/kabans.join', function () {
//     return 'Hello World';
// });
Route::resource('/', EventController::class);
Route::resource('/events', EventController::class);






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
