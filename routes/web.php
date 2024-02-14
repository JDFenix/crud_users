<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//views
Route::get('/',[UserController::class, 'show']);
Route::get('/register',function(){
    return view('users.register');
});
Route::get('/modify',function(){
    return view('users.register');
});

//user
Route::post('/register',[UserController::class, 'store'])->name('register');
Route::delete('/user/delete/{cipherid}', [UserController::class, 'delete'])->name('deleteUser');
Route::post('/user/get/{cipherid}', [UserController::class, 'getUser'])->name('getUser');
Route::put('/user/modify', [UserController::class, 'modifyUser'])->name('modifyUser');


