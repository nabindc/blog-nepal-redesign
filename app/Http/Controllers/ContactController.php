<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\StoreMessage;

class ContactController extends Controller
{
 public function create(){
    	return view ('backend.contact.create_contact');
    }

	public function store(Request $request){
      $data = $request->all();
      $site = new Contact;
      $site->phone = $data['phone'];
      $site->address = $data['address'];
      $site->email = $data['email'];
      $site->save();
      return redirect()->back();

    }
    public function index(){
      $contact = Contact::all();
      return view ('backend.contact.index', compact('contact'));
    }

    public function edit($id){
      $siteDetail = Contact::findOrFail($id);
      return view ('backend.contact.edit', compact('siteDetail'));
    }

    public function update(Request $request, $id){
      $site = Contact::findOrFail($id);
      $data = $request->all();
      $site->phone = $data['phone'];
      $site->address = $data['address'];
      $site->email = $data['email'];
      $site->update();
      return redirect()->route('index.contact');
    }

    public function delete($id){
      $delete_site = Contact::findOrFail($id);
      $delete_site->delete();
      return redirect()->route('index.contact');

    }

    public function viewMessages(Request $request){

      $messages = StoreMessage::all();
      return view ('backend.contact.view_messages', compact('messages'));
    }
    
}
