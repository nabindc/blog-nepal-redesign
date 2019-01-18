<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\AboutSite;
use Image;
use File;

class AboutController extends Controller
{
    public function create(){
    	return view ('backend.aboutsites.admin_aboutsite');
    }

	public function store(Request $request){
      $data = $request->all();
      $site = new AboutSite;
      $site->title = $data['title'];
      $site->sub_title = $data['sub_title'];
      $site->content = $data['content'];
      if($request->hasFile('image')){
        $image_tmp = Input::file('image');
        if($image_tmp->isValid()){
          $extension = $image_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $image_path = 'public/backend/sites/'.$filename;
          $large_image_path = 'public/backend/sites/large/'.$filename;

          Image::make($image_tmp)->save($image_path);
          Image::make($image_tmp)->resize(600,600)->save($large_image_path);

          $site->image = $filename;
        }
      }
      $site->video = $data['video'];
      $site->save();
      return redirect()->back();

    }
    public function index(){
      $siteDetails = AboutSite::all();
      return view ('backend.aboutsites.index', compact('siteDetails'));
    }

    public function edit($id){
      $siteDetail = AboutSite::findOrFail($id);
      return view ('backend.aboutsites.editabout', compact('siteDetail'));
    }

    public function update(Request $request, $id){
      $site = AboutSite::findOrFail($id);
      $data = $request->all();
      $site->title = $data['title'];
      $site->sub_title = $data['sub_title'];
      $site->content = $data['content'];
      if($request->hasFile('image')){
        $image_tmp = Input::file('image');
        if($image_tmp->isValid()){
          $extension = $image_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $image_path = 'public/backend/sites/'.$filename;
          $large_image_path = 'public/backend/sites/large/'.$filename;

          Image::make($image_tmp)->save($image_path);
          Image::make($image_tmp)->resize(600,600)->save($large_image_path);

          $site->image = $filename;
        }
      }
      $site->save();
      return redirect()->route('index.about');
    }

    public function delete($id){
      $delete_site = AboutSite::findOrFail($id);
      $delete_site->delete();
      return redirect()->route('index.about');

    }
}
