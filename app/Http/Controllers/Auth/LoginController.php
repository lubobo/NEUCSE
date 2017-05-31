<?php

namespace App\Http\Controllers\Auth;

use App\Students;
use App\Teacher;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use phpDocumentor\Reflection\Types\Null_;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    public function login(Request $request)
    {

        if (NULL==$request['root']) {
            $user = Students::where(['number' => $request['number'], 'password' => md5($request['password'])])->first();
            if (!empty($user)) {
                // 认证通过...
                session(['login' => 'success']);
                return redirect('/');
            } else if (!empty(Teacher::where(['number' => $request['number'], 'password' => md5($request['password'])])->first())) {
                session(['login' => 'success']);
                return redirect('/');
            } else {
                session(['login' => null]);
                $error = '帐号密码验证不正确';
                return back()->with('msg', $error)->withInput();
            }
        } else {
            if (!empty(User::where(['name' => $request['name'], 'password' => md5($request['password'])])->first())) {
                session(['login' => 'success']);
                return redirect()->route('adminHome');
            }else{
                session(['login' => null]);
                $error = '帐号密码验证不正确';
                return back()->with('msg', $error)->withInput();
            }
        }
    }
}
        /*}else{
            $teacher=Teacher::where(['number'=>$request['number'],'password'=>md5($request['password'])])->first();
            if(!empty($teacher)){
                //认证通过
                session(['login'=>'success']);
                return redirect('/');
            }else{
                session(['login'=>null]);
                $error='帐号密码验证不正确';
                return back()->with('msg',$error)->withInput();
            }

        }*/




