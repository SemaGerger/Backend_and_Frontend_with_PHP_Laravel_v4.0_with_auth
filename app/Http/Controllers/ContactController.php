<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::first();
        return view(config('routes.views.contacts.index'), compact('contacts'));
    }
    
    public function aboutPage()
    {
        return view (config('routes.views.contacts.aboutPage'));
    }
 

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
       
        $contact->update($request->only(['email', 'phone', 'address', 'social_media_name', 'social_media_url']));

        $contact->save();

        return redirect()->route(config('routes.routes.contacts.index'))->with('success', 'Contact updated successfully.');
    }
}
