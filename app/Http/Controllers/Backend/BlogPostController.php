<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\BlogPostCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;

class BlogPostController extends Controller
{
    public function BlogCategory(){

        $blogcategory = BlogPostCategory::latest()->get();
        return view('backend.blog.category.category_view',compact('blogcategory'));
    }


    public function BlogCategoryStore(Request $request){

        $request->validate([
            'blog_category_name_en' => 'required',
            'blog_category_name_fr' => 'required',

        ],[
            'blog_category_name_en.required' => 'Input Blog Category English Name',
            'blog_category_name_fr.required' => 'Input Blog Category France Name',
        ]);



        BlogPostCategory::insert([
            'blog_category_name_en' => $request->blog_category_name_en,
            'blog_category_name_fr' => $request->blog_category_name_fr,
            'blog_category_slug_en' => strtolower(str_replace(' ', '-',$request->blog_category_name_en)),
            'blog_category_slug_fr' => str_replace(' ', '-',$request->blog_category_name_fr),
            'created_at' => Carbon::now(),


        ]);

        $notification = array(
            'message' => 'Blog Category Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } // end method



    public function BlogCategoryEdit($id){

        $blogcategory = BlogPostCategory::findOrFail($id);
        return view('backend.blog.category.category_edit',compact('blogcategory'));
    }




    public function BlogCategoryUpdate(Request $request){

        $blogcar_id = $request->id;


        BlogPostCategory::findOrFail($blogcar_id)->update([
            'blog_category_name_en' => $request->blog_category_name_en,
            'blog_category_name_fr' => $request->blog_category_name_fr,
            'blog_category_slug_en' => strtolower(str_replace(' ', '-',$request->blog_category_name_en)),
            'blog_category_slug_fr' => str_replace(' ', '-',$request->blog_category_name_fr),
            'created_at' => Carbon::now(),


        ]);

        $notification = array(
            'message' => 'Blog Category Updated Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('blog.category')->with($notification);

    } // end method




    ///////////////////////////// Blog Post ALL Methods //////////////////

    public function ListBlogPost(){
        $blogpost = BlogPost::with('category')->latest()->get();
        return view('backend.blog.post.post_list',compact('blogpost'));
    }


    public function AddBlogPost(){
        $blogcategory = BlogPostCategory::latest()->get();
        $blogpost = BlogPost::latest()->get();
        return view('backend.blog.post.post_view',compact('blogpost','blogcategory'));

    }


    public function BlogPostStore(Request $request){

        $request->validate([
            'post_title_en' => 'required',
            'post_title_fr' => 'required',
            'post_image' => 'required',
        ],[
            'post_title_en.required' => 'Input Post Title English Name',
            'post_title_fr.required' => 'Input Post Title France Name',
        ]);

        $image = $request->file('post_image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(780,433)->save('upload/post/'.$name_gen);
        $save_url = 'upload/post/'.$name_gen;

        BlogPost::insert([
            'category_id' => $request->category_id,
            'post_title_en' => $request->post_title_en,
            'post_title_fr' => $request->post_title_fr,
            'post_slug_en' => strtolower(str_replace(' ', '-',$request->post_title_en)),
            'post_slug_fr' => str_replace(' ', '-',$request->post_title_fr),
            'post_image' => $save_url,
            'post_details_en' => $request->post_details_en,
            'post_details_fr' => $request->post_details_fr,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Blog Post Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('list.post')->with($notification);

    } // end mehtod



}
