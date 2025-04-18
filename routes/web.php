<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PointController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('Pages.main');
})->name('main');

Route::get('/shedule', function () {
    return view('Pages.shedule');
});


Route::get('/account', [AccountController::class, 'showAccount'])->middleware('auth')->name('account');
Route::get('/notifications', [AccountController::class, 'showNotifications'])->middleware('auth')->name('notifications');
Route::get('/tickets', [AccountController::class, 'showTickets'])->middleware('auth')->name('tickets');

Route::get('/points', [PointController::class, 'show'])->name('points');

Route::get('/feedback', [FeedbackController::class, 'send'])->name('feedback');

Route::get('/сontacts', function () {
    return view('Pages.сontacts');
})->name('сontacts');


Route::post('/schedule', [ScheduleController::class, 'show'])->name('schedule');

Route::post('/register', [RegisterController::class, 'reg'])->name('register');
Route::get('/register', function () {
    return view('Pages.registr');
})->name('reg');

Route::post('/login', [AuthController::class, 'auth'])->name('login');
Route::get('/login', function () {
    return view('Pages.login');
})->name('log');

Route::get('/exit', function(){
	Auth::logout();
	return redirect()->route('main');
})->name('exit');