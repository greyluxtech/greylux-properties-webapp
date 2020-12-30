<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact; 
use Mail;
class ContactController extends Controller
{

    public function displayContact() { 
      
     return view('contact'); 
    }
    //save user contact message and send mail
    public function saveContact(Request $request) { 
        try{
            $name = $request->input('email');
            // $indata = $request->input();
            // $firstname =$indata[0];
//  $this->validate($request, [
//             'firstname' => 'required',
//             'lastname' => 'required',
//             'email' => 'required|email',
//             'subject' => 'required',
//             'phone_number' => 'required',
//             'message' => 'required'
//         ]);
//         \Mail::send('contact_email',
//              array(
//                  'firstname' => $request->get('firsname'),
//                  'lastname' => $request->get('firsname'),
//                  'email' => $request->get('email'),
//                  'subject' => $request->get('subject'),
//                  'phone_number' => $request->get('phone_number'),
//                  'user_message' => $request->get('message'),
//              ), function($message) use ($request)
//                {
//                   $message->from($request->email);
//                   $message->to('obochi2@gmail.com');
//                });
        return response()->json(['report'=>   $name]);
        }catch(Exception $e){
            return response()->json(['report'=>$e]);
        }
    }

}
