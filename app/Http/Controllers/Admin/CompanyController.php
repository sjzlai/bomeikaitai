<?php

namespace App\Http\Controllers\Admin;

use App\Model\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller
{
    //
    public $company;

    public function __construct(Company $company)
    {
        $this->company = $company;
    }

    public function index()
    {
        $data = $this->company->where('status','=',0)->first();
        return view('admin.company.list',compact('data'));
    }

    public function create()
    {
        return view('admin.company.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['status'] = 0;
        $res = $this->company->insert($data);
        if ($res){
            return redirect('admin/company');
        }else{
            return back()->withErrors('msg','公司信息添加错误');
        }
    }

    public function edit($id)
    {
        $company = $this->company->where('id','=',$id)->first();
        return view('admin.company.edit',compact('company'));
    }

    public function update(Request $request)
    {
        $data = $request->except('_token','id');
        $id = $request->input('id');
        $company = $this->company->where('id','=',$id)->update($data);
        if ($company){
            return redirect('admin/company');
        }else{
            return back()->withErrors('msg','修改失败');
        }
    }


    public function del(Company $id)
    {
        if ($id){
            $id->status = 1;
            $id->save();
            return redirect('admin/company');
        }
    }
}
