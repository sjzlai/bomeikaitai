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
    }

    public function index()
    {
        $goods = $this->goods->where('status',0)->get();
        $img = $this->img->where('status',0)->get();
        return view('home.product.product',compact('goods','img'));
    }
}
