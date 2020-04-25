<?php 
 
namespace App\Http\Controllers;
 
use App\Http\Requests\ContactRequest;
use App\Contact;
 
class ContactController extends Controller
{
    public function index()
    {
        return Contact::all();
    }
 
   /* public function store(ContactRequest $request)
    {
        return view('confirm');
    }*/
}
