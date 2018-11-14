@extends('admin.layout.app')
@section('style')
    <link rel="stylesheet" href="{{asset('css/uploads.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
@endsection
@section('content')
    <div style="width: 100%;height: 100vh;position: relative;">

        <form id="upBox" enctype="multipart/form-data" method="post" action="{{url('admin/product/imgStore')}}">
            <p >上传产品图片</p>
            {!! csrf_field() !!}
            <div id="inputBox"><input type="file" name="img[]" title="请选择图片" id="file" multiple accept="image/png,image/jpg,image/gif,image/JPEG"/>点击选择图片</div>
            <div id="imgBox"></div>
            <input type="hidden" name="goods_id" value="{{$goods_id}}">
            <input type="submit" id="btn" value="上传"></input>
        </form>
    </div>
    <script src="{{asset('/js/uploadImg.js')}}" type="text/javascript" charset="utf-8"></script>
    <script src="http://www.jq22.com/jquery/jquery-1.10.2.js"></script>
    <script type="text/javascript">
        imgUpload({
            inputId:'file', //input框id
            imgBox:'imgBox', //图片容器id
            buttonId:'btn', //提交按钮id
            //upUrl:'/admin/product/imgStore',  //提交地址
            data:'file1', //参数名
            num:"5"//上传个数
        })
    </script>
@endsection