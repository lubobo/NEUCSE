<?php

namespace App\Http\Controllers;

use App\Students;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function Logout(){

        session(['login'=>null]);
        return back();
    }

    public function findPassword(){
        return view('auth.passwords.email');
    }
    public function reset(){

        return view('auth.passwords.reset');
    }

    public function resets(){
        return redirect(route('findPassword'));
    }
    public function resetPassword(Request $request){
        $student=Students::where(['email'=>$request['email']])->first();
        if(null!=$student){
            Students::where(['email'=>$request['email']])->update(['password'=>md5($request['password'])]);
            return redirect('/');
        }
        //Students::where(['email'=>$request['email']])->update(['password'=>md5($request['password'])]);
        //return redirect('/');
        else{
            return back()->with('resetErr','邮箱地址错误')->withInput();
        }
    }

    public function checkMail($mail){
        $student=Students::where(['email'=>$mail])->first();
        if(null!=$student){
            return '';
        }else{
            return '邮箱错误';
        }
    }

    public function checkNumber($number){
        $student=Students::where(['number'=>$number])->first();
        if(null!=$student){
            return '';
        }else{
            return '学号错误';
        }
    }
}
