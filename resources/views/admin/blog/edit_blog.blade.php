@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           UPDATE blog
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
                                @foreach($edit_blog as $key => $blog)
                                <form role="form" action="{{URL::to('/update-blog/'.$blog->blog_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">BLOG TITLE</label>
                                    <input type="text" name="blog_title" class="form-control" id="exampleInputEmail1" value="{{$blog->blog_name}}">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputPassword1">BLOG POST</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="blog_post" id="exampleInputPassword1">{{$blog->blog_desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">BLOG DATE</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="blog_date" id="exampleInputPassword1">{{$blog->blog_fb}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">BLOG TEXT</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="blog_text" id="exampleInputPassword1">{{$blog->blog_tiw}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DISPLAY</label>
                                      <select name="blog_status" class="form-control input-sm m-bot15">
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