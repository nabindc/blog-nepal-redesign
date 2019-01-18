<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SiteHeader;
use App\AboutSite;
use App\Services;
use App\Contact;
use App\SocialLink;
use App\StoreMessage;
use App\BlogPost;
use App\Category;
use Session;

class IndexController extends Controller
{
    public function index(){
        $sites = SiteHeader::first();
        $aboutme =AboutSite::first();
        $services =Services::all();
        $contact =Contact::first();
        $sociallinks =SocialLink::first();
    	$blogposts =BlogPost::latest()->take(3)->get();
    	$categories = Category::all();
    	return view('index', compact('sites','aboutme','services','contact','sociallinks','blogposts','categories'));
    }

    public function viewAllBlogPost(){
    	$blogposts =BlogPost::latest()->get();
    	$categories = Category::all();
        $aboutme =AboutSite::first();
        $contact =Contact::first();
        $sociallinks =SocialLink::first();
    	return view('all_blogposts', compact('blogposts','categories','aboutme','contact','sociallinks'));
    }

    public function viewSingleBlogPost($slug=null){
    	$blogposts =BlogPost::where('slug', $slug)->first();
    	$categories = Category::all();
        $recentblogs =BlogPost::latest()->take(10)->get();
        $aboutme =AboutSite::first();
        $contact =Contact::first();
        $sociallinks =SocialLink::first();
    	return view('single_blogposts', compact('blogposts','categories','recentblogs','aboutme','contact','sociallinks'));
    }

     public function storeMessage(Request $request){
     
         $data = $request->all();
   // echo "<pre>"; print_r($data); die; 
         $messages = new StoreMessage;
         $messages->name = $data['name'];
         $messages->email = $data['email'];
         $messages->message = $data['message'];

         $messages->save();
         return redirect()->back()->with('flash_message_success', 'Your message has been Sent. Thank You !!!');

 
   }
}
