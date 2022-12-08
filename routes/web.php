<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// homepage
Route::get('/', [NewsController::class, 'index'])->name('homepage');

// contactpage
Route::get('/contact-us', [NewsController::class, 'contact'])->name('contactpage');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    // /dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::resource('news', NewsController::class);
});

// view all news
Route::get('/all-news', [NewsController::class, 'allNews'])->name('news.all');


require __DIR__.'/auth.php';
