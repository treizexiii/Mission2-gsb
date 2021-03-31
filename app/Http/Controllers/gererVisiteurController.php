<?php

namespace App\Http\Controllers;

use App\MyApp\PdoGsb as MyAppPdoGsb;
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

    public function Details(string $id)
    {
        if (session('visiteur') != null) {
            $visiteur = session('visiteur');
            $infos = PdoGsb::getVisitorDetails($id);
            return view('detailsVisiteur')->with('visiteur', $visiteur)->with('infos', $infos);
        }
    }

    public function delete(string $id)
    {
        if (session('visiteur') != null) {
            $visiteur = session('visiteur');
            $message = PdoGsb::deleteVisiteur($id);
            $listeVisiteurs = PdoGsb::getAllVisiteurs();
            return view('gestionVisiteur')->with('message', $message)->with('visiteur', $visiteur)->with('listeVisiteurs', $listeVisiteurs);
            //return redirect()->route('gestionVisiteur')->with('visiteur', $visiteur)->with('message', $message);
        } else {
            return view('connexion')->with('erreurs',null);
        }
    }
}
