<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function list(){

        $users = DB::select('select id, firstname, lastname from users order by lastname, firstname');

        return view('users', ['users' => $users]);
    }

    public function show($id) {

        $user = DB::table('users')->where('id', $id)->first();
        //$user = DB::table('users')->find($id);
        return view ('users', ['users' => $user]);
    }
}
