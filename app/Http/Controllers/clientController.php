<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerificationMail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class clientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         // Validate the request
        // $validated = $request->validate([
        //     'nom' => 'required|string|max:255',
        //     'email' => 'required|email|unique:users,email',
        //     'pw' => 'required|string|min:8',
        //     'tele' => 'required|string|max:15',
        //     'address' => 'required|string|max:255',
        // ]);

        // Create a new user instance, but don't save to DB yet
        $Client = new Client();
        $Client->nom = explode(' ', $request->nom)[0];
        $Client->prenom = explode(' ', $request->nom)[1];
        $Client->email = $request->email;
        $Client->password = bcrypt($request->password);
        $Client->telephone = $request->tele;
        $Client->address = $request->address;
        $Client->verification_token = Str::random(40);
        Mail::to($Client->email)->send(new VerificationMail($Client));
        session(['pending_client' => $Client]);
        return view('frontEnd.validation', ['client' => $Client]);
    }
    public function verifyCode(Request $request)
    {
        $request->validate(['code' => 'required|string']);
        
        $client = session('pending_client');

        if (!$client) {
            return redirect('/sing')->withErrors(['error' => 'Session expired. Please try again.']);
        }

        if ($request->code === $client->verification_token) {
            $client = new Client((array) $client);
            $client->save();
            session()->forget('pending_client');
            return redirect('/login')->with('success', 'Compte créé avec succès. Veuillez vous connecter.');
        } else {
            return back()->withErrors(['code' => 'Code incorrect.']);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
