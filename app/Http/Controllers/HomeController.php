<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }
    public function registerLinkClicked()
    {
        // Vérifie si l'utilisateur est déjà connecté
        if (Auth::check()) {
            Auth::logout(); // Déconnecte l'utilisateur
        }
        return redirect()->route('register'); // Redirige vers la page d'inscription
    }
}
