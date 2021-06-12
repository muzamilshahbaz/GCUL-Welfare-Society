<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contact;
use Illuminate\Support\Facades\Mail as FacadesMail;
use App\Mail;
use Illuminate\Contracts\Mail\Mailable;

class ContactController extends Controller
{
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
         ]);

        //  Store data in database
        Contact::create($request->all());

        //  Send mail to admin
        FacadesMail::send('mail', array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_query' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('chmuzamilshahbaz@gmail.com', 'Admin')->subject($request->get('name'));
        });

        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }

}
