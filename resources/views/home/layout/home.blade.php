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
    @yield('style')
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

                <li><a href="{{url('/')}}">首页</a></li>

                <li><a href="{{url('/aboutus')}}" >关于我们</a></li>

                <li><a href="{{url('/product')}}" >产品管理</a></li>

                <li><a href="{{url('/partner')}}" >业务合作</a></li>

                <li><a href="{{url('/news')}}" >公司新闻</a></li>

                <li><a href="{{url('/contact')}}">联系我们</a></li>

            </ul>

        </div>
    </div>
</nav>
@yield('content')

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
<script>
    var lis = $('#menu>ul>li');
    lis.on('click',function(){
        $(this).addClass('active');
        $(this).siblings().remove('active');
    })
</script>
@yield('script')
</body>
</html>
