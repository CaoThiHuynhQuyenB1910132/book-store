<?php

use App\Http\Livewire\Admin\Author\CreatePage as AuthorCreatePage;
use App\Http\Livewire\Admin\Author\EditPage as AuthorEditPage;
use App\Http\Livewire\Admin\Author\IndexPage as AuthorIndexPage;
use App\Http\Livewire\Admin\Book\CreatePage as BookCreatePage;
use App\Http\Livewire\Admin\Book\EditPage as BookEditPage;
use App\Http\Livewire\Admin\Book\IndexPage as BookIndexPage;
use App\Http\Livewire\Admin\Category\CreatePage;
use App\Http\Livewire\Admin\Category\EditPage;
use App\Http\Livewire\Admin\Category\IndexPage as CategoryIndexPage;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Dashboard\IndexPage;
use App\Http\Livewire\Client\Book\DetailPage;
use App\Http\Livewire\Client\Cart\IndexPage as CartIndexPage;
use App\Http\Livewire\Client\Home\IndexPage as HomeIndexPage;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['prefix' => '/', 'middleware' => ['admin']], function () {
    Route::get('/dashboard', IndexPage::class)->name('dashboard');

    Route::get('/categories', CategoryIndexPage::class)->name('categories');
    Route::get('/category-create', CreatePage::class)->name('category-create');
    Route::get('/category-edit/{id}', EditPage::class)->name('category-edit');

    Route::get('/books', BookIndexPage::class)->name('books');
    Route::get('/book-create', BookCreatePage::class)->name('book-create');
    Route::get('/book-edit/{id}', BookEditPage::class)->name('book-edit');

    Route::get('/authors', AuthorIndexPage::class)->name('authors');
    Route::get('/author-create', AuthorCreatePage::class)->name('author-create');
    Route::get('/author-edit/{id}', AuthorEditPage::class)->name('author-edit');
});

Route::get('/', HomeIndexPage::class)->name('/');
Route::get('/chi-tiet/{id}/{slug}', DetailPage::class)->name('bookDetail');
Route::get('/gio-hang', CartIndexPage::class)->name('cartDetail');
