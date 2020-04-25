<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateUserController extends Controller
{   
    public function displayForm() {

        return view('create_user');
    }

    public function handleForm(Request $request){

        $validatedData = $request->validate([
            'nom' => 'bail|required|alpha_dash|min:4|max:10',
        ]);
        
    $msg = 'Hello';

    $nom = $request->input('nom');

    return view('create_user_confirm', compact('msg', 'nom'));

    }
}

