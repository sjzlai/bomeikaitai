@extends('admin.layout.app')
@section('content')
{{--content--}}

        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                Amaze UI 首页组件
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">分类</a></li>
                <li class="am-active">内容</li>
            </ol>
            <div class="tpl-content-scope">
                <div class="note note-info">
                    <h3>博美开泰
                        <span class="close" data-close="note"></span>
                    </h3>
                    <p> 简介:后台管理系统</p>
                    <p><span class="label label-danger">提示:</span> 根据个人喜好来添加管理网站
                    </p>
                </div>
            </div>
        </div>
@endsection
@section('script')
    <script src="{{asset('assets/js/app.js')}}"></script>
@endsection