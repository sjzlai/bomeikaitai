@extends('home.layout.home')
@section('style')
    <link rel="stylesheet" href="{{asset('home/css/common/aboutus.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/common/contactUs.css')}}">
@endsection
@section('content')
<!--about_us start-->
<div class="common contact_us">
    <div class="inner_banner">
        <img src="{{asset('home/images/inner_banner.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="hidden-xs hidden-sm col-md-3 left_side">
                <div class="bgc">
                    <div class="common_bar">
                        <h3>联系我们</h3>
                        <h5>Company News</h5>
                    </div>
                    <div class="common_list">
                        <ul class="lists_bar">
                            <li class="active"><a href="./company_news.html">联系我们</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 hidden-md hidden-lg left_mini">
                <div class="list_mini">
                    <ul class="mini_bar">
                        <li class="active"><a href="./company_news.html">联系我们</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-9 contact_right right_side">
                <h3>联系我们</h3>
                <div class="bgc">
                    <div class="msg">联系信息</div>
                    <div class="our_msg">
                        <p class="msg_detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid labore.</p>
                        <div class="contact_methods">
                            <ul class="methods_lists">
                                <li>
                                    <i class="glyphicon glyphicon-map-marker"></i>
                                    <span class="fir">Address:</span>
                                    <span class="sec">Lorem ipsum dolor sit amet</span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-earphone"></i>
                                    <span class="fir">Phone:</span>
                                    <span class="sec">+139 0000 0000</span>
                                </li>
                                <li>
                                    <i class="glyphicon glyphicon-envelope"></i>
                                    <span class="fir">E-mail:</span>
                                    <span class="sec">info@mation.com</span>
                                </li> 
                                <li>
                                    <i class="glyphicon glyphicon-user"></i>
                                    <span class="fir">Follow:</span>
                                    <span class="icon_small"> 
                                        <i class="glyphicon glyphicon-camera"></i>
                                        <i class="glyphicon glyphicon-camera"></i>
                                        <i class="glyphicon glyphicon-camera"></i>
                                        <i class="glyphicon glyphicon-camera"></i>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="msg">您的信息</div>
                    <div class="your_msg">
                        <p class="msg_detail">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid labore.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid labore.</p>
                        <form action="" class="user_info" method="post">
                            <div class="row sub_info">
                                <div class="col-xs-12 col-md-8 sub_msg">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" placeholder="Your name">
                                            <input type="text" placeholder="Your phone">
                                        </div>
                                        <div class="col-xs-12 col-sm-6">
                                            <input type="text" placeholder="Your company">
                                            <input type="text" placeholder="Your company name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <textarea name="sub_information" id="sub_information" placeholder="Your message "></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4 sub_button">
                                    <input type="button" value="提交">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contact_add">
                    <img src="{{asset('home/images/address.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</div>    
<!--about_us end-->
@section('script')
@endsection
@endsection