<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;
//use Illuminate\Support\Facades\Auth;
use Auth;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'prenom' => 'required|string|max:255',
            'nom' => 'required|string|max:255',
            'adresse' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'role' => 'required|in:admin,eleveur,client',
            'email' => 'required|string|email|max:255|unique:users',
            'genre' => 'required|in:homme,femme|max:100',
            'password' => 'required|string|confirmed|min:8',
            'photo_profil' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    }

    protected function create(array $data)
{
    $data['photo_profil'] = null;

    // Gérez l'upload de la photo de profil si elle existe
    if (isset($data['photo_profil']) && $data['photo_profil']->isValid()) {
        $data['photo_profil'] = $data['photo_profil']->store('photos', 'public');
    }

    return User::create([
        'prenom' => $data['prenom'],
        'nom' => $data['nom'],
        'adresse' => $data['adresse'],
        'telephone' => $data['telephone'],
        'genre' => $data['genre'],
        'role' => $data['role'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'photo_profil' => $data['photo_profil'],
    ]);
}

   /* protected function registered(Request $request, $user)
{
    $user_role = $user->role;

    switch ($user_role) {
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
            return redirect('/login')->with('error','Une erreur est survenue lors de la redirection après l\'inscription.');
            break;
    }
}*/

}
