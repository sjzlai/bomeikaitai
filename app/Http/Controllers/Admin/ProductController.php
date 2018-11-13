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

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token','img');
        $data['content'] = htmlspecialchars($data['content']);

        dd($data);
    }

}
