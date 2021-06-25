<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Chef;

use Session;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
session_start();
class PagesController extends Controller
{
    public function chef(){
        $all_chef= Chef::where('chef_status','0')->orderby('chef_id','desc')->limit(6)->get();
        return view('pages.chef',compact('all_chef'));
    }

}
