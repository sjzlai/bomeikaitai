<?php

namespace App\Http\Controllers\Admin;

use App\Model\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    //
    public function login()
    {
        return view('admin.login.login');
    }

    public function loginPost(Request $request)
    {
            $info = $request->except('_token');
            if ($info['username'] == '' || $info['pwd'] == '') return back()->withErrors('账号或密码错误');
            $user = Admin::where(['name'=>$info['username']],['password'=>bcrypt($info['pwd'])])->first();
            //dd($user);
            if (!$user){
                return back()->withErrors('msg','账号或密码错误');
            }else{
                Session::put('admin.id',$user->id);
                return redirect('/admin/index');
            }
    }
}
