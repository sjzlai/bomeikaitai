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

    public function index()
    {
        $goods = $this->goods->where('status',0)->get();
        foreach ($goods as $key =>$good){
            $goods[$key]['img'] = $this->img->where('goods_id','=',$good->id)->get()->toArray();
        }
        $imgs =$this->img->where('goods_id','=',$good->id)->get();
//        dd($goods);
        return view('home.product.product',compact('goods','imgs'));
    }

    public function detail($id)
    {
        $goods = $this->goods->where('id',$id)->get();
        foreach ($goods as $key =>$good){
            $goods[$key]['img'] = $this->img->where('goods_id','=',$id)->get()->toArray();
        }
        $imgs =$this->img->where('goods_id','=',$good->id)->get();
        return view('home.product.detail',compact('product','imgs'));
    }
}
