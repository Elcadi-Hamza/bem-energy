<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class RegisteredClientController extends Controller
{
    /**
     * Affiche le formulaire d'inscription.
     */
    public function create(): View
    {
        return view('auth.client.register'); // Mise à jour du chemin de la vue
    }

    /**
     * Traite une demande d'inscription.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function register(Request $request): RedirectResponse
    {
        // Validation mise à jour pour correspondre aux noms de champs du formulaire
        $request->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenom' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:clients,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed', Rules\Password::defaults()],
            'telephone' => ['required', 'string', 'max:10'], // Changé de 'telephone' à 'tele'
            'adresse' => ['required', 'string', 'max:255'], // Changé de 'adresse' à 'address'
            'image' => ['nullable', 'image', 'max:2048'],
        ]);

        // Création du client avec les bons noms de champs
        $client = Client::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone, // Mappage de 'tele' à 'telephone' dans la base de données
            'adresse' => $request->adresse, // Mappage de 'address' à 'adresse' dans la base de données
            'password' => Hash::make($request->password),
            'image' => $request->hasFile('image') ? $request->file('image')->store('profile_pictures', 'public') : null,
        ]);

        event(new Registered($client));

        Auth::guard('client')->login($client);

        return redirect()->route('client.dashboard')->with('success', 'Inscription réussie !');
    }
}