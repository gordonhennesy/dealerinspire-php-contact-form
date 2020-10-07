<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Store a newly created contact in the database, and send 
     * the related email (to Guy Smiley).
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $to_name = 'Guy Smiley';
        $to_email = 'smiley@example.com'; //'RECEIVER_EMAIL_ADDRESS';
        $inputs = $request->input();

        $validatedData = $request->validate([
            'fullname' => 'required|max:255',
            'email' => 'required',
            'phone' => 'nullable',
            'message' => 'required',
        ]);

        // Create a database object to store the form fields
        // to be sent as an email in the second step
        $contact = new Contact();

        $contact->fullname = $request->fullname; //
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        // Here we collect the form data to be sent to the email template,
        // and handed off to the Email class for sending.
        $data = array(
            'fullname' => "".$request->fullname . "",
            'email' => "" . $request->email . "",
            'phone' => "" . $request->phone . "",
            'inputmessage' => "" . $request->message . "",
        ); 
        
        $from_email = $request->email;
        $from_name = $request->fullname;
        
        Mail::send('emails.contact', $data, function($message) use ($to_name, $to_email, $from_email, $from_name) {
            $message->to($to_email, $to_name)->subject('Contact Test Mail');
            $message->from($from_email, $from_name);
        });
 
        return redirect('/#contact')->with('success_message','Form submitted successfully!');
    }
}
