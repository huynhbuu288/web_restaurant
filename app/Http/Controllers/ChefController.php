<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChefController extends Controller
{
    public function chef(){
        return view('pages.chef');
    }
    public function add_chef(){
        return view('admin.add_chef');
    }
    public function all_chef(){
        return view('admin.all_chef');
    }
 
    public function save_chef(Request $request){
    $data = array();
    $data['chef_name'] = $request->chef_name;
    $data['chef_desc'] = $request->chef_desc;
    $data['chef_fb'] = $request->chef_fb;
    $data['chef_tiw'] = $request->chef_tiw;
    $data['chef_gg'] = $request->chef_gg;
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
}