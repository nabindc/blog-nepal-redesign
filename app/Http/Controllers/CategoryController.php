<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\category;
use App\Blogpost;

class CategoryController extends Controller
{
    public function addCategory(Request $request){

    	if ($request->isMethod('post')){
    		$data = $request->all();
    		$category = new Category;
            $category->parent_id = $data['parent_id'];
    		$category->name = ucwords(strtolower($data['name']));
    		$category->slug = str_slug($data['name']);

    		$category->save();
    		return redirect()->route('view.category')->with('flash_message_success', 'Category Added Successfully');
    	}

         $levels = Category::where(['parent_id' => 0])->get();
     return view('backend.categories.add_category',compact('levels'));
    }


    public function viewCategory(){
        $categories = Category::all();

        return view('backend.categories.view_category', compact('categories'));
    }

    

    public function editCategory(Request $request, $id){
        if ($request->isMethod('post')) {
            $data = $request->all();
            
            Category::where(['id'=> $id ])->update([ 'parent_id'=>$data['parent_id'], 'name'=>$data['name'], 'slug' =>str_slug($data['name'])
        ]);
           return redirect()->route('view.category')->with('flash_message_success','category Updated Successfully');
        }
         $category = Category::where(['id' => $id])->first();
        $levels = Category::where(['parent_id' => 0])->get();
        return view ('backend.categories.edit_category')->with(compact('category', 'levels'));
    }


    public function deleteCategory($id = null){
        if(!empty($id)){
           Category::where(['id' => $id])->delete();
           return redirect()->route('view.category')->with('flash_message_warning', 'Catgeory Deleted Successfully');
        }
    }
}
