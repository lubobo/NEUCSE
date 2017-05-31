@extends('layouts.dashboard')
@section('title')
    管理员后台
@endsection
@section('content')
    <div  style="margin-top:25px;">
        <div class="col-xs-12 row">
            <form class="form-group" action="{{route('checkNews')}}" method="POST" style="width:60%" enctype="multipart/form-data">
                <div class="col-xs-3 col-xs-offset-0">
                    <div><span class="text-success  icon-paper-clip ">  新闻标题：</span>
                        <input class="form-control" name="news_name" id="names" type="text" placeholder="新闻标题。。。">
                        <h1 class="text-danger" id="name" ></h1>
                    </div>
                    {{--<div><span class="text-success">竞赛类型(团体|个人)：</span>--}}
                    {{--<br>--}}
                    {{--<input name="com_status" type="radio" value="0">个人赛--}}
                    {{--<input name="com_status" type="radio" value="1">团队赛--}}
                    {{--</div>--}}
                    <div><span class="text-success icon-tags"> 新闻标签：</span>
                        <input class="form-control" name="news_tags" id="tags" type="text" placeholder="新闻标签。。。">
                        <h1 class="text-danger" id="num"></h1>
                    </div>
                    <div><span class="text-success icon-github-alt"> 新闻作者：</span>
                        <input class="form-control" name="news_writer" id="tags" type="text" placeholder="新闻作者。。。">
                        <h1 class="text-danger" id="num"></h1>
                    </div>
                    <div><span class="text-success icon-list"> 新闻分类：</span>
                        <select name="news_categories" class="form-control" id="categories">
                            <option>---分类---</option>
                            <option class="glyphicon-option-horizontal">科技快讯</option>
                            <option class="glyphicon-option-horizontal">学术科研</option>
                            <option class="glyphicon-option-horizontal">媒体CSE</option>
                            <option class="glyphicon-option-horizontal">校园文学</option>
                        </select>
                        <h1 class="text-danger" id="name" ></h1>
                    </div>
                    {{--<div>--}}
                        {{--<button type="button" class="btn btn-md btn-google" data-toggle="modal" data-target="#identifier">--}}

                            {{--<span class="glyphicon glyphicon-picture"> 新闻配图</span>--}}

                        {{--</button>--}}
                        {{--<h1 class="text-danger" id="name" ></h1>--}}
                    {{--</div>--}}


                </div>
                <div class="col-xs-offset-3" style="width: 142%;">
                    <script type="text/javascript"  src="{{ URL::to('/ckeditor/ckeditor.js')}}"></script>
                    <textarea class="ckeditor" name="news_intro" id="intro" onmouseout="checkIntro(this.value)"  placeholder="新闻简介"></textarea>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                </div>
                <div style="padding-left: 15px;margin-top: -300px">
                    <button type="submit" class="btn btn-md btn-bitbucket">
                        <span class="glyphicon glyphicon-eye-open">  预览新闻</span>
                    </button>
                </div>
                {{--<div class="modal fade" id="identifier">--}}
                    {{--<div class="modal-dialog">--}}
                        {{--<div class="modal-content">--}}
                            {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                            {{--<div class="modal-header">--}}
                                {{--<button type="button" class="close" data-dismiss="modal">--}}
                                    {{--×--}}
                                {{--</button>--}}
                                {{--<h4 class="modal-title" id="myModalLabel">文章配图</h4>--}}
                            {{--</div>--}}

                            {{--<div class="modal-body">--}}
                                {{--<input type="file" name="news_file" id="file">--}}
                                {{--<p> </p>--}}
                                {{--<input type="text" class="form-control" name="pic" placeholder="pic name...">--}}
                            {{--</div>--}}
                            {{--<div class="modal-footer">--}}
                                {{--<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>--}}
                                {{--<button type="button" class="btn btn-primary" data-dismiss="modal">提交</button>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<a class="btn btn-xs btn-danger" href="{{route('adminHome')}}">{{'< 返回上一级'}}</a>--}}
                {{--</div>--}}
            </form>
        </div>
    </div>
    <div class="modal fade" id="identadasdsa">
        <div class="modal-dialog">
            <div class="modal-content">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        ×
                    </button>
                    <h4 class="modal-title" id="myModalLabel">文章配图</h4>
                </div>

                <div class="modal-body">
                    <h5></h5>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    <button type="button" class="btn btn-primary" data-dismiss="modal">提交</button>
                </div>
            </div>
        </div>
        {{--<a class="btn btn-xs btn-danger" href="{{route('adminHome')}}">{{'< 返回上一级'}}</a>--}}
    </div>
    <!--<div class="" style="width: 100%;">
        <script type="text/javascript"  src="{{ URL::to('/ckeditor/ckeditor.js')}}"></script>
        <textarea class="ckeditor" name="com_intro" onmouseout="checkIntro(this.value)"  placeholder="竞赛简介"></textarea>
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
    </div>-->
@endsection
<script language="JavaScript">
    function checkNews() {
        var xmlhttp;
        if (window.XMLHttpRequest){
            xmlhttp=new XMLHttpRequest();
        }
        else{
            xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
        }

        xmlhttp.onreadystatechange=function () {
            if (xmlhttp.readyState==4&&xmlhttp.status==200){
                document.getElementById('errors').style.visibility="visible";
                document.getElementById('errors').style.height="25px";
                document.getElementById("errors").innerHTML=this.responseText;
            }
        }
        var name=document.getElementById('name').nodeValue;
        var tag=document.getElementById('tag').nodeValue;
        var intro=document.getElementById('intro').nodeValue;

        xmlhttp.open("POST","/checkNews",true);
        xmlhttp.send("name="+name+"&tag="+tag+"&intro="+intro);
    }
</script>

