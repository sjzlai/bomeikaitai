@extends('home.layout.home')
@section('style')
    <link rel="stylesheet" href="{{asset('home/css/common/aboutus.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/common/business.css')}}">
@endsection
@section('content')
<!--about_us start-->
<div class="common business">
    <div class="inner_banner">
        <img src="{{asset('home/images/inner_banner.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="hidden-xs hidden-sm col-md-3 left_side">
                <div class="bgc">
                    <div class="common_bar">
                        <h3>业务合作</h3>
                        <h5>Business Cooperation</h5>
                    </div>
                    <div class="common_list">
                        <ul class="lists_bar">
                            <li class="active"><a href="./company_news.html">业务合作</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 hidden-md hidden-lg left_mini">
                <div class="list_mini">
                    <ul class="mini_bar">
                        <li class="active"><a href="./company_news.html">业务合作</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-9 business_right right_side">
                <h3>业务合作</h3>
                <div class="bgc">

                    <div id="myCarousel" class="carousel slide">
                        <div class="bigimg_lists carousel-inner">
                            <div class="item active">
                                <h4>博美开泰以其领先的产品管线，在中国和全球范围内寻找技术转让和联合开发。</h4>
                                {{--<div class="row logo_images">
                                    <div class="col-xs-6 col-sm-3 logo_cell">
                                        <img src="{{asset('home/images/partner.png')}}" alt="">
                                    </div>
                                    <div class="col-xs-6 col-sm-3 logo_cell">
                                        <img src="{{asset('home/images/partner.png')}}" alt="">
                                    </div>
                                    <div class="col-xs-6 col-sm-3 logo_cell">
                                        <img src="{{asset('home/images/partner.png')}}" alt="">
                                    </div>
                                    <div class="col-xs-6 col-sm-3 logo_cell">
                                        <img src="{{asset('home/images/partner.png')}}" alt="">
                                    </div>
                                </div>--}}
                                <div class="row logo_images">
                                </div>
                                <div class="row logo_images">
                                </div>
                            </div>
                            <div class="item">
                                <div class="row logo_images">
                                </div>
                                <div class="row logo_images">
                                </div>
                            </div>
                        </div>
                        <ol class="carousel-indicators click_cell">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            {{--<li data-target="#myCarousel" data-slide-to="1"></li>--}}
                        </ol> 
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>    
<!--about_us end-->
@section('script')
@endsection
@endsection