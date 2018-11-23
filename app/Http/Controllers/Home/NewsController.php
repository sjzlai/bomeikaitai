<?php

namespace App\Http\Controllers\Home;

use App\Model\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    //

    public $news;
    public function __construct(News $news)
    {
        $this->news = $news;
    }

    //新闻列表
    public function index()
    {
        $news = $this->news->paginate(10);
        return view('home.news.company_news',compact('news'));
    }

    //新闻详情
    public function detail($id)
    {

        $new = $this->news->where('id','=',$id)->first();
        $last = $this->news->orderBy('id','desc')->first();
        return view('home.news.news_detail',compact('new','last'));
    }
}
