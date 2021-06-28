<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function order_table(){
        return view('admin.order.view_order');
    }
    // public function order_table(Request $request){
    // 	$data = array();
    // 	$data['date_order'] = $request->date_order;
    // 	$data['time_order'] = $request->time_order;
    // 	$data['number_order'] = $request->number_order;
    //     $data['user_name'] = $request->number_order;
    //     $data['user_email'] = $request->number_order;
    //     $data['user_phone'] = $request->number_order;
    	
    // 	$customer_id = DB::table('tbl_customers')->insertGetId($data);

    // 	Session::put('customer_id',$customer_id);
    // 	Session::put('customer_name',$request->customer_name);
    // 	return Redirect::to('/checkout');


    // }
}
