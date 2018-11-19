<?php

namespace App\Http\Controllers\Admin;

use App\Model\Vision;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VisionController extends Controller
{

    public $vision;
    public function __construct(Vision $vision)
    {
        $this->vision = $vision;
    }

    public function index()
    {
        $data = $this->vision->where('status','=',0)->first();
        return view('admin.vision.list',compact('data'));
    }

    public function create()
    {
        return view('admin.vision.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['status'] = 0;
        $res = $this->vision->insert($data);
        if ($res){
            return redirect('admin/vision');
        }else{
            return back()->withErrors('msg','公司信息添加错误');
        }
    }

    public function edit($id)
    {
        $vision = $this->vision->where('id','=',$id)->first();
        return view('admin.vision.edit',compact('vision'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token','id');
        $id = $request->input('id');
        $vision = $this->vision->where('id','=',$id)->update($data);
        if ($vision){
            return redirect('admin/vision');
        }else{
            return back()->withErrors('msg','修改失败');
        }
    }


    public function del(vision $id)
    {
        if ($id){
            $id->status = 1;
            $id->save();
            return redirect('admin/vision');
        }
    }
}
