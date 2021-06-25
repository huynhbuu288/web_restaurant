@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                           UPDATE CATEGORY
                        </header>
                         <?php
                            $message = Session::get('message');
                            if($message){
                                echo '<span class="text-alert">'.$message.'</span>';
                                Session::put('message',null);
                            }
                            ?>
                        <div class="panel-body">
                            @foreach($edit_category as $key => $edit_value)
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/update-category/'.$edit_value->category_id)}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NAME CATEGORY</label>
                                    <input type="text" value="{{$edit_value->category_name}}" name="category_name" class="form-control" id="exampleInputEmail1" >
                                </div>
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">SLUG</label>
                                    <input type="text" value="{{$edit_value->category_slug}}" name="category_slug" class="form-control" id="exampleInputEmail1" >
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DESCRIP CATEGORY</label>
                                    <textarea style="resize: none" rows="8" class="form-control" 
                                    name="category_desc" id="exampleInputPassword1" >
                                    {{$edit_value->category_desc}}</textarea>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputPassword1">Từ Khóa danh mục</label>
                                    <textarea style="resize: none" rows="8" class="form-control" 
                                    name="category_product_keywords" id="exampleInputPassword1" 
                                     placeholder="Mô tả danh mục">{{$edit_value->meta_keywords}}</textarea>
                                </div> --}}
                               
                                <button type="submit" name="update_category" class="btn btn-info">UPDATE CATEGORY</button>
                                </form>
                            </div>
                            @endforeach
                        </div>
                    </section>

            </div>
@endsection