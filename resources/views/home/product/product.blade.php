@extends('home.layout.home')
@section('style')
    <link rel="stylesheet" href="{{asset('home/css/common/aboutus.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/common/product.css')}}">
@endsection
@section('content')
<!--about_us start-->
<div class="common product_manage">
    <div class="inner_banner">
        <img src="{{asset('home/images/inner_banner.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="hidden-xs hidden-sm col-md-3 left_side">
                <div class="bgc">
                    <div class="common_bar">
                        <h3>产品管理</h3>
                        <h5>Product Management</h5>
                    </div>
                    <div class="common_list">
                        <ul class="big lists_bar">
                            <li class="active"><a href="javascript:void(0);">产品一</a></li>
                            <li><a href="javascript:void(0);">产品二</a></li>
                            <li><a href="javascript:void(0);">产品三</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 hidden-md hidden-lg left_mini">
                <div class="common_list dropdown">
                    <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">产品列表
                        <span class="caret"></span>
                    </button>
                    <ul class="small lists_bar dropdown-menu" role="menu"  aria-labelledby="dropdownMenu1">
                        <li role="presentation" class="active"><a href="javascript:void(0);">产品一</a></li>
                        <li role="presentation"><a href="javascript:void(0);">产品二</a></li>
                        <li role="presentation"><a href="javascript:void(0);">产品三</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-9 product_right right_side">
                <h3>产品管理</h3>
                <div class="bgc">
                    <div class="row product_imgs">
                        <div class="col-xs-12 col-sm-9 img_big">
                            <div id="myCarousel" class="carousel slide">
                                <div class="arrow left_arrow" href="#myCarousel" role="button" data-slide="prev">
                                    <img src="{{asset('home/images/left.png')}}" alt="">
                                </div>
                                <div class="arrow right_arrow" href="#myCarousel" role="button" data-slide="next">
                                    <img src="{{asset('home/images/right.png')}}" alt="">
                                </div>
                                <div class="bigimg_lists carousel-inner">
                                    <div class="item active">
                                        <img src="{{asset('home/images/product_inner_big.png')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('home/images/product_inner_big.png')}}" alt="">
                                    </div>
                                    <div class="item">
                                        <img src="{{asset('home/images/product_inner_big.png')}}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs col-sm-3 img_small">
                            <ul>
                                <li>
                                    <img src="{{asset('home/images/product_inner_small.png')}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset('home/images/product_inner_small.png')}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset('home/images/product_inner_small.png')}}" alt="">
                                </li>
                                <li>
                                    <img src="{{asset('home/images/product_inner_small.png')}}" alt="">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product_content">
                        <h5 class="product_way">自主研发</h5>
                        <div class="product_name">
                            <h3 class="cname">快速DNA链接试剂盒</h3>
                            <h3 class="usname">Rapid T4 DNA ligase</h3>
                        </div>
                        <div class="product_details">为了获得快速高效的连接效果，本试剂盒采用了一种特殊的高活力DNA连接酶，即Rapid T4 DNA ligase，确保在短时间内可以获得很好的连接效果。</div>
                        <div class="product_work">
                            <h4>产品用途</h4>
                            <ul class="work_lists">
                                <li>用于实验中，作为介质传输</li>
                                <li>用于实验中，作为介质传输</li>
                                <li>用于实验中，作为介质传输</li>
                                <li>用于实验中，作为介质传输</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    
<!--about_us end-->
    @section('script')
<script src="{{asset('home/js/common/product.js')}}"></script>
@endsection
@endsection