<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
/****************** Mouheb *************************/ 
Route::get('/', function () {
    return view('auth.login');
});
// php artisan make:controller UserController --resource


Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class);
});

// // list of user
// Route::get('users', [UserController::class, 'index']);
// // add user
// Route::get('users/create', [UserController::class, 'create']);
// // save user 
// Route::post('users', [UserController::class, 'store']);
// // delete users 
// Route::delete('users/{id}', [UserController::class, 'destroy']);
// // Edit route 
// Route::get('users/{id}/edit', [UserController::class, 'edit']);
// // update route 
// Route::put('users/{id}', [UserController::class, 'update']);
/******************** Ahmed  ************/
Route::get('userss', function(){
    $users=User::all();
    return view('users.indexx',compact('users'));
});
Route::delete('userss/{id}', function($id){
    User::find($id)->delete();
    return "supp";
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
