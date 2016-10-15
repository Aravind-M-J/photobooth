@extends('frontend.layouts.layout')
@section('body')
<!-- banner -->
    <div class="banner1">
        <div class="container">
            <h2 class="animated wow slideInLeft" data-wow-delay=".5s"><a href="index.html">Home</a> / <span>Blogs</span></h2>
        </div>
    </div>
<!-- //banner -->
<!-- mail -->
</div>
    <div class="mail">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12 abo">
                <h2 class="mail_h">Our <span class="mail_h_col"> Blogs</span></h2>
            </div>
            @foreach($data as $blog)
            <div class="img col-md-4" style='height:60px'>
                <br><br><br>
            </div>
            <div class="mail-grids">
                <div class="col-md-12 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s" >
                    <div class="img col-md-4" style='height:270px'>
                        <img class="img_s" src="{{url('images/'.$blog->blog_img)}}" alt="img" style='max-height:100%, max-width:100%;'>
                    </div>
                    <div class="img col-md-8">
                        <div class="autoheight col-md-12 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s" style='height:200px'>
                            <h3 class="justify" >{{$blog->blog_cont}}</h3>
                            <br>
                        </div>
                        <div style='float:left;'>
                            <br>
                            <input type="submit" value="Read more" style='width:100px;' >
                        </div>
                    </div>
                </div>
            </div><br><br><br><br>
            @endforeach
            <!--div class="img col-md-4" style='height:100px'>
                <br><br><br>
            </div>
            <div class="mail-grids">
                <div class="col-md-12 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s" >
                    <div class="img col-md-4" style='height:270px'>
                        <img class="img_s" src="images/aa.jpg" alt="img" style='max-height:100%, max-width:100%;'>
                    </div>
                    <div class="img col-md-8">
                        <div class="autoheight col-md-12 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s" style='height:200px'>
                            <h3 class="justify" >e 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, n printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remly remly unchanged. popularised in the 1960s with the release of Letraset</h3>
                            <br>
                        </div>
                        <div style='float:left;'>
                            <br>
                            <input type="submit" value="Read more" style='width:100px;' >
                        </div>
                    </div>
                </div>
            </div>
            <div class="img col-md-4" style='height:100px'>
                <br><br><br>
            </div>
            <div class="mail-grids">
                <div class="col-md-12 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s" >
                    <div class="img col-md-4" style='height:270px'>
                        <img class="img_s" src="images/aa.jpg" alt="img" style='max-height:100%, max-width:100%;'>
                    </div>
                    <div class="img col-md-8">
                        <div class="autoheight col-md-12 mail-grid-left animated wow slideInLeft" data-wow-delay=".5s" style='height:200px'>
                            <h3 class="justify" >e 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, n printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remly remly unchanged. popularised in the 1960s with the release of Letraset</h3>
                            <br>
                        </div>
                        <div style='float:left;'>
                            <br>
                            <input type="submit" value="Read more" style='width:100px;' >
                        </div>
                    </div>
                </div>
            </div>
            <div class="img col-md-4" style='height:100px'>
                <br><br><br>
            </div-->
        </div>
    </div>
<!-- //mail -->
@endsection