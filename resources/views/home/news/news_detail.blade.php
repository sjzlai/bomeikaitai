@extends('home.layout.home')
@section('style')
    <link rel="stylesheet" href="{{asset('home/css/common/aboutus.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/common/news.css')}}">
@endsection
@section('content')
<!--about_us start-->
<div class="common company_news">
    <div class="inner_banner">
        <img src="{{asset('home/images/inner_banner.png')}}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="hidden-xs hidden-sm col-md-3 left_side">
                <div class="bgc">
                    <div class="common_bar">
                        <h3>公司新闻</h3>
                        <h5>About Us</h5>
                    </div>
                    <div class="common_list">
                        <ul class="lists_bar">
                            <li class="active"><a href="company_news.blade.php">公司新闻</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 hidden-md hidden-lg left_mini">
                <div class="list_mini">
                    <ul class="mini_bar">
                        <li class="active"><a href="company_news.blade.php">公司新闻</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-md-9 news_right right_side">
                <h3>公司新闻</h3>
                <div class="bgc">
                    <h4 class="news_title">{{$new->title}}</h4>
                    <h5 class="news_time">
                        <span>编辑：博美</span>&emsp;&emsp;
                        <span>时间：{{$new->updated_at}}</span>
                    </h5>
                    {{--<div class="news_img">
                        <img src="{{asset('home/images/news_inner.png')}}" alt="">
                    </div>--}}
                    <hr style="height: 5px">
                    <div class="detail_content">
                            @php echo $new->content @endphp
                           </div>
                    <div class="pages">
                        <ul class="pager">
                            @if($new->id -1 != 0 )
                            <li class="previous"><a href="{{url('news/detail',['id'=>$new->id-1])}}">上一篇</a></li>
                                <li class="next"><a href="{{url('news/detail',['id'=>$new->id+1])}}">下一篇</a></li>
                            @elseif( $last->id <= $new->id )
                                <li class="next"><a href="{{url('news/detail',['id'=>$new->id+1])}}">下一篇</a></li>
                            @elseif($last->id < ($new->id+1))
                                <li class="previous"><a href="{{url('news/detail',['id'=>$new->id-1])}}">上一篇</a></li>
                            @endif
                        </ul>
                        {{--<div class="goto_list"><a href="company_news.blade.php">新闻列表</a></div>--}}
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