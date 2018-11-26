<?php

namespace App\Http\Controllers\Home;

use App\Model\Goods;
use App\Model\Img;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //
    public $goods;
    public $img;
    public function __construct(Goods $goods,Img $img)
    {
        $this->goods = $goods;
        $this->img = $img;
    }

    public function proIndex()
    {
        $goods = $this->goods->where('status',0)->first();
        $prod = $this->goods->where('status',0)->get();
        $goods['img'] = $this->img->where('goods_id','=',$goods->id)->get();

//        dd($goods);
        return view('home.product.product',compact('goods','prod'));
    }

    public function details($id)
    {
        $goods = $this->goods->where('id',$id)->first();
        $goods['img'] = $this->img->where('goods_id','=',$id)->get();
        $prod = $this->goods->where('status',0)->get();
        //dd($goods);
        return view('home.product.detail',compact('goods','prod'));
    }

}
