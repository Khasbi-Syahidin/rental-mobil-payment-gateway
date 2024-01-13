<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [UserController::class, 'index'])->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::prefix('/')->middleware(['auth', 'user'])->name('user.')->group(function () {
    // require __DIR__ . '/user.php';
});

Route::prefix('dashboard')->middleware(['auth', 'admin'])->name('admin.')->group(function () {
    Route::get('/home', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/mobilcreate', [AdminController::class, 'create']);
    Route::post('/mobilstore', [AdminController::class, 'store'])->name('mobil.store');
    Route::post('/editmobil/{id}', [AdminController::class, 'edit']);
    Route::post('/updatemobil/{id}', [AdminController::class, 'update']);
    Route::delete('delete/{id}', [AdminController::class, 'delete']);
});


Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');


require __DIR__.'/auth.php';