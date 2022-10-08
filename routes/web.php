<?php

use App\Http\Controllers\EmailsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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


// панель юзеров
Route::get('/', [PostController::class, 'index']);
Route::get('/detail/{post}',[PostController::class, 'detailPost']);

// Создание
Route::get('/new', [PostController::class, 'create']);
Route::post('/posts', [PostController::class, 'store']);

// Сообщения
Route::get('/email',[PostController::class,'viewEmail'])->name('view.email');
Route::post('/send-email',[EmailsController::class,'create'])->name('view.create');


// добавим поиск
Route::get('/search', [PostController::class, 'search'])->name('projects.search');


    