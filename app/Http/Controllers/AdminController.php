<?php
use Model\Login;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
use DB;
class AdminController extends Controller
{
    // public function AuthLogin(){
    //     $admin_id = Session::get('admin_id');
    //     if($admin_id){
    //         return Redirect::to('dashboard');
    //     }else{
    //         return Redirect::to('admin')->send();
    //     }
    // }
    public function index(){
        return view('admin_login');
    }
    public function show_dashboard(){
       
    	return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('admin')
        ->where('admin_email',$admin_email)
        ->where('admin_password',$admin_password)->first();
        if ($result){
            Session::put('admin_name',$result->admin_name);
            Session::put('admin_id',$result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','Mật khẩu hoặc tài khoản bị sai.Làm ơn nhập lại');
            return Redirect::to('/admin');
        }

        return view('admin.dashboard');

        // $data = $request->all();
    	// $admin_email = $data['admin_email'];
    	// $admin_password = md5($data['admin_password']);
    	// $login = Login::where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
    	// $login_count = $login->count();
        // if($login_count){
        //     Session::put('admin_name',$login->admin_name);
        //     Session::put('admin_id',$login->admin_id);
        //     return Redirect::to('/dashboard');
        // }else{
        //     Session::put('message','Mật khẩu hoặc tài khoản bị sai.Làm ơn nhập lại');
        //     return Redirect::to('/admin');
        // }

    }
    public function logout(){
       
        Session::put('admin_name',null);
        Session::put('admin_id',null);
        return Redirect::to('/admin');
    }
}
