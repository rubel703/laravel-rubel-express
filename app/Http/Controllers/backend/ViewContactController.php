<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ViewContactController extends Controller
{
    public function viewAllContact(){
        return view('backend.contact.viewContact',['contact' => Contact::all()]);
    }

    public function destroyMessage(int $id){
        $msg = Contact::find($id);
        /* return $product; */
            $msg->delete();
            return back()->with('notification','Message deleted successfully');
    }
    
}
