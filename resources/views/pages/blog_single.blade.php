@extends('front')
@section('content')
	

<!-- Start All Pages -->


<!-- Start blog details -->
<div class="blog-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                     
                    <h3>Blog</h3>
                    <h2>Blog</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-12">
                <div class="blog-inner-details-page">
                    @foreach($all_blog_single as $blog_single)
                    <div class="blog-inner-box">
                        <div class="side-blog-img">
                            <img class="img-fluid" style="max-height:400px; width:100%;"
                             src="{{URL::to('public/uploads/blog/'.$blog_single->blog_single_image)}}" alt="">							
                            <div class="date-blog-up">
                                HOT
                            </div>
                        </div>
                        <div class="inner-blog-detail details-page">
                            <h3>{{$blog_single->blog_single_title}}</h3>
                            <ul>
                                <li><i class="zmdi zmdi-account"></i>Posted By : <span>{{$blog_single->blog_single_name}}</span></li>
                                <li>|</li>
                              
                            </ul>
                            <p>{{$blog_single->blog_single_text}}</p>
                        </div>
                    </div>
                    @endforeach
                    <div class="blog-comment-box">
                        <h3>Comments</h3>
                        <div class="comment-item">
                            <div class="comment-item-left">
                                <img src="{{('public/images/avt-img.jpg')}}" alt="">
                            </div>
                            <div class="comment-item-right">
                                <div class="pull-left">
                                    <a href="#">Rubel Ahmed</a>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>11.30 am</span>
                                </div>
                                <div class="des-l">
                                    <p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius urna. In auctor.</p>
                                </div>
                                <a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                            </div>
                        </div>
                        <div class="comment-item children">
                            <div class="comment-item-left">
                                <img src="{{('public/images/avt-img.jpg')}}" alt="">
                            </div>
                            <div class="comment-item-right">
                                <div class="pull-left">
                                    <a href="#">Admin</a>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>1.30 pm</span>
                                </div>
                                <div class="des-l">
                                    <p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius urna. In auctor.</p>
                                </div>
                                <a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                            </div>
                        </div>
                        <div class="comment-item">
                            <div class="comment-item-left">
                                <img src="{{('public/images/avt-img.jpg')}}" alt="">
                            </div>
                            <div class="comment-item-right">
                                <div class="pull-left">
                                    <a href="#">Rubel Ahmed</a>
                                </div>
                                <div class="pull-right">
                                    <i class="fa fa-clock-o" aria-hidden="true"></i>Time : <span>11.30 am</span>
                                </div>
                                <div class="des-l">
                                    <p>Morbi lacinia ultrices lorem id tincidunt. Cras id dui risus. Pellentesque consectetur id mi sed pharetra. Proin imperdiet gravida nisl, sit amet varius urna. In auctor.</p>
                                </div>
                                <a href="#" class="right-btn-re"><i class="fa fa-reply" aria-hidden="true"></i> Reply</a>
                            </div>
                        </div>
                    </div>
                    <div class="comment-respond-box">
                        <h3>Leave your comment </h3>
                        <div class="comment-respond-form">
                            <form id="commentrespondform" class="comment-form-respond row" method="post">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <input id="name_com" class="form-control" name="name" placeholder="Name" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input id="email_com" class="form-control" name="email" placeholder="Your Email" type="email">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                        <textarea class="form-control" id="textarea_com" placeholder="Your Message" rows="2"></textarea>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <button class="btn btn-submit">Submit comment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-8 col-12 blog-sidebar">
                <div class="right-side-blog">
                    <h3>Search</h3>
                    <div class="blog-search-form">
                        <input name="search" placeholder="Search blog" type="text">
                        <button class="search-btn">
                            <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                    </div>
                    <h3>Categories</h3>
                    @foreach($allCategory as $cat)
                    <div class="blog-categories" style="pading: 8px; margin: 0; ">
                        <ul>
                            <li><a href="#"><span>{{$cat->category_name}}</span></a></li>
                            
                        </ul>
                    </div>
                    @endforeach
                    <h3>Recent Post</h3>
                    @foreach($all_blog_single1 as $blog_single1)
                    <div class="post-box-blog">
                            <div class="recent-box-blog">
                                <a href="{{URL::to('/blog-single/'.$blog_single1->blog_single_id)}}">
                                <div class="recent-img">
                                    <img class="img-fluid" style="width: 100px; height: 100px" ;
                                    src="{{URL::to('public/uploads/blog/'.$blog_single1->blog_single_image)}}" alt="">
                                </div></a>
                                <div class="recent-info">
                                    <ul>
                                        <li><i class="zmdi zmdi-account"></i>Posted By : <span>{{$blog_single1->blog_single_name}}</span></li>
                                        <li>|</li>
                                       
                                    </ul>
                                  <h4> <a href="">{{$blog_single->blog_single_title}}</a></h4>
                                </div>
                            </div>
                        </div>
                   
                    @endforeach
                    <h3>Recent Tag</h3>
                    @foreach($allCategory1 as $cat1)
                    <div class="blog-tag-box" style="float:left">
                        <ul class="list-inline tag-list">
                            <li class="list-inline-item"><a href="#">{{$cat1->category_name}}</a></li>
                        </ul> 
                    </div>
                    @endforeach
                    
                </div>
            </div>
        
        </div>
    </div>
</div>
<!-- End details -->

<!-- Start Contact info -->
<div class="contact-imfo-box">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <i class="fa fa-volume-control-phone"></i>
                <div class="overflow-hidden">
                    <h4>Phone</h4>
                    <p class="lead">
                        +01 123-456-4590
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <i class="fa fa-envelope"></i>
                <div class="overflow-hidden">
                    <h4>Email</h4>
                    <p class="lead">
                        yourmail@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <i class="fa fa-map-marker"></i>
                <div class="overflow-hidden">
                    <h4>Location</h4>
                    <p class="lead">
                        800, Lorem Street, US
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contact info -->
@endsection