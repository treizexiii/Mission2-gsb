<?php

namespace App\Http\Controllers;

use PdoGsb;
use Illuminate\Http\Request;

class gererVisiteurController extends Controller
{
    public function Index()
    {
        if (session('visiteur') != null) {
            $visiteur = session('visiteur');
            $listeVisiteurs = PdoGsb::getAllVisiteurs();
            return view('gestionVisiteur')->with('visiteur', $visiteur)->with('listeVisiteurs', $listeVisiteurs);
        } else {
            return view('connexion')->with('erreurs',null);
        }
    }
}
