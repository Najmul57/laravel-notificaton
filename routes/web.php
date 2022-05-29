<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Notifications\EmailNotification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Notification;

Route::get('notificatioin',function(){
    $user =User::find(1);
    // $user->notify(new EmailNotification());
    Notification::send($user, new EmailNotification());
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
