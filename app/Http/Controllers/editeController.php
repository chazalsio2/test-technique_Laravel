<?php

namespace App\Http\Controllers;

use App\Http\Controllers\utilisateur as ControllersUtilisateur;
use App\Models\Utilisateur;

use Illuminate\Http\Request;

class editeController extends Controller
{
    //
    public function index(Request $request){

        $utilisateurs = Utilisateur::all();
    }
    
    public function edite(Utilisateur $utilisateurs ){
        return view('activities.edit' ,compact('utilisateurs'));
    }

    public function update(Request $request,Utilisateur $utilisateurs ){
        $request->validate([
            'pseudo' => 'required',
            'email' => 'required' 
        ]);
        $utilisateurs->update($request->all());
        return redirect()->route('Activities.index')
                         ->with('messageSuccess','L\'utilisateur a bien était modifier');
}
}