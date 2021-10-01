<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LocaleController extends Controller
{
    /**
     *
     * Méthode permettant de modifier la langue de l'application
     *
     */
    public function setLocale(Request $request, $lang) {
        if(!isset($request->cookies("locale"))) {
            cookie("locale", $lang);
            $request->session()->put('locale', $lang);
        }
    }

}
