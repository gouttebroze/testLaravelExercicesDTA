<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function hello($name) {

        $data = ['msg' => 'hello' .$name];

        return response('name')->json([
            'name' => 'Abigail']);
    }

    public function contact ($id){

        return $contact();
    }
}
