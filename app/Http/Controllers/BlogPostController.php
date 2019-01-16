<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;
use App\Category;
use Illuminate\Support\Facades\Input;
use Image;
use File;

class BlogPostController extends Controller
{
    public function addBlogPost(Request $request){
    	if($request->isMethod('post')){
    		$data = $request->all();

    		$blogpost = new BlogPost;
    		$blogpost->category_id = $data['category_id'];
    		$blogpost->title = $data['title'];
    		$blogpost->slug =str_slug($data['title']);
    		$blogpost->content = $data['content'];

    		if($request->hasFile('image')){
    			$image_tmp = Input::file('image');
    			if($image_tmp->isValid()){
    				$extension = $image_tmp->getClientOriginalExtension();
    				$filename = rand(99,99999).'.'.$extension;

    				$large_image_path = 'public/backend/uploads/blogs/large/'.$filename;
    				$small_image_path = 'public/backend/uploads/blogs/small/'.$filename;

    				// resizing the image file
    				Image::make($image_tmp)->resize(600,600)->save($large_image_path);
    				Image::make($image_tmp)->resize(300,300)->save($small_image_path);

    				$blogpost->image = $filename;
    				$blogpost->date= $data['date'];

    			}
    		}
    		$blogpost->save();
    		return redirect()->route('view.blogpost')->with('flash_message_success','BlogPost Added Successfully');
    	}


        $categories = Category::where(['parent_id' => 0])->get();
        $categories_dropdown = "<option value='' selected disabled>  Select </option>";
        foreach($categories as $cat){
            $categories_dropdown .= "<option value ='".$cat->id."'>".$cat->name."</option>";
            $sub_categories = Category::where(['parent_id' => $cat->id])->get();
            foreach ($sub_categories as $sub_cat) {
                $categories_dropdown .= "<option value= '".$sub_cat->id."'>&nbsp;--&nbsp;".$sub_cat->name."</option>";
            }
        }
    	return view('backend.blogpost.add_blogpost', compact('categories_dropdown'));
    }


    public function  viewBlogPost(){
        $blogposts =BlogPost::all();
        foreach($blogposts as $key => $val){
            $category_name = Category::where(['id' => $val->category_id])->first();
            $blogposts[$key]->category_name = $category_name->name;
        }
        return view('backend.blogpost.view_blogpost', compact('blogposts'));
    }

    public function editBlogPost(Request $request, $id=null){
        if ($request->isMethod('post')){
            $data = $request->all();

            if($request->hasFile('image')){
                $image_tmp = Input::file('image');
                if($image_tmp->isValid()){
                    $extension = $image_tmp->getClientOriginalExtension();
                    $filename = rand(99,99999).'.'.$extension;

                    $large_image_path = 'public/backend/uploads/blogs/large/'.$filename;
                    $small_image_path = 'public/backend/uploads/blogs/small/'.$filename;

                    // resizing the image file
                    Image::make($image_tmp)->resize(600,600)->save($large_image_path);
                    Image::make($image_tmp)->resize(300,300)->save($small_image_path);
                    

                }
            } else{
                $filename = $data['current_image'];
            }

            if(empty($data['content'])){
                $data['content'] = "";
            }

            BlogPost::where(['id'=>$id])->update(['category_id'=> $data['category_id'], 'title'=> $data['title'], 'slug'=> str_slug($data['title']), 'content'=> $data['content'], 'image'=>$filename, 'date'=>$data['date'] 
        ]);
            return redirect()->route('view.blogpost')->with('flash_message_success', 'BlogPost updated successfully');
        }
        


        $blogpostDetails =BlogPost::where(['id' =>$id])->first();
        $categories = Category::where(['parent_id'=> 0])->get();
        
        $categories_dropdown = "<option value='' selected disabled> Select </option>";
        
        foreach ($categories as $cat) {
            if($cat->id == $blogpostDetails->category_id){
                $selected = "selected";
            }
            else{
                $selected = "";
            }
            $categories_dropdown .="<option value='".$cat->id."'".$selected.">" .$cat->name ."</option>";
            $sub_categories = Category::where(['parent_id'=> $cat->id])->get();
            foreach ($sub_categories as $subcat) {
                if($subcat->id == $blogpostDetails->category_id){
                    $selected = "selected";
                }else{
                    $selected = "";
                }
                $categories_dropdown .="<option value='".$subcat->id."'".$selected."> &nbsp;--&nbsp;" .$subcat->name . "</option>";
            }
        }
        return view('backend.blogpost.edit_blogpost', compact('blogpostDetails','categories_dropdown'));
    }

     public function deleteBlogPostImage($id){
        $blogpostImage = BlogPost::where(['id'=>$id])->first();
        $large_image_path = 'public/backend/uploads/blogs/large';
        $small_image_path = 'public/backend/uploads/blogs/small';
        if(file_exists($large_image_path.$blogpostImage->image)){
            unlink($large_image_path.$blogpostImage->image);
        }
        if(file_exists($small_image_path.$blogpostImage->image)){
            unlink($small_image_path.$blogpostImage->image);
        }
        BlogPost::where(['id'=>$id])->update(['image'=>""]);
        return redirect()->back()->with('flash_message_success', 'BlogPost Image Deleted successfully.');

    }


    public function deleteBlogPost($id = null){
        BlogPost::where(['id'=>$id])->delete();
        return redirect()->back()->with('flash_message_success','BlogPost deleted successfully');
    }

   
}