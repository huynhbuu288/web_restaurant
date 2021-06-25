<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    // public function menu(){
    //     return view('pages.menu');
    // }
    public function categoryMenu(){
        $all_category = Category::where('category_status','0')->orderby('category_id','desc')->get();
        $all_product = Product::where('product_status','0')->orderby('product_id','desc')->limit(6)->get();
    
        return view('pages.menu',compact('all_category'),compact('all_product'));

    }

}
