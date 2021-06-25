<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BlogController extends Controller
{
    public function blog(){
        return view('pages.blog');
    }
   
    public function add_blog(){
        return view('admin.blog.add_blog');
    }
    public function all_blog(){
        $all_blog = blog::get();
        return view('admin.blog.all_blog',compact('all_blog'));
    }
    public function save_blog(Request $request){
        $data = $request->all();
        $blog = new blog();
        $blog['blog_title'] = $request->blog_title; 
        $blog['blog_post'] = $request->blog_post;
        $blog['blog_date'] = $request->blog_date;
        $blog['blog_text'] = $request->blog_text;
        $blog['blog_status'] = $request->blog_status;
        $blog->save();
    	Session::put('message','Thêm danh mục sản phẩm thành công');
    	return Redirect::to('all_blog');
    }
    public function active_blog($blog_id){
        blog::where('blog_id',$blog_id)->update(['blog_status'=>0]);
        Session::put('message','
        blog catalog activation successful');
        return Redirect::to('all-blog');
    }
    public function unactive_blog($blog_id){
        blog::where('blog_id',$blog_id)->update(['blog_status'=>1]);
        Session::put('message','
        No blog catalog activation successful');
        return Redirect::to('all-blog');
    }
    public function edit_blog($blog_id){
        $edit_blog= blog::where('blog_id',$blog_id)->get();
        $manager_blog = view('admin.blog.edit_blog')->with('edit_blog',$edit_blog);
        return view('admin_layout')->with('admin.blog.edit_blog', $manager_blog);
    
    }
    public function update_category(Request $request,$category_id){
        $data = $request->all();
        $category = Category::find($category_id);
        $category['category_name'] = $request->category_name; 
        $category['category_slug'] = $request->category_slug;
        $category['category_desc'] = $request->category_desc;
        $category->save();
        Session::put('message','
        Product catalog update successfully');
        return Redirect::to('all-category');
    }






    //////blog single 
    public function blog_single(){
        return view('pages.blog_single');
    }
}
