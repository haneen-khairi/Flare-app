<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  

    public function storeContactForm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $input = $request->all();

        ContactUs::create($input);

        //  Send mail to admin
        Mail::send('contactMail', array(
            'name' => $input['name'],
            'email' => $input['email'],
            'subject' => $input['subject'],
            'message' => $input['message'],
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('haneenkhairi96@gmail.com', 'Admin')->subject($request->get('subject '));
        });

        return redirect()->back()->with(['success' => 'Contact Form Submit Successfully']);
    }



}
