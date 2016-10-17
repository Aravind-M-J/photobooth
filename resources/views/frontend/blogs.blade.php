@extends('frontend.layouts.layout')
@section('Blogs','menu__item--current')
@section('body')
    <div class="mail">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12 abo">
                <h2 class="mail_h">Our <span class="mail_h_col"> Blogs</span></h2>
            </div>
            <div class="img col-md-4" style='height:10px'>
                <br><br><br>
            </div>
        </div>
    </div>

    @foreach($data as $blog)
    <div class="container blogcontainer blog-grid-left animated wow slideInLeft" data-wow-delay=".5s">
            <div class="col-md-12 blog-grid-left animated wow slideInLeft backgroundDiv" data-wow-delay=".5s">
                <div class="img col-md-4">
                    <img class="img_s" src="{{url('images/'.$blog->blog_img)}}" alt="img" style="height: 100%"><br>
                </div>
                <div class="img col-md-8">
                    <div col-md-12 mail-grid-left>
                        <h2 class="blog_heading">{{$blog->blog_title}}</h2><br>
                    </div>
                    <div class="autoheight col-md-12 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s" >

                        <h4 class="justify panel-body pane_text" >{{substr($blog->blog_cont,0,100)}}...</h4>

                        <h4 class="justify" >{{substr($blog->blog_cont,0,300)}}...</h4>

                        <br>
                    </div>
                    <div class="read-more-button con_cont foo-right">
                        <br>
                        <a href="{{url('Blog/'.$blog->id)}}">
                        <button class="read-more-button-color" style='width:100px; color:#000;' >Read more</button>
                        </a>
                    </div>
                </div>
            </div>
    </div>
    <br><br>
    @endforeach
@endsection