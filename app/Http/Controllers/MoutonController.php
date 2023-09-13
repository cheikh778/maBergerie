<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mouton;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class MoutonController extends Controller
{
    public function index()
    {
        $moutons = Mouton::paginate(10);
        return view('moutons.index', compact('moutons'));
    }

    public function create()
    {
        return view('moutons.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'race' => 'required',
            'genealogie' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'taille' => 'required',
            'poids' => 'required',
            'prix' => 'required',
            'date_de_naissance' => 'required',
            'proprietaire_id' => 'required', // Assurez-vous que le champ proprietaire_id existe dans le formulaire
        ]);

        $photoPath = null;

        // Gérez l'upload de la photo si elle existe
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
        }

        $mouton = new Mouton([
            'nom' => $request->input('nom'),
            'race' => $request->input('race'),
            'genealogie' => $request->input('genealogie'),
            'photo' => $photoPath,
            'taille' => $request->input('taille'),
            'poids' => $request->input('poids'),
            'prix' => $request->input('prix'),
            'date_de_naissance' => $request->input('date_de_naissance'),
            'proprietaire_id' => $request->input('proprietaire_id'),
        ]);

        $mouton->save();

        return redirect()->route('indexByOwner')->with('success', 'Mouton créé avec succès.');
    }

    public function show($id)
    {
        $mouton = Mouton::find($id);
        return view('moutons.show', compact('mouton'));
    }

    public function edit($id)
    {
        $mouton = Mouton::find($id);
        return view('moutons.edit', compact('mouton'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required',
            'race' => 'required',
            'genealogie' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'taille' => 'required',
            'poids' => 'required',
            'prix' => 'required',
            'date_de_naissance' => 'required',
            'proprietaire_id' => 'required', // Assurez-vous que le champ proprietaire_id existe dans le formulaire
        ]);

        $mouton = Mouton::find($id);

        // Gérez la mise à jour de la photo si elle existe
        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            // Supprimez l'ancienne photo si nécessaire
            if ($mouton->photo) {
                Storage::disk('public')->delete($mouton->photo);
            }
            $mouton->photo = $photoPath;
        }

        $mouton->nom = $request->input('nom');
        $mouton->race = $request->input('race');
        $mouton->genealogie = $request->input('genealogie');
        $mouton->taille = $request->input('taille');
        $mouton->poids = $request->input('poids');
        $mouton->prix = $request->input('prix');
        $mouton->date_de_naissance = $request->input('date_de_naissance');
        $mouton->proprietaire_id = $request->input('proprietaire_id');

        $mouton->save();

        return redirect()->route('indexByOwner')->with('success', 'Mouton mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $mouton = Mouton::find($id);
        // Supprimez la photo si elle existe
        if ($mouton->photo) {
            Storage::disk('public')->delete($mouton->photo);
        }
        $mouton->delete();

        return redirect()->route('indexByOwner')->with('success', 'Mouton supprimé avec succès.');
    }

    public function indexByOwner()
    {
        $user = Auth::user();
        $moutons = $user->moutons()->paginate(10);

        return view('eleveur.eleveur', compact('moutons'));
    }



    public function contact()
    {
        return view('contact');
    }
}
