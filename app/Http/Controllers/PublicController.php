<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

 public function userDestroy()
{
    $user = Auth::user();
    
    // Elimina tutti i prodotti dell'utente
    $user->products()->delete();
    
    // Elimina l'utente
    $user->delete();
    
    // Esegui il logout
    Auth::logout();
    
    return redirect()->route('welcome')->with('message', 'Account eliminato con successo');
}
}