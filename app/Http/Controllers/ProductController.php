<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;

use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class ProductController extends Controller
{
    public function add_product(){
        $cate_product = Category::orderby('category_id','desc')->get(); 
        return view('admin.add_product')->with('cate_product', $cate_product);
    }
    public function all_product(){
    
    	$all_product = product::
        join('tbl_category','tbl_category.category_id','=','tbl_product.category_id')
        
        ->orderby('tbl_product.product_id','desc')->paginate(5);
    	$manager_product  = view('admin.all_product')->with('all_product',$all_product);
    	return view('admin_layout')->with('admin.all_product', $manager_product);

    }
    public function save_product(Request $request){
        $data = array();
    	$data['product_name'] = $request->product_name;
        $data['product_slug'] = $request->product_slug;
    	$data['product_price'] = $request->product_price;
    	$data['product_desc'] = $request->product_desc;
        $data['category_id'] = $request->category_product;
        $data['product_status'] = $request->product_status;
        $get_image = $request->file('product_image');
    if($get_image){
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('public/uploads/product',$new_image);
        $data['product_image'] = $new_image;
        Product::insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('all-product');
    }
    $data['product_image'] = '';
    Product::insert($data);
    Session::put('message','Thêm sản phẩm thành công');
    return Redirect::to('all-product');
}
public function update_product(Request $request,$product_id){
 
   $data = array();
   $data['product_name'] = $request->product_name;
   $data['product_slug'] = $request->product_slug;
   $data['product_price'] = $request->product_price;
   $data['product_desc'] = $request->product_desc;
   $data['category_id'] = $request->category_product;
   $get_image = $request->file('product_image');
   if($get_image){
               $get_name_image = $get_image->getClientOriginalName();
               $name_image = current(explode('.',$get_name_image));
               $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
               $get_image->move('public/uploads/product',$new_image);
               $data['product_image'] = $new_image;
               product::where('product_id',$product_id)->update($data);
               Session::put('message','Cập nhật sản phẩm thành công');
               return Redirect::to('all-product');
   }
       
   product::where('product_id',$product_id)->update($data);
   Session::put('message','Cập nhật sản phẩm thành công');
   return Redirect::to('all-product');
    }
    public function active_product($product_id){
        product::where('product_id',$product_id)->update(['product_status'=>0]);
        Session::put('message','
        Product catalog activation successful');
        return Redirect::to('all-product');
    }
    public function unactive_product($product_id){
        product::where('product_id',$product_id)->update(['product_status'=>1]);
        Session::put('message','
        No Product catalog activation successful');
        return Redirect::to('all-product');
    }
    public function edit_product($product_id){
       $cate_product = Category::orderby('category_id','desc')->get(); 
       $edit_product = Product::where('product_id',$product_id)->get();
       $manager_product  = view('admin.edit_product')->with('edit_product',$edit_product)->with('cate_product',$cate_product);

       return view('admin_layout')->with('admin.edit_product', $manager_product);
   }
    public function delete_product($product_id){
        product::where('product_id',$product_id)->delete();
        Session::put('message','
        Delete product product successfully');
        return Redirect::to('all-product');
    }
}
