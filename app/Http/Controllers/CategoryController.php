<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class CategoryController extends Controller
{
    public function add_category(){
        return view('admin.add_category');
    }
    public function all_category(){
        $all_category = Category::get();
    	$manager_category  = view('admin.all_category')->with('all_category',$all_category);
    	return view('admin_layout')->with('admin.all_category', $manager_category);
    }
    public function save_category(Request $request){
        $data = $request->all();
        $category = new Category();
        $category['category_name'] = $request->category_name; 
        $category['category_slug'] = $request->category_slug;
        $category['category_desc'] = $request->category_desc;
        $category['category_status'] = $request->category_status;
        $category->save();
    	Session::put('message','Thêm danh mục sản phẩm thành công');
    	return Redirect::to('admin.all_category');
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
    public function active_category($category_id){
        Category::where('category_id',$category_id)->update(['category_status'=>0]);
        Session::put('message','
        Product catalog activation successful');
        return Redirect::to('all-category');
    }
    public function unactive_category($category_id){
        Category::where('category_id',$category_id)->update(['category_status'=>1]);
        Session::put('message','
        No Product catalog activation successful');
        return Redirect::to('all-category');
    }
    public function edit_category($category_id){
        $edit_category= Category::where('category_id',$category_id)->get();
        $manager_category = view('admin.edit_category')->with('edit_category',$edit_category);
        return view('admin_layout')->with('admin.edit_category', $manager_category);
    
    }
    public function delete_category($category_id){
        Category::where('category_id',$category_id)->delete();
        Session::put('message','
        Delete product category successfully');
        return Redirect::to('all-category');

     ///end of function pages
     
     

    }
    public function show_category_menu(Request $request ,$category_id){
        $all_category = Category::where('category_status','0')->orderby('category_id','desc')->get();
        
        $category_by_id = Product::join('tbl_category','tbl_product.category_id','=','tbl_category.category_id')
        ->where('tbl_product.category_id',$category_id)->get();
        return view('pages.category.show_category',compact('all_category'),compact('category_by_id'));
 
        //  $cate_product = category::where('category_status','0')->orderby('category_id','desc')->get(); 
 
        //  $category_by_id = product::join('tbl_category','tbl_product.category_id','=','tbl_category.category_id')->where('tbl_category.category_slug',$category_slug)->paginate(6);
        //  $category_name = category::where('tbl_category.category_slug',$category_slug)->limit(1)->get();
         
 
        //  return view('pages.category.show_category')
        //  ->with('category',$cate_product)->with('category_by_id',$category_by_id)
        //  ->with('category_name',$category_name)->with('meta_desc',$meta_desc);
     
    }
    //  public function export_csv(){
    //      return Excel::download(new ExcelExports , 'category_product.xlsx');
    //  }
    //  public function import_csv(Request $request){
    //      $path = $request->file('file')->getRealPath();
    //      Excel::import(new ExcelImports, $path);
    //      return back();
    //  }
   

}
