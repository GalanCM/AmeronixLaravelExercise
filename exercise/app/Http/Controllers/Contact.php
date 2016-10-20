<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Contact extends Controller
{
    public function show(Request $request, $id) {
      $contact = \App\Contact::find($id);
      $output = \App\Contact::find($id);
      $notes = $contact->notes()->getResults();
      if ( count( $notes ) > 0 ) {
          $output .= "<br><br>NOTES:";

          foreach ($notes as $key => $note) {
            $output .= "<br>" . $note;
          }
      }
      return $output;
    }
    
    public function store(Request $request) {
      $contact = new \App\Contact;
      
      $contact->name = $request->name;
      $contact->phone = $request->phone;
      $contact->email = $request->email;
      
      $contact->save();
      
      return $contact;
    }
    public function update(Request $request) {
      $contact = \App\Contact::find($request->id);

      if ( $request->has('name') ) {
        $contact->name = $request->name;
      }
      if ( $request->has('phone') ) {
      $contact->phone = $request->phone;
      }
      if ( $request->has('email') ) {
        $contact->email = $request->email;
      }
      
      $contact->save();
      
      return $contact;
    }
}
