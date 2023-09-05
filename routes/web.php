<?php

use App\Models\User;
use App\Mail\SendEmailable;
use Illuminate\Support\Facades\App;
use App\Notifications\TaskCompleted;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('front-end.home');
});



Route::get('/sendEmail', function () {
    Mail::to('hisham.hsbr@gmail.com')->send(new SendEmailable());
    return 'email send hs';
});

Route::get('/notify', function () {
    // $user=user::find(1);
    User::find(1)->notify(new TaskCompleted);
    return 'email send hs';
});
Route::get('markAsAllRead', function () {
    // $user=user::find(1);
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markAsAllRead');


// Route::get('/admin/markAsRead/{id}', 'DBNotificationController@markAsRead')->name('markAsRead');
// Route::get('/demo/demo-notfy/create', 'DBNotificationController@create')->name('createNotfy');
// Route::get('/demo/demo-notfy/store', 'DBNotificationController@store')->name('n.store');
// Route::resource('/demo/demo-notfy', 'DBNotificationController');



Route::get('/demo-lang/{lang?}', function ($lang=null) {
    App::setLocale($lang);
    return view('demo.demo-lang');
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
