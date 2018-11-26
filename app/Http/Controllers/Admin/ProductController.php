<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\Goods;
use App\Model\Img;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public $goods;
    public function __construct(Goods $goods)
    {
        $this->goods = $goods;
    }

    //列表
    public function ProductList()
    {
        $data = $this->goods->AllList();
        return view('admin.product.list',compact('data'));
    }

    //添加产品
    public function create()
    {
        return view('admin.product.create');
    }

    //上传产品信息
    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['status'] = 0;
        $goods_id = Goods::insertGetId($data);
        if ($goods_id){
            return redirect('/admin/product/imgview/'.$goods_id);
        }else{
            return back()->withErrors('msg','上传错误');
        }
    }

    //上传图片视图
    public function imgView($goods_id)
    {
        return view('admin.product.img',compact('goods_id'));
    }

    //上传产品图片
    public function imgStore(Request $request)
    {
          $img = $request->except('_token','goods_id');
          $data = $request->input('goods_id');
          $path = 'upload';
          $da = picArray($img['img'],$path);
          //dd($img['img']);
          foreach ($da as $value){
              $a['image'] = $value;
              $a['goods_id'] = $data;
            $res = Img::insert($a);
          }
          if ($res){
              return redirect('/admin/product');
          }
    }

    //产品信息修改
    public function edit($id)
    {
        $goods = $this->goods->productInfo($id);
       // dd($goods);
        return view('admin.product.edit',compact('goods'));
    }

    //上传修改
    public function update(Request $request)
    {
        $data = $request->except('_token','id');
        $data['status'] = 0;
        $id = $request->input('id');
        $goods_id = Goods::where('id','=',$id)->update($data);
        if ($goods_id){
            return redirect('/admin/product');
        }else{
            return back()->withErrors('msg','修改失败');
        }
    }

    public function del(Goods $id)
    {
        if ($id){
        $id->status = 1;
        $id->save();
        return redirect('admin/product');
        }
    }
}
