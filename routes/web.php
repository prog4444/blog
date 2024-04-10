<?php

use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/show', [CommentController::class, 'index'])->name('show');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');
Route::get('/comments', [CommentController::class, 'index'])->name('comments.index');
Route::post('/comments/{comment}/reply',  [CommentController::class, 'reply'])->name('comments.reply');
Route::post('/comments/{comment}/like', [CommentController::class, 'like'])->name('comments.like');
Route::post('/comments/{comment}/dislike', [CommentController::class, 'dislike'])->name('comments.dislike');

# create comment
Route::get('/show', [CommentController::class, 'index'])->name('comments');
Route::get('/answer', [CommentController::class, 'answer'])->name('answer');
Route::post('/answer', [CommentController::class, 'answerStore'])->name('answer.store');
Route::get('/comments', [CommentController::class, 'comments'])->name('comments.list');
Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');


Route::post('/comments/{comment}/like',  [CommentController::class, 'like'])->name('comments.like');
Route::post('/comments/{comment}/dislike',  [CommentController::class, 'dislike'])->name('comments.dislike');
Route::post('/comments/{comment}/reply', [CommentController::class, 'reply'])->name('comments.reply');
