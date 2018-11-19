@extends('admin.layout.app')
@section('style')
@endsection
@section('content')

        <div class="tpl-content-wrapper">
            <div class="tpl-content-page-title">
                Amaze UI 文字列表
            </div>
            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li><a href="#">Amaze UI CSS</a></li>
                <li class="am-active">文字列表</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 列表
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
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a href="{{url('admin/vision/create')}}" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</a>
                                    @if($data)
                                    <a href="{{url('admin/vision/edit',['id'=>$data->id])}}" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                    <a href="{{url('admin/vision/del',['id'=>$data->id])}}" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="tpl-table-images">
                            <div class="am-u-sm-12 am-u-md-6 am-u-lg-4">
                                @if($data)
                                {{--<div class="tpl-table-images-content">
                                    <div class="tpl-table-images-content-block">
                                        <div class="tpl-i-font">--}}
                                <div><div><div>
                                            @php echo html_entity_decode($data->content) @endphp
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>

                        {{--    <div class="am-u-lg-12">
                                <div class="am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                            </div>
--}}
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>










        </div>
    <script src="assets/js/app.js"></script>
@section('script')
@endsection
@endsection
