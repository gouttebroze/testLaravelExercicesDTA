<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Services\ContactsService;


use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        return Contact::all();
    }

    /*public function list(){

        $contacts = Contact::all();
        return view('contact', ['contacts' => $contacts]);


    }
    */
     /*public function list(){

        $contacts = ContactsFacade::listContacts();
        return view('contact', ['contacts' => $contacts]);


    }
    */
}
    /*public function show($id) { // (Request $request)

        
        $contact = Contact::findContact($id);

        Mail::to($request->user())->send(new Test($contact));



        return view ('contact', ['contacts' => $contact]);
        

    }
    */

