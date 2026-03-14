<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\BorrowedBookController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::resource('books', BookController::class);

Route::resource('members', MemberController::class);

Route::get('/borrowed', [BorrowedBookController::class, 'create'])->name('borrow.create');

Route::post('/borrowed', [BorrowedBookController::class, 'store'])->name('borrow.store');

Route::get('/test-books', function () {
    return "Books route working";
});