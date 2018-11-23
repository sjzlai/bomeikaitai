@extends('home.layout.home')
@section('style')
@endsection
@section('content')
<!--my-main start-->
<div class="my-main">
    <div class="banner_img">
        <img src="{{asset('home/images/index_banner.jpg')}}" alt="">
        <div class="mask"></div>
    </div>
    <!--关于博美-->
    <div class="container about_us">
        <div class="row text-center title">
            <div class="clo-xs-12 text-center">
                
                <h3>关于博美</h3>
                <span class="icon-bar"></span>
                <h6>About BoMei</h6>
                <span class="corner"></span>
                <p>通过“自主研发、外部引进与国际合作”相结合，快速研发旨在调节免疫系统并用以治疗自身免疫疾病。</p>
            </div>
        </div>
        <div class="row content">
            <div class="col-xs-12 col-sm-6">
                <div class="text-left" style="margin-top:1.2em;">
                    <span class="subtitle">博美</span><span class="subtitle_small">文化</span>
                </div>
                <div class="details">
                    <p>
                        在肿瘤疾病方面，基于精准医疗的原则为肿瘤患者提供个性化治疗的方式已经被广泛接受。针对于从基因角度定义为肿瘤患者的病人除提供有针对性的治疗药物外，还采用免疫肿瘤的方法利用人体的免疫系统的力量来增强对细胞的反击。
                    </p>                
                </div>
                <div class="text-right more">
                    <span class="text-center"><a href="">了解更多</a></span>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <img src="{{asset('home/images/aboutus_index.png')}}" alt="" class="about_img">
            </div>
        </div>
    </div>
    <!--公司新闻-->
    <div class="company_news">
        <div class="container news">
            <div class="row text-center title">
                <div class="clo-xs-12 text-center">
                    <h3>公司新闻</h3>
                    <h6>Company News</h6>
                    <span class="corner"></span>
                </div>
            </div>
            <div class="row content">
                <div class="hidden-xs col-sm-4">
                    <img src="{{asset('home/images/news_index.png')}}" alt="" class="news_img">
                </div>
                @foreach($new as $value)
                <div class="col-xs-12 col-sm-8">
                    <div class="article_lists">
                        <h4 class="article_title">
                            <span class="title_list"><a href="{{url('news/detail',['id'=>$value->id])}}">{{$value->title}}</a></span>
                            <span class="article_time">{{$value->created_at}}</span>
                        </h4>
                        {{--<p class="article_detail">{!! mb_substr($value->content,0,100) !!}</p>--}}
                    </div>
                   @endforeach
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 more text-right">
                    <span><a href="">查看更多</a></span>
                </div>
            </div>
        </div>
    </div>
    <!--我的产品-->
    <div class="container product">
        <div class="row text-center title">
            <div class="clo-xs-12 text-center">
                <h3>我的产品</h3>
                <h6>My Product</h6>
                <span class="corner"></span>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-lg-10 col-lg-push-1 product_bar">  
                <span class="active"><a href="">产品一</a></span>
                <span><a href="">产品二</a></span>
                <span><a href="">产品三</a></span> 
            </div>
        </div>
        <!--图片排列-->
        <div class="row product_imgs">
            <!--左侧列-->
            <div class="col-xs-12 col-md-8 col-lg-push-1 left_side">
                <div class="row">
                    <div class="col-xs-12 img_one">
                        <a href=""><img src="{{asset('home/images/product_index_big.png')}}" class="img_big" alt=""></a>
                        <div class="img_mask text-center">
                            <h4 class="product_name">产品一</h4>
                            <h3 class="product_work">溶血试剂盒</h3>
                            <div><img src="{{asset('home/images/product_mask.png')}}" alt="" style="width:100.1%;"></div>
                            <div class="click_check"><a href="">点击查看</a><span class="right_corner"></span></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 img_two">
                                <a href=""><img src="{{asset('home/images/product_index_small.png')}}" alt=""></a>
                                <!--<div class="img_mask">
                                    点击查看
                                </div>-->
                            </div>
                            <div class="col-xs-12 col-sm-6 img_three">
                                <a href=""><img src="{{asset('home/images/product_index_small.png')}}" alt=""></a>
                                <!--<div class="img_mask">
                                    点击查看
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--右侧列-->
            <div class="col-xs-12 col-md-4 right_side">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-12 img_four">
                        <a href=""><img src="{{asset('home/images/product_index_small.png')}}" alt=""></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-12 img_five">
                        <a href=""><img src="{{asset('home/images/product_index_small.png')}}" alt=""></a>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-12 img_six">
                        <a href=""><img src="{{asset('home/images/product_index_small.png')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    <!--my-main end-->
@section('script')
@endsection
@endsection