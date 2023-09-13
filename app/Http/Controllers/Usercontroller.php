<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of all users.
     */
    public function index()
    {
        $users = User::paginate(10);
        //dd($users);
        return view('admin.admin', ['users' => $users]);
    }

    public function ListAdmin()
    {
        $admins = User::where('role', 'admin')->paginate(10);
        return view('admin.listeAdmin', ['admins' => $admins]);
    }
    public function ListEleveur()
    {
        $eleveurs = User::where('role', 'eleveur')->paginate(10);
        return view('admin.listeEleveur', ['eleveurs' => $eleveurs]);
    }
    public function ListClient()
    {
        $clients = User::where('role', 'client')->paginate(10);
        return view('admin.listeClient', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new user.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created user in storage.
     */
    /*public function store(Request $request)
    {
        // Validation & storing logic here
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'role' => 'required',
            'profile_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $user = new User($request->all());

        if($request->hasFile('profile_photo')){
            $imageName = time().'.'.$request->profile_photo->extension();
            $request->profile_photo->move(public_path('images'), $imageName);
            $user->profile_photo = $imageName;
        }

        $user->save();
        return redirect()->route('users.index');
    }*/
    /**
     * Display the specified user.
     */
    public function show(string $id)
    {
        $user = User::findOrFail($id);
        return view('admin.details', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.edit', ['user' => $user]);
    }

    /**
     * Update the specified user in storage.
     */
    public function update(Request $request, string $id)
{
    $user = User::findOrFail($id);

    $request->validate([
        'prenom' => 'required',
        'nom' => 'required',
        'adresse' => 'required',
        'telephone' => 'required',
        'genre' => 'required',
        'role' => 'required',
        'email' => 'required|unique:users,email,' . $user->id,
        'photo_profil' => 'image|mimes:jpeg,png,jpg,gif|max:2048'
    ]);

    $data = $request->all();

    /// Handle the profile photo upload
    if ($request->hasFile('photo_profil')) {
        // Remove the old profile photo from storage if it exists
        if ($user->photo_profil && Storage::disk('public')->exists($user->photo_profil)) {
            Storage::disk('public')->delete($user->photo_profil);
        }

        $imageName = time() . '.' . $request->photo_profil->extension();
        $path = $request->photo_profil->storeAs('profile_photos', $imageName, 'public');
        $data['photo_profil'] = $path;
    } elseif ($request->input('remove_photo') == '1') { // Check if user wants to remove the existing photo
        if ($user->photo_profil && Storage::disk('public')->exists($user->photo_profil)) {
            Storage::disk('public')->delete($user->photo_profil);
        }
        $data['photo_profil'] = null;
    } else {
        // If we are not uploading or removing the photo, unset it from the data array to avoid overwriting
        unset($data['photo_profil']);
    }

    $user->update($data);
    return redirect()->route('users.index');
}


    /**
     * Remove the specified user from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index');
    }

    /**
     * Block a user.
     */
    public function block(string $id)
    {
        $user = User::findOrFail($id);

        
        if (Auth::id() == $user->id) {
            Auth::logout();
        }

        $user->status = false;
        $user->save();

        session()->flash('message', 'Le compte utilisateur a été bloqué avec succès.');


        return redirect()->back();
    }


    public function unblock(string $id)
    {
        $user = User::findOrFail($id);
        $user->status = true;
        $user->save();
        return back();
    }


}
