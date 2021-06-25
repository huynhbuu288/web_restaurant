@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           ADD BLOG-SINGLE
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
                                <form role="form" action="{{URL::to('/save-blog-single')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">IMAGE BLOG SINGLE</label>
                                        <input type="file" name="blog_single_image" class="form-control" id="exampleInputEmail1">
                                    </div>    
                                <div class="form-group">
                                    <label for="exampleInputEmail1">BLOG SINGLE TITLE</label>
                                    <input type="text" name="blog_single_title" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">BLOG SINGLE NAME</label>
                                    <input type="text" name="blog_single_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                     
                            
                                <div class="form-group">
                                    <label for="exampleInputPassword1">BLOG SINGLE TEXT</label>
                                    <textarea style="resize: none" rows="8" class="form-control" 
                                    name="blog_single_text" id="exampleInputPassword1" placeholder="Mô tả sản phẩm"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DISPLAY</label>
                                      <select name="blog_single_status" class="form-control input-sm m-bot15">
                                            <option value="0">HIDE</option>
                                            <option value="1">DISPLAY</option>
                                    </select>
                                </div>  
                               
                                <button type="submit"  class="btn btn-info">ADD BLOG SINGLE</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection