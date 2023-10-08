<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(){
        
        return view('frontend.contact.contact');
    }

    public function sendmsg()
    {
        $contact           = new Contact();
        $contact->fname    = $_POST['fname'];
        $contact->lname    = $_POST['lname'];
        $contact->email    = $_POST['email'];
        $contact->message  = $_POST['message'];
        $contact->save();
        

        //return "product add successfully";
        //return to_route('add_product');
        return back()->with('notification2', 'Thanks for communication us.');
    }
}
