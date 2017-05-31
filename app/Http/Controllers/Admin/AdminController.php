<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function admin_login(){
        return view('admin.admin_login');
    }
    public function getHome(){
        return view('admin.getAdminHome');
    }
    public function admin_out(){
        session(['login' => null]);
        return redirect('/');
    }
    public function addNews(Request $request){
//        echo $request['news_name'];
//        echo $request['news_tags'];
//        echo $request['news_intro'];
//        echo $request['news_categories'];

    }
    public function checkNews(Request $request){
        return view('admin.getPreview',[
            'name'=>$request['news_name'],
            'tag'=>$request['news_tags'],
            'categories'=>$request['news_categories'],
            'intro'=>$request['news_intro'],
            'owner'=>$request['news_writer']
            ]);
    }
}
