<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use App\Models\utilisateurModel;

class ActivitiesControlleur extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $utilisateurs = utilisateur::all();
        return view('activities.index', compact('utilisateurs'));
    }
}
