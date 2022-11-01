<?php

use App\Http\Controllers\UserControlelr;
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

Route::get('users',[UserControlelr::class,'users'])->name('get.users');
Route::post('users/edit',[UserControlelr::class,'users_edit'])->name('edit.users');

Route::post('user/delete',[UserControlelr::class, 'user_delete'])->name('delete.user');
