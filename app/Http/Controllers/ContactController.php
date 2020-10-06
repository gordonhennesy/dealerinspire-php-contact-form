<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactMailer;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
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
        return redirect('/#contact');
        //return view('contacts/store', ['inputs' => $inputs]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
