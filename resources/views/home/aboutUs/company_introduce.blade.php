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
                            <li class="active"><a href="{{url('/aboutus')}}">公司介绍</a></li>
                            <li><a href="{{url('/aboutus/vam')}}">愿景使命</a></li>
                            <li><a href="{{url('/aboutus/team')}}">核心团队</a></li>
                        </ul>
                    </div>
                </div>
            </div>
           {{-- <div class="col-xs-12 hidden-md hidden-lg left_mini">
                <div class="list_mini">
                    <ul class="mini_bar">
                        <li class="active"><a href="{{url('/aboutus')}}">公司介绍</a></li>
                        <li><a href="{{url('/aboutus/vam')}}">企业愿景</a></li>
                        <li><a href="team.blade.php">核心团队</a></li>
                    </ul>
                </div>
            </div>--}}
            <div class="col-xs-12 col-md-9 right_side">
                <h3>公司简介</h3>
                <div class="bgc">
                    {{--<div class="introduce_img">--}}
                        {{--<img src="{{asset('home/images/company_inner.png')}}" alt="">--}}
                    {{--</div>--}}
                    <div class="introduce_content">
                            @php echo $company->content @endphp
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
