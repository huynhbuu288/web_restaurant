<?php

namespace App\Http\Controllers;
use Session;
use App\Product;
use App\Chef;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();
class ChefController extends Controller
{
    public function chef(){
        return view('pages.chef');
    }
    public function add_chef(){
        return view('admin.add_chef');
    }
    public function all_chef(){
        $all_chef = Chef::get();
        return view('admin.all_chef', compact('all_chef'));
    }
 
    public function save_chef(Request $request){
    $data = array();
    $data['chef_name'] = $request->chef_name;
    $data['chef_desc'] = $request->chef_desc;
    $data['chef_fb'] = $request->chef_fb;
    $data['chef_tiw'] = $request->chef_tiw;
    $data['chef_gg'] = $request->chef_gg;
    $data['chef_status'] = $request->chef_status;

    $get_image = $request->file('chef_image');
    if($get_image){
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move('public/uploads/chef',$new_image);
        $data['chef_image'] = $new_image;
        Chef::insert($data);
        Session::put('message','Thêm sản phẩm thành công');
        return Redirect::to('all-chef');
    }
    $data['chef_image'] = '';
    Chef::insert($data);
    Session::put('message','Thêm sản phẩm thành công');
    return Redirect::to('all-chef');
    }

    public function active_chef($chef_id){
        chef::where('chef_id',$chef_id)->update(['chef_status'=>0]);
        Session::put('message','
        Chef catalog activation successful');
        return Redirect::to('all-chef');
    }
    public function unactive_chef($chef_id){
        chef::where('chef_id',$chef_id)->update(['chef_status'=>1]);
        Session::put('message','
        No Chef catalog activation successful');
        return Redirect::to('all-chef');
    }

    public function edit_chef($chef_id){
        $edit_chef= chef::where('chef_id',$chef_id)->get();
        $manager_chef = view('admin.edit_chef')->with('edit_chef',$edit_chef);
        return view('admin_layout')->with('admin.edit_chef', $manager_chef);
    
    }
    public function delete_chef($chef_id){
        chef::where('chef_id',$chef_id)->delete();
        Session::put('message','
        Delete chef successfully');
        return Redirect::to('all-chef');
    }
    public function update_chef(Request $request,$chef_id){
        $data = array();
        $data['chef_name'] = $request->chef_name;
        $data['chef_desc'] = $request->chef_desc;
        $data['chef_fb'] = $request->chef_fb;
        $data['chef_tiw'] = $request->chef_tiw;
        $data['chef_gg'] = $request->chef_gg;
        $data['chef_status'] = $request->chef_status;
        $get_image = $request->file('chef_image');
        if($get_image){
                    $get_name_image = $get_image->getClientOriginalName();
                    $name_image = current(explode('.',$get_name_image));
                    $new_image =  $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
                    $get_image->move('public/uploads/chef',$new_image);
                    $data['chef_image'] = $new_image;
                    chef::where('chef_id',$chef_id)->update($data);
                    Session::put('message','
                    successful chef update');
                    return Redirect::to('all-chef');
        }
            
        chef::where('chef_id',$chef_id)->update($data);
        Session::put('message','
        successful chef update');
        return Redirect::to('all-chef');
         }
}