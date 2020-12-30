<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact as MailContact;

class ContactController extends Controller
{

    public function displayContact() { 
      
     return view('contact'); 
    }
    //save user contact message and send mail
    public function saveContact(Request $request) { 
        try{
            $validated = $request->validate([
                'firstname' => 'required',
                'lastname' => 'nullable',
                'email' => 'required',
                'subject' => 'nullable',
                'number' => 'nullable',
                'message' => 'required'
            ]);
            $firstname = $request->email;
            $lastname = $request->input('lastname');
            $email = $request->input('email');
            $subject = $request->input('subject');
            $message = $request->input('message');
            $number = $request->input('number');

            $contact = new Contact();
            $contact->firstname = $request->firstname;
            $contact->lastname = $request->lastname;
            $contact->email = $request->email;
            $contact->subject = $request->subject;
            $contact->number = $request->number;
            $contact->message = $request->message;
            $contact->save();
            $data = [
            'firstname' => $request->firstname,
            'lastname'=> $request->lastname,
           'email'=> $request->email,
            'subject' =>$request->subject,
            'number' => $request->number,
           'message' =>$request->message
            ];
            Mail::to('contact@greyluxassets.com')->send(new MailContact($data));
        return response()->json(['report'=> 'Message sent sucessfully' ]);
        }catch(\Exception $e){
            return response()->json(['report'=>$e->getMessage()]);
        }
    }

}
