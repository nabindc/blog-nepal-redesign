<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services;

class ServiceController extends Controller
{
  public function create(){
    	return view ('backend.services.create_service');
    }

public function store(Request $request){
      $data = $request->all();
      $site = new services;
      $site->title = $data['title'];
      $site->content = $data['content'];
      
      $site->save();
      return redirect()->back();

    }
    public function index(){
      $services = services::all();
      return view ('backend.services.index', compact('services'));
    }

    public function edit($id){
      $services = services::findOrFail($id);
      return view ('backend.services.edit', compact('services'));
    }

    public function update(Request $request, $id){
      $site = services::findOrFail($id);
      $data = $request->all();
      $site->title = $data['title'];
      
      $site->content = $data['content'];
      
      $site->save();
      return redirect()->route('index.service');
    }

    public function delete($id){
      $delete_site = services::findOrFail($id);
      $delete_site->delete();
      return redirect()->route('index.service');

    }
}
