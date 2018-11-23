<?php

namespace App\Http\Controllers\Admin;

use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //
    public function __construct(News $news)
    {
        $this->news = $news;
    }

    //新闻列表
    public function index()
    {
        $data = $this->news->where('status','=',0)->get();
        return view('admin.news.list',compact('data'));
    }

    //新闻添加视图
    public function create()
    {
        return view('admin.news.create');
    }

    //新闻上传
    public function store(Request $request)
    {
        $new = $request->except('_token');
        $new['status'] = 0;

        $res = $this->news->insert($new);
        //dd($new);
        if ($res){
            return redirect('admin/news');
        }else{
            return back()->withErrors('msg','新闻添加错误');
        }
    }

    public function edit($id)
    {
        $goods = $this->news->where('id','=',$id)->first();
        return view('admin.news.edit',compact('goods'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token','id');
        $data['status'] = 0;
        $id = $request->input('id');
        $news = $this->news->where('id',$id)->update($data);
        if ($news){
            return redirect('/admin/news');
        }else{
            return back()->withErrors('msg','修改失败');
        }

    }


    public function del(News $id)
    {
        if ($id){
            $id->status = 1;
            $id->save();
            return redirect('admin/news');
        }
    }

}
