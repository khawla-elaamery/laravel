<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    // Afficher le formulaire de contact
    public function create()
    {
        return view('contact');
    }

    // Enregistrer le message dans la base de données
    public function store(Request $request)
    {
        // Validation des données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Enregistrement du message dans la base de données
        Message::create($validated);

        // Retourner une confirmation après l'envoi
        return redirect()->back()->with('success', 'Votre message a été envoyé avec succès.');
    }
}
