@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                         ADD CATEGORY
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
                                <form role="form" action="{{URL::to('/save-category')}}" method="post">
                                    {{ csrf_field() }}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">NAME CATEGORY</label>
                                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1" placeholder="name category">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Slug</label>
                                    <input type="text" name="category_slug" class="form-control" id="exampleInputEmail1" placeholder="name category">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DESC CATEGORY</label>
                                    <textarea style="resize: none" rows="8" class="form-control"
                                     name="category_desc" id="exampleInputPassword1" placeholder="
                                     describe category"></textarea>
                                </div>
                                {{-- <div class="form-group">
                                    <label for="exampleInputPassword1">Từ Khóa danh mục</label>
                                    <textarea style="resize: none" rows="8" class="form-control"
                                     name="category_product_keywords" id="exampleInputPassword1" placeholder="Từ Khóa danh mục"></textarea>
                                </div> --}}
                                <div class="form-group">
                                    <label for="exampleInputPassword1">DISLAY</label>
                                      <select name="category_status" class="form-control input-sm m-bot15">
                                            <option value="0">HIDE</option>
                                            <option value="1">DISLAY</option>
                                            
                                    </select>
                                </div>
                               
                                <button type="submit" name="add_category" class="btn btn-info">Thêm danh mục</button>
                                </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection