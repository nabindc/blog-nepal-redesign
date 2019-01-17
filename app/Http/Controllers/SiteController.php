<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\SiteHeader;
use Image;
use File;

class SiteController extends Controller
{
    
    public function create(){
    	return view ('backend.sites.admin_site');
    }

public function store(Request $request){
      $data = $request->all();
      $site = new SiteHeader;
      $site->title = $data['title'];
      $site->sub_title = $data['sub_title'];
      $site->content = $data['content'];
      if($request->hasFile('image')){
        $image_tmp = Input::file('image');
        if($image_tmp->isValid()){
          $extension = $image_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $image_path = 'public/backEnd/sites/'.$filename;
          $large_image_path = 'public/backEnd/sites/large/'.$filename;

          Image::make($image_tmp)->save($image_path);
          Image::make($image_tmp)->resize(600,600)->save($large_image_path);

          $site->image = $filename;
        }
      }
      $site->save();
      return redirect()->back();

    }
    public function index(){
      $siteDetails = SiteHeader::all();
      return view ('backend.sites.index', compact('siteDetails'));
    }

    public function edit($id){
      $siteDetail = SiteHeader::findOrFail($id);
      return view ('backend.sites.edit', compact('siteDetail'));
    }

    public function update(Request $request, $id){
      $site = SiteHeader::findOrFail($id);
      $data = $request->all();
      $site->title = $data['title'];
      $site->sub_title = $data['sub_title'];
      $site->content = $data['content'];
      if($request->hasFile('image')){
        $image_tmp = Input::file('image');
        if($image_tmp->isValid()){
          $extension = $image_tmp->getClientOriginalExtension();
          $filename = rand(111,99999).'.'.$extension;
          $image_path = 'public/backEnd/sites/'.$filename;
          $large_image_path = 'public/backEnd/sites/large/'.$filename;

          Image::make($image_tmp)->save($image_path);
          Image::make($image_tmp)->resize(600,600)->save($large_image_path);

          $site->image = $filename;
        }
      }
      $site->save();
      return redirect()->route('index.site');
    }

    public function delete($id){
      $delete_site = SiteHeader::findOrFail($id);
      $delete_site->delete();
      return redirect()->route('index.site');

    }
}
