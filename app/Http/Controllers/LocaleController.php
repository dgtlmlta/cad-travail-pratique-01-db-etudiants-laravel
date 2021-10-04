<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class LocaleController extends Controller {
    /**
     *
     * Méthode permettant de modifier la langue de l'application
     *
     */
    public function setLocale(Request $request, $lang) {
        // dd($lang);
        App::setLocale($lang);
        session()->put("locale", $lang);

        // Retourner à la page précédente pour poursuivre la navigation
        return redirect()->back();
    }
}
