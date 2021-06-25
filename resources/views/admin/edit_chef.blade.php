@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           UPDATE CHEF
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
                                @foreach($edit_chef as $key => $chef)
                                <form role="form" action="{{URL::to('/update-chef/'.$chef->chef_id)}}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NAME CHEF</label>
                                    <input type="text" name="chef_name" class="form-control" id="exampleInputEmail1" value="{{$chef->chef_name}}">
                                </div>
                                 
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">IMAGE CHEF</label>
                                    <input type="file" name="chef_image" class="form-control" id="exampleInputEmail1">
                                    <img src="{{URL::to('public/uploads/chef/'.$chef->chef_image)}}" height="100" width="100">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DESCRIPT CHEF</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="chef_desc" id="exampleInputPassword1">{{$chef->chef_desc}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">FACEBOOK CHEF</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="chef_fb" id="exampleInputPassword1">{{$chef->chef_fb}}</textarea>
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">twitter CHEF</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="chef_tiw" id="exampleInputPassword1">{{$chef->chef_tiw}}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">GOOGLE CHEF</label>
                                    <textarea style="resize: none" rows="8" class="form-control" name="chef_gg" id="exampleInputPassword1">{{$chef->chef_gg}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DISPLAY</label>
                                      <select name="chef_status" class="form-control input-sm m-bot15">
                                            <option value="0">HIDE</option>
                                            <option value="1">DISPLAY</option>
                                    </select>
                                </div>
                               
                                 
                               
                                <button type="submit" name="add_chef" class="btn btn-info">UPDATE CHEF</button>
                                </form>
                                @endforeach
                            </div>

                        </div>
                    </section>

            </div>
@endsection