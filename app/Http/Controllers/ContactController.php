<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; 
use Mail;
class ContactController extends Controller
{

    public function displayContact() { 
      
     return view('contact'); 
    }
    //save user contact message and send mail
    public function saveContact(Request $request) { 
        // dd($request);
        // try{
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

//  $this->validate($request, [
//             'firstname' => 'required',
//             'lastname' => 'required',
//             'email' => 'required|email',
//             'subject' => 'required',
//             'phone_number' => 'required',
//             'message' => 'required'
//         ]);
        // \Mail::send(
        //      array(
        //          'firstname' => $request->firstname,
        //          'lastname' => $request->lastname,
        //          'email' => $request->email,
        //          'subject' => $request->subject,
        //          'phone_number' => $request->phone_number,
        //          'user_message' => $request->message,
        //      ), function($message) use ($request)
        //        {
        //           $message->from($request->email);
        //           $message->to('obochi2@gmail.com');
        //        });
        return response()->json(['report'=>    $firstname ]);
        // }catch(Exception $e){
        //     return response()->json(['report'=>$e]);
        // }
    }

}
