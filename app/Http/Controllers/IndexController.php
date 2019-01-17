<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Category;
use Session;

class IndexController extends Controller
{
    public function index(){
    	$blogposts =BlogPost::latest()->take(3)->get();
    	$categories = Category::all();
    	return view('index', compact('blogposts','categories'));
    }

    public function viewAllBlogPost(){
    	$blogposts =BlogPost::latest()->get();
    	$categories = Category::all();
    	return view('all_blogposts', compact('blogposts','categories'));
    }

    public function viewSingleBlogPost($slug){
    	$blogposts =BlogPost::where('slug', $slug)->first();
    	$categories = Category::all();
        $recentblogs =BlogPost::latest()->take(10)->get();
    	return view('single_blogposts', compact('blogposts','categories','recentblogs'));
    }
}
