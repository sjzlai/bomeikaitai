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

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token','img');
        $data['prod_intr'] = htmlspecialchars($data['prod_intr']);
        $data['status'] = 0;
        $goods_id = Goods::insertGetId($data);
        if ($goods_id){
            return redirect('/admin/product/imgview/'.$goods_id);
        }else{
            return back()->withErrors('msg','上传错误');
        }
    }

    public function imgView($goods_id)
    {
        return view('admin.product.img',compact('goods_id'));
    }

    public function imgStore(Request $request)
    {
          $img = $request->except('_token','goods_id');
          $data = $request->input('goods_id');
          $path = '/public/upload';
          $da = picArray($img['img'],$path);

          foreach ($da as $value){
            //  dd($value);
              $a['image'] = $value;
              $a['goods_id'] = $data;
            $res = Img::insert($a);
          }
          if ($res){
              return redirect('/admin/product');
          }
    }
}
