@extends('admin.layout.app')
@include('vendor.ueditor.assets')
@section('content')

        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                Amaze UI 表单
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">表单</a></li>
                <li class="am-active">Amaze UI 表单</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 表单
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>

                <div class="tpl-block">

                    <div class="am-g">
                        <div class="tpl-form-body tpl-form-line">
                            <form class="am-form tpl-form-line-form" action="{{url('admin/company/editStore')}}" method="post" enctype="">
                                {!! csrf_field() !!}
                                <input type="hidden" name="id" value="{{$company->id}}">
                                <div class="am-form-group">
                                    <label for="user-intro" class="am-u-sm-3 am-form-label">产品内容 <span  class="tpl-form-line-small-title"> Content</span></label>
                                    <div class="am-u-sm-9">
                                        <!-- 编辑器容器 -->
                                        <script id="container" name="content" type="text/plain" >@php echo html_entity_decode($company->content) @endphp</script>
                                        {{--<textarea class="" rows="10" id="user-intro" placeholder="请输入文章内容"></textarea>--}}
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="submit" id="btn" class="am-btn am-btn-primary tpl-btn-bg-color-success">提交</button>
                                    </div>
                                </div>

                            </form>

                        </div>
                    </div>

                </div>

            </div>
        </div>
        @section('script')

        <!-- 实例化编辑器 -->
        <script type="text/javascript">
            var ue = UE.getEditor('container');
            ue.ready(function() {
                ue.execCommand('serverparam', '_token', '{{ csrf_token() }}'); // 设置 CSRF token.
            });
        </script>
        @endsection
@endsection
