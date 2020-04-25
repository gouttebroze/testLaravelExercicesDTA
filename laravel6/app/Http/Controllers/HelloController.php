<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function sayHello(Request $request) {

        $name = $request->query('name');

        return view('', ['request' => $request]);
    }
}
