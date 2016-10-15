@extends('frontend.layouts.layout')
@section('body')
<div class="mail">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12 abo">
                <h2 class="mail_h">Our <span class="mail_h_col"> Blogs</span></h2>
            </div>
            <div class="img col-md-4" style='height:60px'>
                <br><br><br>
            </div>
        </div>

        <div class="container blogcontainer">
            @foreach($data as $blog)
            <div class="mail-grids">
                <div class="col-md-12 mail-grid-left animated wow slideInLeft backgroundDiv" data-wow-delay=".5s">
                    <div class="img col-md-4" style='height:270px'>
                        <img class="img_s" src="{{url('images/'.$blog->blog_img)}}" alt="img" style='max-height:100%, max-width:100%;'><br>
                    </div>
                    <div class="img col-md-8">
                        <div class="autoheight col-md-12 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s" style='height:200px'>
                            <h3 class="justify" >{{$blog->blog_cont}}</h3>
                            <br>
                        </div>
                        <div class="read-more-button con_cont foo-right">
                            <br>
                            <input class="read-more-button-color" type="submit" value="Read more" >
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection