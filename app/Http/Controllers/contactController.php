<?php

namespace App\Http\Controllers;

use App\Models\Contact_table;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class contactController extends Controller
{
    //receive contact form data in this function
    public function getContact(Request $req){

        $contactName = $req->input('name');
        $email = $req->input('email');
        $phone  = $req->input('phone');
        $address = $req->input('address');
        $message = $req->input('message');

        // echo 'submitted name is: '.$contactName;
        // echo '<br>';
        // echo 'submitted email is: '.$email;
        // echo '<br>';
        // echo 'submitted phone is: '.$phone;
        // echo '<br>';
        // echo 'submitted address is: '.$address;
        // echo '<br>';
        // echo 'submitted message is: '.$message;
        // echo '<br>';

        $contact = Contact_table::get()->first();

        $req->session()->flash('message','Thanks '.$contact['name'].' for contacting us. We will get back to you soon.');
        return redirect()->back();


    }

    function getAllContact(){


        // To get all data eloquent ORM model
        $contacts = Contact_table :: all();
        //or
        //$objectName = DB::SELECT('select * from contact_tables');

        //Specific data (by email)
        //Select * from tablename where email=shampodrifat@gmail.com 
        $shampodContacts = Contact_table::where('email','=','shampodrifat@gmail.com')
                        ->get();

        // (SELECT * FROM contact_tables);

       

        return view('allContact')->with('contactList',$contacts)->with('shampodContacts',$shampodContacts);
    }
}