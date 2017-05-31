<!Doctype html>
<html style="height:80%;padding: 0;margin: 0;">
<head>
    <title>欢迎登录</title>
    <link href="source/indexi.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="http://www.neu.edu.cn/favicon.ico"/>

    @if(Session::has('msg'))
        <?php
        $error=session('msg');
        ?>
        <script language="JavaScript">
            alert("管理权限不够，帐号密码验证不正确");
        </script>
    @endif

    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="http://cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>

    <link rel="stylesheet" href="Font-Awesome/css/font-awesome.min.css">

</head>
<body style="height:100%;padding-bottom: 0;background-color: #3c3c3c">
<div class="container col-xs-offset-4" style="width: 30%;margin-top: 5%;background-color: #bbbbbb">
    <div class="panel panel-default" style="margin-top: 3.7%;margin-bottom: 3.7%">
        <div class="panel panel-title" style="background-color: #1b6d85">
            <h4 class="text-center" style="color: #ffffee">
                <span class="icon-home icon-x"> 网站后台登录</span>
            </h4>
        </div>
        <form class="form-group col-xs-offset-2" style="width: 65%" method="post" action="{{route('login')}}">
            {{csrf_field()}}
            <!--<h5>姓名：
                <select class="form-control" name="role">

                    <option>院级管理</option>
                    <option>校级管理</option>
                </select>
            </h5>-->
            <h5><span class="icon-user">用户名：</span><input class="form-control" type="text" name="name" value="{{session('name')}}"></h5>
            <h5><span class="icon-key">密码：</span><input class="form-control" type="password" name="password"></h5>
                <input class="hidden" name="root" value="root">
            <!--<h5 style="line-height:30px;">
                验证码：
                <input class="form-control" type="text" name="captcha" class="form-control"><p> </p>
                <a onclick="javascript:re_captcha();" style="line-height: inherit">
                    <img src="{{ URL('kit/captcha/1') }}"  alt="验证码" title="刷新图片" width="100%" id="c2c98f0de5a04167a9e427d883690ff6" border="0" style="vertical-align: middle">
                </a>
            </h5>-->
            {{--<a class="btn btn-sm btn-info" href="{{route('sendMail')}}">邮箱验证</a>--}}
            <p> </p>
            <button class="btn btn-block btn-success" type="submit">
                <span class="glyphicon glyphicon-send">
                    登陆管理
                </span>
            </button>
            {{--<a href="{{route('register')}}" class="btn btn-block btn-success">注册</a>--}}
            <br>
        </form>
    </div>
</div>
</body>
</html>
