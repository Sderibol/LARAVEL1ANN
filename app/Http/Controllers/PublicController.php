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

    public function userDestroy(){
        $user = Auth::user();

        foreach($user->products as $product){
            $product->update([
                'user_id' => null
            ]);
        }

        $user->delete();

        return redirect()->route('welcome')->with('message','Utente eliminato con successo');
    }
}