@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           ADD BLOG
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
                                <form role="form" action="{{URL::to('/save-blog')}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">BLOG TITLE</label>
                                    <input type="text" name="blog_title" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">BLOG POST</label>
                                    <input type="text" name="blog_post" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                     
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">BLOG DATE</label>
                                    <input type="text" name="blog_date" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">BLOG TEXT</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="blog_text" id="exampleInputPassword1" placeholder="Mô tả sản phẩm"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DISPLAY</label>
                                      <select name="blog_status" class="form-control input-sm m-bot15">
                                            <option value="0">HIDE</option>
                                            <option value="1">DISPLAY</option>
                                    </select>
                                </div>
                               
                                <button type="submit"  class="btn btn-info">ADD BLOG</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection