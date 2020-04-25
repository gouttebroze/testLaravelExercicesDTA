<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandleParameterController extends Controller
{
    public function sayHello(Request $request) {

        $name = $request->query('name');

        return view('hello_with_param', ['name' => $name]);
    }
}

