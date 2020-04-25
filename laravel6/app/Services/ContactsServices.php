<?php
namespace App\Services;

use App\Contact;


class ContactsService
{
    public function listContacts(){
        return Contact::all();
        
    }
}