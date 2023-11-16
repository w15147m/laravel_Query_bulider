<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::controller(UserController::class)->group(function(){
    Route::get('/', 'showUsers' )->name('home');
    Route::get('/update/{id}', 'updateUsers')->name('view.update');

    Route::post('/add', 'addUsers')->name('add_user');
    Route::post('/updata/{id}','editUsers')->name('update_users');
    Route::get('/updatepage/{id}', 'updatepage')->name('update_page');


});

Route::view('/adduser' , 'adduser');
