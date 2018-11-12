<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    //列表
    public function ProductList()
    {
        return view('admin.product.list');
    }

}
