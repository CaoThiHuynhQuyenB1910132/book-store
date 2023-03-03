<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard\IndexPage;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => '/', 'middleware' => ['admin']], function () {
    Route::get('/dashboard', IndexPage::class)->name('dashboard');


});
