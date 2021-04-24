<?php

use App\Models\User;
use Illuminate\Http\Request;
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
/****************** Mouheb *************************/ 
Route::get('/', function () {
    return view('welcome');
});

Route::get('users/create', function(){
    return view('users.create');
});

Route::post('users', function(Request $request){
    // Afficher le donné envoyés par la formulaires
    // return $request->all();
    // Sauvegarder les donnés
    // La premièer méthode est 
    User::create($request->all());

    return redirect('users')->with('update', 'L\'utilisateur a été add avec succés');
    // La deuxième méthode 
    

});
Route::get('users', function(){
    // $users = User::all();
    // return view('users.index', compact('users'));
    return view('users.index');
});


// route of delete user 

Route::delete('users/{id}', function($id){
    $user_name = User::find($id)->nom;
    User::find($id)->delete();
    // variable session flash 
    return redirect('users')->with('deleted', 'L\'utilisateur '.$user_name.' a été supprimé avec succés');
});
/********************Ahmed  ************/
Route::get('userss', function(){
    $users=User::all();
    return view('users.indexx',compact('users'));
});
Route::delete('userss/{id}', function($id){
    User::find($id)->delete();
    return "supp";
});
