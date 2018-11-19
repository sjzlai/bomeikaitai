<?php

namespace App\Http\Controllers\Admin;

use App\Model\Img;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ImgController extends Controller
{
    //
    public $img;
    public function __construct(Img $img)
    {
        $this->img = $img;
    }

    public function index()
    {
        $data = $this->img->ImgAll();
        dd($data);
        $data =array();
        return view('admin.img.list',compact('data'));
    }

}
