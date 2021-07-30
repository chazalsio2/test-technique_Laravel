<?php

namespace App\Http\Controllers;

use App\Http\Controllers\utilisateur as ControllersUtilisateur;
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
    public function index( Request $request)
    {
        //
        $utilisateurs = utilisateur::all();
        return view('activities.index', compact('utilisateurs'));
    }
    
    }

