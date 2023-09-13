<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    //protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /*protected function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' =>'required'
        ]);

        if (Auth::attempt($credentials)) {
            $user_role = Auth::user()->role;
            switch($user_role) {


                case 'admin':
                    return redirect('/admin');
                    break;
                case 'eleveur':
                    return redirect('/eleveur');
                    break;
                case 'client':
                    return redirect('/client');
                    break;

                default:
                    Auth::logout();
                    return redirect('/login')->with('error','email ou mot de passe Incorrect veuillez verifier vos informations de connecion s\'il vous plait');
                    break;
            }
        }
        else {
            return redirect('/login')->with('error', 'Erreur d\'authentification');
        }
    }*/
    protected function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->status) { // Vérifiez l'état de l'utilisateur
            switch ($user->role) {
                case 'admin':
                    return redirect('/admin');
                    break;
                case 'eleveur':
                    return redirect('/indexByOwner');
                    break;
                case 'client':
                    return redirect('/client');
                    break;
                default:
                    Auth::logout();
                    return redirect('/login')->with('error', 'Email ou mot de passe incorrect, veuillez vérifier vos informations de connexion.');
                    break;
            }
        } else {
            Auth::logout();
            return redirect('/login')->with('error', 'Votre compte est bloqué. Veuillez contacter l\'administrateur pour plus d\'informations.');
        }
    } else {
        return redirect('/login')->with('error', 'Erreur d\'authentification');
    }
}


}
