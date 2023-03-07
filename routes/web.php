<?php

use App\Http\Livewire\Admin\Book\CreatePage as BookCreatePage;
use App\Http\Livewire\Admin\Book\IndexPage as BookIndexPage;
use App\Http\Livewire\Admin\Category\CreatePage;
use App\Http\Livewire\Admin\Category\EditPage;
use App\Http\Livewire\Admin\Category\IndexPage as CategoryIndexPage;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard\IndexPage;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => '/', 'middleware' => ['admin']], function () {
    Route::get('/dashboard', IndexPage::class)->name('dashboard');

    Route::get('/categories', CategoryIndexPage::class)->name('categories');
    Route::get('/category-create', CreatePage::class)->name('category-create');
    Route::get('/category-edit/{id}', EditPage::class)->name('category-edit');

    Route::get('/books', BookIndexPage::class)->name('books');
    Route::get('/book-create', BookCreatePage::class)->name('book-create');
    Route::get('/book-edit/{id}', BookIndexPage::class)->name('book-edit');
});


    // Artisan::call('storage:link');

