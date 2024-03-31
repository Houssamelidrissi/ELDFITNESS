<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    public function Login()
    {
        // Vérifie si l'utilisateur est déjà connecté, sinon redirige vers la page d'accueil
        if (Auth::check()) {
            return redirect((route('Home')));
        }
        // Renvoie la vue 'Login'
        return view('Login');
    }

    // Request $request dans une méthode de contrôleur est utilisé pour accéder aux données de la requête HTTP entrante.
    public function LoginPost(Request $request)
    {

        // $request->validate cette méthode vérifie si les champs email et password sont présents et non vides dans la requête.
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        //vous créez un tableau $credentials contenant uniquement les valeurs des champs 'email' et 'password' envoyés dans la requête
        $credentials = $request->only('email', 'password');

        //Auth::attempt( $credentials ) : vérifier si les informations d'identification fournies correspondent à un utilisateur enregistré dans votre système
        if (Auth::attempt($credentials)) {

            //redirect()->intended() est une méthode pratique de Laravel utilisée pour rediriger 
            //un utilisateur vers l'URL qu'il avait initialement demandée avant de se voir demander une authentification.
            return redirect()->intended(route('Home'));
        }

        // En cas d'erreur, redirige vers la page de connexion avec un message d'erreur
        // redirect rediriger l'utilisateur vers une autre URL spécifiée.
        return redirect((route('login')))->with("error", "Login details are not valid");
    }



    // Affiche la vue d'inscription
    public function Register()
    {
        // Vérifie si l'utilisateur est déjà connecté, sinon redirige vers la page d'accueil
        if (Auth::check()) {
            //si un utilisateur est déjà connecté, il sera redirigé vers la page d'accueil de l'application.
            return redirect((route('Home')));
        }
        // Si l'utilisateur n'est pas connecté la page de 'Registration' sera renvoyée pour lui permettre de s'inscrire ou de se connecter.
        // view('Registration') cest la page a afficher 
        return view('Registration');
    }


    //Request $request dans une méthode de contrôleur est utilisé pour accéder aux données de la requête HTTP entrante.
    public function RegisterPost(Request $request)
    {
        //$request->validate cette méthode vérifie si les champs name, email et password sont présents et non vides dans la requête.
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        // Récupère les données du formulaire
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = $request->password;

        // User::create Crée un nouvel utilisateur avec les informations fournies
        // User est class dans le Models représente la table des utilisateurs dans votre base de données
        $user = User::create($data);

        // Vérifie si la création de l'utilisateur a échoué, sinon redirige vers la page d'inscription avec un message d'erreur
        if (!$user) {
            return redirect((route('registration')))->with("error", "registration failed try again");
        }
        // Redirige vers la page de connexion avec un message de succès
        return redirect((route('login')))->with("success", "Registration success");
    }

    // Gère la déconnexion de l'utilisateur
    public function logout(Request $request)
    {
    // Utilise la méthode de déconnexion par défaut de Laravel
    Auth::logout();

    // Invalidate the session
    $request->session()->invalidate();

    // Regenerate the CSRF token
    $request->session()->regenerateToken();

    // Redirige vers la page de connexion
    return redirect(route('Home'))->with("success", "Logout success");
    }

}
