<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use App\Models\Contact;
use App\Models\Mail;
use App\Models\Phone;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Contact::all();
        $adress = Adress::all();
        $phone = Phone::all();
        $mail = Mail::all();


        return view('edits.editContact', compact('contact', 'adress', 'phone', 'mail'));
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
        //
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
        // $contact=Contact::all();
        $validation=$request->validate([

            "street"=>"required",
            "city"=>"required",
            "number"=>"required",
            "email"=>"required",
           
           ]);
        $adress = Adress::all();
        $phone = Phone::all();
        $mail = Mail::all();

        $adress[0]->street = $request->street;
        $adress[0]->city = $request->city;

        $phone[0]->number = $request->number;
        $mail[0]->email = $request->email;

        $adress[0]->save();
        $phone[0]->save();
        $mail[0]->save();

        return redirect()->back();
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
