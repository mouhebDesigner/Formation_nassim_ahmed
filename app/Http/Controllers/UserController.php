<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        return view('users.index');
    }

    public function create(){
        return view('users.create');
    }

    public function store(Request $request){
        // Afficher le donné envoyés par la formulaires
        // return $request->all();
        // Sauvegarder les donnés
        // La premièer méthode est 
        User::create($request->all());

        return redirect('users')->with('update', 'L\'utilisateur a été add avec succés');
        // La deuxième méthode 
    }
    public function edit($id){
        $user = User::find($id);
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, $id){
        $user =  User::find($id);

        $user->nom = $request->nom;
        $user->email = $request->email;
        $user->password = $request->password;
    
        $user->save();
    
        return redirect('users')->with('updated', 'L\'utilisateur '.$user->nom.' a été modifié avec succés');
    }

    public function destroy($id){
        $user_name = User::find($id)->nom;
        User::find($id)->delete();
        // variable session flash 
        return redirect('users')->with('deleted', 'L\'utilisateur '.$user_name.' a été supprimé avec succés');
    }


}
