<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Blog;
use App\Category;
use App\Blog_single;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();

class BlogController extends Controller
{
    public function blog(){
        $all_blog= Blog::where('blog_status','0')->orderby('blog_id','desc')->limit(6)->get();
        return view('pages.blog',compact('all_blog'));
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
    public function update_blog(Request $request,$blog_id){
        $data = $request->all();
        $blog = blog::find($blog_id);
        $blog['blog_title'] = $request->blog_title; 
        $blog['blog_post'] = $request->blog_post;
        $blog['blog_date'] = $request->blog_date;
        $blog['blog_text'] = $request->blog_text;
        $blog['blog_status'] = $request->blog_status;
        $blog->save();
        Session::put('message','    
        Product catalog update successfully');
        return Redirect::to('all-blog');
    }






    //////blog single 
    // public function blog_single(){
    //     $all_category= Category::where('category_status','0')->orderby('category_id','desc')->limit(6)->get();
    //     return view('pages.blog_single');
    // }
    public function blog_single(){
        $all_blog_single1= blog_single::where('blog_single_status','0')->orderby('blog_single_id','desc')->limit(5  )->get();
        $allCategory = category::where('category_status','0')->get();
        $allCategory1 = category::get();
        $all_blog_single= blog_single::where('blog_single_status','0')->orderby('blog_single_id','desc')->limit(1   )->get();
        return view('pages.blog_single',compact('all_blog_single','allCategory','all_blog_single1','allCategory1',));
    }
    
   
    public function add_blog_single(){
        return view('admin.blog-single.add_blog_single');
    }
    public function all_blog_single(){
        $all_blog_single = blog_single::get();

        return view('admin.blog-single.all_blog_single',compact('all_blog_single'));
    }
    public function save_blog_single(Request $request){
            $data = array();
            $data['blog_single_title'] = $request->blog_single_title;
            $data['blog_single_name'] = $request->blog_single_name;
            $data['blog_single_text'] = $request->blog_single_text;
            $data['blog_single_status'] = $request->blog_single_status;
           
            $get_image = $request->file('blog_single_image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.',$get_name_image));
            $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/blog',$new_image);
            $data['blog_single_image'] = $new_image;
            Blog_single::insert($data);
            Session::put('message','Thêm sản phẩm thành công');
            return Redirect::to('all-blog-single');
        }
        $data['blog_single_image'] = '';
        Blog_single::insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('all-blog-single');
    }
    
    public function active_blog_single($blog_single_id){
        blog_single::where('blog_single_id',$blog_single_id)->update(['blog_single_status'=>0]);
        Session::put('message','
        blog-single catalog activation successful');
        return Redirect::to('all-blog-single');
    }
    public function unactive_blog_single($blog_single_id){
        blog_single::where('blog_single_id',$blog_single_id)->update(['blog_single_status'=>1]);
        Session::put('message','
        No blog-single catalog activation successful');
        return Redirect::to('all-blog-single');
    }
    public function edit_blog_single($blog_single_id){
        $edit_blog_single= blog_single::where('blog_single_id',$blog_single_id)->get();
        $manager_blog_single = view('admin.blog-single.edit_blog_single')->with('edit_blog_single',$edit_blog_single);
        return view('admin_layout')->with('admin.blog-single.edit_blog_single', $manager_blog_single);
    
    }
    public function update_blog_single(Request $request,$blog_single_id){
        $data = array();
        $data['blog_single_title'] = $request->blog_single_title;
        $data['blog_single_name'] = $request->blog_single_name;
        $data['blog_single_text'] = $request->blog_single_text;
        $data['blog_single_status'] = $request->blog_single_status;
        $get_image = $request->file('blog_single_image');
   if($get_image){
               $get_name_image = $get_image->getClientOriginalName();
               $name_image = current(explode('.',$get_name_image));
               $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
               $get_image->move('public/uploads/blog',$new_image);
               $data['blog_single_image'] = $new_image;
               Blog_single::where('blog_single_id',$blog_single_id)->update($data);
               Session::put('message','Cập nhật sản phẩm thành công');
               return Redirect::to('all-blog-single');
   }
       
   Blog_single::where('blog_single_id',$blog_single_id)->update($data);
   Session::put('message','Cập nhật sản phẩm thành công');
   return Redirect::to('all-blog-single');
    }
    public function active_product($product_id){
        product::where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message','
        Product catalog activation successful');
        return Redirect::to('all-product');
    }
    public function delete_blog_single($blog_single_id){
        blog_single::where('blog_single_id',$blog_single_id)->delete();
        Session::put('message','
        Delete product product successfully');
        return Redirect::to('all-blog-single');
    }
}
