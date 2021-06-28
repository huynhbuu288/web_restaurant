<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes(['verify' => true]);
// Route::get('logoutadmin', 'App\Http\Controllers\Auth\LogoutController@getLogoutAdmin');
Route::get('logoutpage', 'App\Http\Controllers\LogoutController@getLogoutPage');

Route::get('/', function () {
    return view('master');
});


//fontend
Route::get('/menu','App\Http\Controllers\MenuController@menu');

//Blog
Route::get('/blog','App\Http\Controllers\BlogController@blog');
Route::get('/blog-single','App\Http\Controllers\BlogController@blog_single');


//Stuff
Route::get('/chef','App\Http\Controllers\ChefController@chef');


//Reservation
Route::get('/reservation','App\Http\Controllers\Reservation@reservation');

//contact
Route::get('/contact','App\Http\Controllers\ContactController@contact');




//backend

Auth::routes();
Route::get('/admin','App\Http\Controllers\AdminController@index');
Route::get('/dashboard','App\Http\Controllers\AdminController@show_dashboard');
Route::get('/logout','App\Http\Controllers\AdminController@logout');
Route::post('/admin-dashboard','App\Http\Controllers\AdminController@dashboard');

//product
Route::get('/add-product','App\Http\Controllers\ProductController@add_product');
Route::get('/all-product','App\Http\Controllers\ProductController@all_product');

Route::post('/save-product','App\Http\Controllers\ProductController@save_product');

Route::get('/unactive-product/{product_id}','App\Http\Controllers\ProductController@unactive_product');
Route::get('/active-product/{product_id}','App\Http\Controllers\ProductController@active_product');

Route::post('/update-product/{product_id}','App\Http\Controllers\ProductController@update_product');

Route::get('/edit-product/{product_id}','App\Http\Controllers\ProductController@edit_product');
Route::get('/delete-product/{product_id}','App\Http\Controllers\ProductController@delete_product');



//category
Route::get('/add-category','App\Http\Controllers\CategoryController@add_category');
Route::get('/all-category','App\Http\Controllers\CategoryController@all_category');

Route::post('/save-category','App\Http\Controllers\CategoryController@save_category');

Route::get('/unactive-category/{category_id}','App\Http\Controllers\CategoryController@unactive_category');
Route::get('/active-category/{category_id}','App\Http\Controllers\CategoryController@active_category');

Route::post('/update-category/{category_id}','App\Http\Controllers\CategoryController@update_category');

Route::get('/edit-category/{category_id}','App\Http\Controllers\CategoryController@edit_category');
Route::get('/delete-category/{category_id}','App\Http\Controllers\CategoryController@delete_category');




////////////////////////////////
Route::get('/category-product/{category_id}','App\Http\Controllers\CategoryController@show_category_menu');

// Route::get('/chi-tiet/{product_slug}','ProductController@details_product');

Route::get('/menu','App\Http\Controllers\MenuController@categoryMenu');
Route::get('/chef','App\Http\Controllers\PagesController@chef');


///chef
Route::get('/add-chef','App\Http\Controllers\ChefController@add_chef');
Route::get('/all-chef','App\Http\Controllers\ChefController@all_chef');

Route::post('/save-chef','App\Http\Controllers\ChefController@save_chef');

Route::get('/unactive-chef/{chef_id}','App\Http\Controllers\ChefController@unactive_chef');
Route::get('/active-chef/{chef_id}','App\Http\Controllers\ChefController@active_chef');

Route::get('/edit-chef/{chef_id}','App\Http\Controllers\ChefController@edit_chef');
Route::get('/delete-chef/{chef_id}','App\Http\Controllers\ChefController@delete_chef');

Route::post('/update-chef/{chef_id}','App\Http\Controllers\ChefController@update_chef');


//order
Route::get('/order-table','App\Http\Controllers\OrderController@order_table');
// Route::get('/manage-order','App\Http\Controllers\OrderController@manage_order');

///BLOG
Route::get('/add-blog','App\Http\Controllers\BlogController@add_blog');
Route::get('/all-blog','App\Http\Controllers\BlogController@all_blog');

Route::post('/save-blog','App\Http\Controllers\BlogController@save_blog');

Route::get('/unactive-blog/{blog_id}','App\Http\Controllers\BlogController@unactive_blog');
Route::get('/active-blog/{blog_id}','App\Http\Controllers\BlogController@active_blog');

Route::get('/edit-blog/{blog_id}','App\Http\Controllers\BlogController@edit_blog');
Route::get('/delete-blog/{blog_id}','App\Http\Controllers\BlogController@delete_blog');

Route::post('/update-blog/{blog_id}','App\Http\Controllers\BlogController@update_blog');

///BLOG-SINGLE
Route::get('/add-blog-single','App\Http\Controllers\BlogController@add_blog_single');
Route::get('/all-blog-single','App\Http\Controllers\BlogController@all_blog_single');

Route::post('/save-blog-single','App\Http\Controllers\BlogController@save_blog_single');

Route::get('/unactive-blog-single/{blog_single_id}','App\Http\Controllers\BlogController@unactive_blog_single');
Route::get('/active-blog-single/{blog_single_id}','App\Http\Controllers\BlogController@active_blog_single');

Route::get('/edit-blog-single/{blog_single_id}','App\Http\Controllers\BlogController@edit_blog_single');
Route::get('/delete-blog-single/{blog_single_id}','App\Http\Controllers\BlogController@delete_blog_single');

Route::post('/update-blog-single/{blog_single_id}','App\Http\Controllers\BlogController@update_blog_single');