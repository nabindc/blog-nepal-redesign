<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SocialLink;

class SocialLinkController extends Controller
{
    public function create(){
    	return view ('backend.social.add_social');
    }

public function store(Request $request){
      $data = $request->all();
      $socialsites = new SocialLink;
      $socialsites->facebook = $data['facebook'];
      $socialsites->twitter = $data['twitter'];
      $socialsites->instagram = $data['instagram'];
      $socialsites->youtube = $data['youtube'];
      $socialsites->github = $data['github'];
      
      $socialsites->save();
      return redirect()->back();

    }
    public function index(){
      $socials = SocialLink::all();
      return view ('backend.social.view_social', compact('socials'));
    }

    public function edit($id){
      $socialDetail = SocialLink::findOrFail($id);
      return view ('backend.social.edit_social', compact('socialDetail'));
    }

    public function update(Request $request, $id){

     if ($request->isMethod('post')){
     $data = $request->all();
      $socialsites = SocialLink::findOrFail($id);
      $socialsites->facebook = $data['facebook'];
      $socialsites->twitter = $data['twitter'];
      $socialsites->instagram = $data['instagram'];
      $socialsites->youtube = $data['youtube'];
      $socialsites->github = $data['github'];
      
      $socialsites->update();
  }
      return redirect()->route('index.social');
    }
}