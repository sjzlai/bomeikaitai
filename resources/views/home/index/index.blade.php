<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>博美开泰</title>
    <link rel="shortcut icon" href="./favicon.ico">
    <link rel="stylesheet" href="{{asset('home/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/cssreset.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/header_footer.css')}}">
    <link rel="stylesheet" href="{{asset('home/css/common/index.css')}}">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top index_nav">
   <div class="container">
        <div class="navbar-header">
            <a href="./index.html" class="my-logo"><img src="{{asset('home/images/logo.png')}}" alt=""></a>
            <a href="#menu" class="navbar-toggle" data-toggle="collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
        </div>
        <div id="menu" class="collapse navbar-collapse">
            <!--菜单-->
            <ul class="nav navbar-nav navbar-right text-center">
                <li><a href="./index.html" class="active">首页</a></li>
                <li><a href="./aboutUs/company_introduce.html" >关于我们</a></li>
                <li><a href="./product/product.html">产品管理</a></li>
                <li><a href="./partner/business.html">业务合作</a></li>
                <li><a href="./news/company_news.html">公司新闻</a></li>
                <li><a href="./contactUs/contact.html">联系我们</a></li>
            </ul>
        </div>
   </div>
</nav>
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
                <div class="col-xs-12 col-sm-8">
                    <div class="article_lists">
                        <h4 class="article_title">
                            <span class="title_list"><a href="">文章标题1</a></span>
                            <span class="article_time">2018-09-10</span>
                        </h4>
                        <p class="article_detail">文章详情描述文章详情描述文章详情描述</p>
                    </div>
                    <div class="article_lists">
                        <h4 class="article_title">
                            <span class="title_list"><a href="">文章标题1</a></span>
                            <span class="article_time">2018-09-10</span>
                        </h4>
                        <p class="article_detail">文章详情描述文章详情描述文章详情描述</p>
                    </div>
                    <div class="article_lists">
                        <h4 class="article_title">
                            <span class="title_list"><a href="">文章标题1</a></span>
                            <span class="article_time">2018-09-10</span>
                        </h4>
                        <p class="article_detail">文章详情描述文章详情描述文章详情描述</p>
                    </div>
                    <div class="article_lists">
                        <h4 class="article_title">
                            <span class="title_list"><a href="">文章标题1</a></span>
                            <span class="article_time">2018-09-10</span>
                        </h4>
                        <p class="article_detail">文章详情描述文章详情描述文章详情描述</p>
                    </div>
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
<!--尾部-->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 bottom_logo text-center">
                <img src="{{asset('home/images/logo.png')}}" alt="">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
           <div class="hidden-xs col-sm-10 col-sm-push-1 text-center">
                <ul class="bottom_path text-center">
                    <li>首页</li>
                    <li>产品中心</li>
                    <li>关于我们</li>
                    <li>业务合作</li>
                    <li>公司新闻</li>
                    <li>联系我们</li>
                </ul>
           </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 beian">
                <p class="text-center">天津博美开泰生物科技医药有限公司 © 版权所有京ICP备案19283746&emsp;&emsp;&emsp;&emsp;京公网安备</p>
            </div>
        </div>
    </div>
    
</footer>

<script src="{{asset('home/js/jquery-1.11.3.js')}}"></script>
<script src="{{asset('home/js/bootstrap.js')}}"></script>
</body>
</html>