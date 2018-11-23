@extends('home.layout.home')
@section('style')
    <link rel="stylesheet" href="{{asset('home/css/common/aboutus.css')}}">
@endsection
@section('content')
<!--about_us start-->
<div class="common about_us">
    <div class="inner_banner">
        <img src="{{asset('home/images/inner_banner.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="hidden-xs hidden-sm col-md-3 left_side">
                <div class="bgc">
                    <div class="common_bar">
                        <h3>关于我们</h3>
                        <h5>About Us</h5>
                    </div>
                    <div class="common_list">
                        <ul class="lists_bar">
                            <li><a href="company_introduce.blade.php">公司介绍</a></li>
                            <li><a href="about_vam.blade.php">企业愿景</a></li>
                            <li class="active"><a href="team.blade.php">核心团队</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 hidden-md hidden-lg left_mini">
                <div class="list_mini">
                    <ul class="mini_bar">
                        <li><a href="company_introduce.blade.php">公司介绍</a></li>
                        <li><a href="about_vam.blade.php">企业愿景</a></li>
                        <li class="active"><a href="team.blade.php">核心团队</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-9 right_side">
                <h3>团队介绍</h3>
                <div class="bgc team_lists">
                    <div class="row person_list">
                        <div class="col-xs-12 col-sm-4 person_img">
                            <img src="{{asset('home/images/team.png')}}" alt="">
                        </div>
                        <div class="col-xs-12 col-sm-8 person_detail">
                            <h3>杨教授</h3>
                            <h3>1992 First Award Won Best Company</h3>
                            <p>First Award Won Best CompanyFirst Award Won Best CompanyFirst Award Won Best CompanyFirst Award Won Best Company</p>
                        </div>
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
