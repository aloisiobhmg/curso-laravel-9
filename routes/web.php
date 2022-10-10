<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\CommentController;


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
//route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::prefix('users')->group(function () {
    route::get('/{id}/comments/create', [CommentController::class,'create'])->name('comments.create');
    route::post('/{id}/comments', [CommentController::class,'store'])->name('comments.store');
    route::get('/{id}/comments', [CommentController::class,'index'])->name('comments.index');
    route::delete('/{id}', [UserController::class,'destroy'])->name('users.destroy');
    route::put('/{id}', [UserController::class, 'update'])->name('users.update');
    route::get('/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    route::get('/', [UserController::class, 'index'])->name('users.index');
    route::post('/', [UserController::class, 'store'])->name('users.store');
    route::get('/create', [UserController::class, 'create'])->name('users.create');
    route::get('/{id}', [UserController::class, 'show'])->name('users.show');
});
Route::get('/', function () {
    return view('welcome');
});
