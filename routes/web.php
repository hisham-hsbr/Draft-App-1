<?php

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

Route::get('/', function () {
    return view('front-end.home');
});


// Route::get('/admin', function () {
//     return view('back-end.home');
// });

Route::resource('demo', 'DemoController');

// Home
Route::resource('admin/dashboard', 'BackEndController');

Route::resource('admin/roles', 'RoleController');
Route::resource('admin/bloods', 'BloodController');


// Route::resource('admin/profile', 'ProfileController');
Route::get('/admin/profile', 'ProfileController@edit')->name('profile.edit');
Route::patch('/admin/profile', 'ProfileController@update')->name('profile.update');
Route::patch('/admin/profile', 'ProfileController@avatar')->name('profile.avatar');
Route::patch('/admin/profile/avatar/delete', 'ProfileController@avatarDelete')->name('profile.avatar.delete');
Route::delete('/admin/profile', 'ProfileController@destroy')->name('profile.destroy');







// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::patch('/profile/avatar', [ProfileController::class, 'avatar'])->name('profile.avatar');
//     Route::patch('/profile/avatar/delete', [ProfileController::class, 'avatarDelete'])->name('profile.avatar.delete');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
