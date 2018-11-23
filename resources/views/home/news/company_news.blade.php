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
                        <h5>Company News</h5>
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
            <div class="col-xs-12 col-md-9 right_side">
                <h3>公司新闻</h3>
                <div class="bgc">
                    <div class="news_lists">
                        @foreach($news as $new)
                        <div class="row news_collect">
                           {{-- <div class="col-xs-12 col-sm-4">
                                <div class="news_img">
                                    <img src="{{asset('home/images/news_image.png')}}" alt="">
                                </div>
                            </div>--}}
                            <div class="col-xs-12 col-sm-8 news_intro">
                                <h4>{{$new->title}}</h4>
                                <p>@php echo  $new->content  @endphp</p>
                                <h5><a href="{{url('/news/detail',['id'=>$new->id])}}">详细内容>></a></h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="pages">
                        <ul class="pager">
                            {{$news->links()}}
                        </ul>
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