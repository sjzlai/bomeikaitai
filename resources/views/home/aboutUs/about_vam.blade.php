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
                            <li ><a href="{{url('/aboutus')}}">公司介绍</a></li>
                            <li class="active"><a href="{{url('/aboutus/vam')}}">愿景使命</a></li>
                            <li><a href="{{url('/aboutus/team')}}">核心团队</a></li>
                        </ul>
                    </div>
                </div>
            </div>
           {{-- <div class="col-xs-12 hidden-md hidden-lg left_mini">
                <div class="list_mini">
                    <ul class="mini_bar">
                        <li ><a href="{{url('/aboutus')}}">公司介绍</a></li>
                        <li class="active"><a href="{{url('/aboutus/vam')}}">企业愿景</a></li>
                        <li><a href="team.blade.php">核心团队</a></li>
                    </ul>
                </div>
            </div>--}}
            <div class="col-xs-12 col-md-9 right_side">
                <h3>愿景使命</h3>
                <div class="bgc">
                    <div class="vision">
                        <div class="vam_img">
                            <img src="{{asset('home/images/company_inner.png')}}" alt="">
                        </div>
                        <div class="vam_content">
                            <h5>我们的愿景</h5>
                            {{--<h4>实现业务增长的同时，减少对环境的不利影响</h4>--}}
                            <div class="vam_detail max_height">
                                @php echo  $vision->content @endphp
                                  </div>
                            <span class="read_more show">展开</span>
                            <span class="read_up hidden">收起</span>
                        </div>
                    </div>
                  {{--  <div class="mission">
                        <div class="vam_img">
                            <img src="{{asset('home/images/company_inner.png')}}" alt="">
                        </div>
                        <div class="vam_content">
                            <h5>我们的使命</h5>
                            <h4>实现业务增长的同时，减少对环境的不利影响</h4>
                            <div class="vam_detail max_height">
                                <p>天津博美开泰生物科技医药有限公司公司介绍天津博美开泰生物科技医药有限公司公司介绍天津博美开泰生物科技医药有限公司公司介绍天津博美开泰生物科技医药有限公司公司介绍</p>
                                <p>天津博美开泰生物科技医药有限公司公司介绍天津博美开泰生物科技医药有限公司公司介绍天津博美开泰生物科技医药有限公司公司介绍天津博美开泰生物科技医药有限公司公司介绍天津博美开泰生物科技医药有限公司公司介绍天津博美开泰生物科技医药有限公司公司介绍</p>
                                <p>天津博美开泰生物科技医药有限公司公司介绍天津博美开泰生物科技医药有限公司公司介绍天津博美开泰生物科技医药有限公司公司介绍</p>
                                <p>天津博美开泰生物科技医药有限公司公司介绍天津博美开泰生物科技医药有限公司公司介绍天津博美开泰生物科技医药有限公司公司介绍</p>
                            </div>
                            <span class="read_more show">展开</span>
                            <span class="read_up hidden">收起</span>
                        </div>
                    </div>--}}
                </div>
            </div>
            
        </div>
    </div>
</div>    
<!--about_us end-->
@section('script')
<script src="{{asset('home/js/common/aboutUs.js')}}"></script>
@endsection
@endsection