<?php

use App\Http\Controllers\CrudUserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\FavoriteController;
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
Route::get('dashboard', [CrudUserController::class, 'dashboard']);

Route::get('login', [CrudUserController::class, 'indexLogin'])->name('user.loginIndex');
Route::post('login', [CrudUserController::class, 'customLogin'])->name('user.login');

Route::get('create', [CrudUserController::class, 'indexCreate'])->name('user.createUserIndex');
Route::post('create', [CrudUserController::class, 'createUser'])->name('user.createUser');

Route::get('list', [CrudUserController  ::class, 'listUser'])->name('user.listUserIndex');
Route::get('user', [CrudUserController::class, 'detail'])->name('users.detail');
Route::get('update', [CrudUserController::class, 'UpdateUser'])->name('user.UpdatetUser');
Route::post('update', [CrudUserController::class, 'PostUpdateUser'])->name('user.PostUpdatetUser');


Route::get('delete', [CrudUserController::class, 'deleteUser'])->name('user.deleteUser');

Route::get('signout', [CrudUserController::class, 'signOut'])->name('signout');
Route::get('listpost', [PostController::class, 'listPost'])->name('post.listpost');
Route::get('listfavoritie', [FavoriteController::class, 'listFavoritie'])->name('favoritie.listfavoritie');

Route::get('/', function () {
    return view('welcome');
});
