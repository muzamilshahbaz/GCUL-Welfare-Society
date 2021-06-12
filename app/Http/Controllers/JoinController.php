<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;
use Illuminate\Support\Facades\Redirect;

class JoinController extends Controller
{
    function AddMember(Request $req)
    {
        $mem = new Member;
       if($req->email != $mem->email or $req->cnic != $mem->cnic or $req->whatsapp != $mem->whatsapp){

        $mem->name = $req->name;
        $mem->email = $req->email;
        $mem->whatsapp = $req->whatsapp;
        $mem->cnic = $req->cnic;
        $mem->address = $req->address;
        $mem->country = $req->country;
        $mem->state = $req->state;
        $mem->city = $req->city;
        $mem->gender = $req->gender;
        $mem->occupation = $req->occupation;

        $mem->save();

        return redirect('join')->with('success','Thank you for joining us, our team will contact you in a while.');
       }

       else{

        return redirect('join')->with('unsuccess','This member is already registered or disapproved.');


       }


    }
}
