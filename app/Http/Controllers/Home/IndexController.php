<?php

namespace App\Http\Controllers\Home;

use App\Model\Goods;
use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    //
    public $new;
    public $goods;
    public function __construct(News $news,Goods $goods)
    {
        $this->new = $news;
        $this->goods = $goods;
    }

    public function index()
    {
        $new =$this->new->where('status','=',0)->paginate(5);
        $goods = $this->goods->where('status','=',0)->paginate(5);
        return view('home.index.index',compact('new','goods'));
    }

}
