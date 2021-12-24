<?php

use App\Http\Controllers\Comment\CommentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
//LOGIN
Route::get('/login', [LoginController::class, 'getLoginForm'])->name('login');
Route::post('/login',  [LoginController::class, 'login'])->name('auth.login');
Route::get('/logout',  [LoginController::class, 'logout'])->name('auth.logout');


// Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    //USER
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
    ], function () {
        Route::group([
            'prefix' => 'users',
            'as' => 'users.',
        ], function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::get('/create', [UserController::class, 'create'])->name('create');
            Route::post('/store', [UserController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [UserController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
        });
    });
    //CUSTOMER
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
    ], function () {
        Route::group([
            'prefix' => 'customer',
            'as' => 'customer.',
        ], function () {
            Route::get('/', [CustomerController::class, 'index'])->name('index');
            Route::get('/create', [CustomerController::class, 'create'])->name('create');
            Route::post('/store', [CustomerController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [CustomerController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [CustomerController::class, 'delete'])->name('delete');
           

        });
    });

    //COMMENT
    Route::group([
        'prefix' => 'admin',
        'as' => 'admin.',
    ], function () {
        Route::group([
            'prefix' => 'comment',
            'as' => 'comment.',
        ], function () {
            Route::get('/', [CommentController::class, 'index'])->name('index');
            Route::get('/create', [CommentController::class, 'create'])->name('create');
            Route::post('/store', [CommentController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [CommentController::class, 'edit'])->name('edit');
            Route::post('/update/{id}', [CommentController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [CommentController::class, 'delete'])->name('delete');
        });
    });