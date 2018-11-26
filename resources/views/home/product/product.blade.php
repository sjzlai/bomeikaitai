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
                        {{--//pc--}}
                        <div class="common_list">
                            <ul class="big lists_bar">
                                @foreach($prod as $good)
                                    @if($good->id == $goods->id)
                                        <li class="active"><a href="{{url('product/detail',['id'=>$good->id])}}">{{$good->prod_name}}</a></li>
                                    @else
                                        <li><a href="{{url('product/detail',['id'=>$good->id])}}">{{$good->prod_name}}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                {{--//移动--}}
                <div class="col-xs-12 hidden-md hidden-lg left_mini">
                    <div class="common_list dropdown">
                        <button type="button" class="btn dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown">产品列表
                            <span class="caret"></span>
                        </button>
                        {{--//链接--}}
                        <ul class="small lists_bar dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            @foreach($prod as $good)
                        <li role="presentation" class="active"><a href="{{url('product/detail',['id'=>$good->id])}}">产品一</a></li>
                            @endforeach
                        {{--<li role="presentation"><a href="javascript:void(0);">产品二</a></li>--}}
                        {{--<li role="presentation"><a href="javascript:void(0);">产品三</a></li>--}}
                        </ul>
                    </div>
                </div>
            {{--//产品图片--}}

            <div class="col-xs-12 col-md-9 product_right right_side">
                <h3>产品管理</h3>
                <div class="bgc">
                    <div class="row product_imgs">
                        <div class="col-xs-12 img_big">
                            <div id="myCarousel" class="carousel slide">
                               {{--左箭头--}}
                                <div class="arrow left_arrow" href="#myCarousel" role="button" data-slide="prev">
                                    <img src="{{asset('home/images/left.png')}}" alt="">
                                </div>
                                {{--右箭头--}}
                                <div class="arrow right_arrow" href="#myCarousel" role="button" data-slide="next">
                                    <img src="{{asset('home/images/right.png')}}" alt="">
                                </div>
                                {{--//大图--}}
                                <div class="bigimg_lists carousel-inner">
                                    @foreach($goods->img as $key =>$img)
                                        @if($key ==  0)
                                    <div class="item active">
                                            <img src="{{asset($img['image'])}}" alt="">
                                    </div>
                                        @else
                                            <div class="item">
                                                <img src="{{asset($img->image)}}" alt="">
                                            </div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    //产品信息
                    <div class="product_content">

                        <h5 class="product_way">自主研发</h5>
                        <div class="product_name">
                            <h3 class="cname">{{$goods->prod_name}}</h3>
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
{{--产品信息结束--}}
            </div>
        </div>
    </div>
<!--about_us end-->
@section('script')
<script src="{{asset('home/js/common/product.js')}}"></script>
@endsection
@endsection
