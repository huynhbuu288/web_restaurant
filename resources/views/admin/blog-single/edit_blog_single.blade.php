@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           UPDATE BLOG SINGLE
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
                                @foreach($edit_blog_single as $blog_single)
                                <form role="form" action="{{URL::to('/update-blog-single/'.$blog_single->blog_single_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">IMAGE BLOG SINGLE</label>
                                        <input type="file" name="blog_single_image" class="form-control" id="exampleInputEmail1" >
                                        <img src="{{URL::to('public/uploads/blog/'.$blog_single->blog_single_image)}}" height="100" width="100">
                                    </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">BLOG SINGLE TITLE</label>
                                    <input type="text" name="blog_single_title" class="form-control" id="exampleInputEmail1" value="{{$blog_single->blog_single_title}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">BLOG SINGLE NAME</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="blog_single_name" id="exampleInputPassword1">{{$blog_single->blog_single_name}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">BLOG SINGLE TEXT</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="blog_single_text" id="exampleInputPassword1">{{$blog_single->blog_single_text}}</textarea>
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DISPLAY</label>
                                      <select name="blog_single_status" class="form-control input-sm m-bot15">
                                            <option value="0">HIDE</option>
                                            <option value="1">DISPLAY</option>
                                    </select>
                                </div>
                               
                                 
                               
                                <button type="submit" name="add_blog" class="btn btn-info">UPDATE blog</button>
                                </form>
                                @endforeach
                            </div>

                        </div>
                    </section>

            </div>
@endsection