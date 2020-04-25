<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HandleSessionController extends Controller
{
    public function sayHello (Request $request, $name) {

        $request->session()->put('name', $name);

        return view ('hello_with_session');
    }
}
