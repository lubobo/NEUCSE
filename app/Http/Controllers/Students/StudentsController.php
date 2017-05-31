<?php

namespace App\Http\Controllers\Students;

use App\Students;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;
use phpDocumentor\Reflection\Types\Null_;

class StudentsController extends Controller
{
    public function login(Request $request){
        $user=Students::where(['number'=>$request['number'],'password'=>md5($request['password'])])->first();
        if (!empty($user)) {
            // 认证通过...
            session(['login'=>'success']);
            return redirect('/');
        }else if(!empty(Teacher::where(['number'=>$request['number'],'password'=>md5($request['password'])])->first())){
            session(['login'=>'success']);
            return redirect('/');
        } else {
            return back()->withInput()->withError('帐号密码输入不正确');
        }
    }

    public function destory(){
        $students=new Students();
        $students->delete();
    }

    public function login_process(Request $request){
        $student=Students::where('name',$request['name'])->first();
        if($student!=null){

        }
    }
}
