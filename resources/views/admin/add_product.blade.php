@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           Thêm sản phẩm
                        </header>
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NAME PRODUCT</label>
                                    <input type="text" name="product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">SLUG</label>
                                    <input type="text" name="product_slug" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                     <div class="form-group">
                                    <label for="exampleInputEmail1">PRICE PRODUCT</label>
                                    <input type="number" name="product_price" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">IMAGE PRODUCT</label>
                                    <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DESCRIPT PRODUCT</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="product_desc" id="exampleInputPassword1" placeholder="Mô tả sản phẩm"></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">STATUS PRODUCT</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="product_status" id="exampleInputPassword1" placeholder="Nội dung sản phẩm"></textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">CATEGORY </label>
                                      <select name="category_product" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            <option value="{{$cate->category_id}}">{{$cate->category_name}}</option>
                                        @endforeach      
                                    </select>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DISPLAY</label>
                                      <select name="product_status" class="form-control input-sm m-bot15">
                                            <option value="0">HIDE</option>
                                            <option value="1">DISPLAY</option>
                                            
                                    </select>
                                </div>
                               
                                <button type="submit"  class="btn btn-info">ADD PRODUCT</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection