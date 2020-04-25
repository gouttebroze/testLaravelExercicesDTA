<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DisplayUserController extends Controller
{   
    public function displayForm() {

        return view('create_user');
    }

    public function handleForm(Request $request){


    $msg = 'Hello';

    $nom = $request->input('nom');

    return view('create_user_confirm', compact('nom'));

    }
}
