<!DOCTYPE html>
<!-- saved from url=(0022)http://www.pku.edu.cn/ -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0,minimum-scale=1.0">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>东北大学计算机科学与工程学院</title>
    <link href="source/indexi.css" type="text/css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="http://www.neu.edu.cn/favicon.ico"/>


    <link rel="stylesheet" href="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://cdn.static.runoob.com/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdn.static.runoob.com/libs/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <link rel="stylesheet" href="Font-Awesome/css/font-awesome.min.css">

    <link href="source/basei.css" rel="stylesheet" type="text/css">
    <link href="source/index.css" rel="stylesheet" type="text/css">
    <link href="source/thuicon.css" rel="stylesheet" type="text/css">
    <link href="source/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="source/mmenu.css" rel="stylesheet" type="text/css">
    <script src="source/jq.js" type="text/javascript"></script>
    <script src="source/comm.js" type="text/javascript"></script>
    <script src="source/jquery.easing-1.3.js" type="text/javascript"></script>
    <script src="source/jquery.iosslider.js" type="text/javascript"></script>
    <script src="source/visualMacth.js" type="text/javascript"></script>

    <link href="source/pku.css" rel="stylesheet" type="text/css">
    <script src="source/pku.js" type="text/javascript"></script>
    <script src="source/slider.js" type="text/javascript"></script>

    <script src="source/share.js"></script><link rel="stylesheet" href="source/share_style0_32.css"></head>

<body>
<!--头部-->

<header class="header">
    <section>
        @if(Session::has('msg'))
            <?php
                $error=session('msg');
            ?>
            <script language="JavaScript">
                alert("帐号密码验证不正确");
            </script>
        @endif

        <div class="topLine"></div>
        <section class="subNav yahei clearfix" style="background-color: #0088c3">
            <!-- section class="ssubNav">子导航</section -->
            <section class="ssubNav1">
                <!--<img id="subNavlogo" src="images/mnav.png" style="width:22px;height:17px;padding-bottom:6px;">-->
                <span id="navline_1" class="navline"></span>
                <span id="navline_2" class="navline"></span>
                <span id="navline_3" class="navline" style="margin-bottom:3px;"></span>
            </section>

            <section class="mainWrap mainWrap02 noline">
                <ul id="subNav" class="subnavLeft">
                    <li id="students"><a href="#">学生</a></li>
                    <li id="facultystaff"><a href="#">教职工</a></li>
                    <li id="alumni"><a href="#">校友</a></li>
                    <li id="parents"><a href="#">家长</a></li>
                    <li id="visitors"><a href="#">访客</a></li>
                    <li id="jobs"><a href="#">招聘</a></li>
                    <li id="giving"><a href="#">捐赠</a></li>
                </ul>

                <ul class="subNavRight" style="padding-right:12px;">

                    <li id="its"><a href="#">网络</a></li>
                    <li id="its"><a href="#">邮箱</a></li>
                    <li id="its"><a href="#">六维空间</a></li>
                    <li id="lib"><a href="#">图书馆</a></li>
                    <li id="bbs"><a href="#">创新中心</a></li>
                    <li id="leadermailbox"><a href="#">领导信箱</a></li>

                    @if(session('login')!='success')
                    <li id="leadermailbox" data-toggle="modal" data-target="#myModal">
                        <a href="#">登陆站点</a></li>
                    @endif
                    @if(session('login')=='success')
                        <li id="leadermailbox">
                            <a href="{{route('logout')}}">Logout</a></li>
                        <li><a class="btn btn-link" href="{{ route('reset') }}">
                                重置密码
                            </a></li>
                    @endif

                    <!-- 模态框（Modal） -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                        &times;
                                    </button>
                                    <h4 class="modal-title" id="myModalLabel">
                                        登陆站点
                                    </h4>
                                </div>
                                <div class="modal-body">
                                    <div class="panel-body">
                                        <form class="form-horizontal" name="loginForm" role="form" method="POST" action="{{ route('login') }}">
                                            {{ csrf_field() }}
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                                                <!--<label for="role" class="col-md-4 control-label">登陆权限</label>
                                                <div class="col-md-6" style="margin-bottom: 3%">

                                                    <select class="form-control" id="role" name="role">
                                                        <option value="student">
                                                            学生
                                                        </option>
                                                        <option value="teacher">
                                                            教师
                                                        </option>
                                                    </select>

                                                </div>-->


                                                <label for="number" class="col-md-4 control-label">账号</label>

                                                <div class="col-md-6">
                                                    <input id="number" onmouseout="checkMail(this.value)" type="number" class="form-control" name="number" value="{{ old('number') }}" required autofocus>

                                                    <span class="text-danger" style="visibility: hidden;height: 0px" id="errors"></span>
                                                    @if ($errors->has('number'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('number') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                <label for="password" class="col-md-4 control-label">密码</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password" class="form-control" name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 记住我
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="col-md-8 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary">
                                                        登陆
                                                    </button>

                                                    <a class="btn btn-link" href="{{ route('findPassword') }}">
                                                        找回密码？
                                                    </a>


                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div><!-- /.modal-content -->
                        </div><!-- /.modal -->
                    </div>
                    <!--<li id="en"><a href="#">English</a></li>-->
                    <li id="form_Search_itme">
                        <a id="form_Search_a" href="#" class="glyphicon glyphicon-search btn searchlogo" style="padding-top:3px;font-size:12px;"></a>
                        <div class="searchDIV" style="display: none;">
                            <form id="form_Search" name="formSearch" method="get" action="#" target="_blank">
                                <input id="form_Searchword" name="word" class="searchinp" onfocus="" onblur="" type="text" placeholder="Search...">
                                <!--<a id="form_SearchGo" href="javascript:submitSearch()" class="searchGO" title="Search" style="color:#fff;display:inline;">go</a>-->
                            </form>
                        </div>
                    </li>
                </ul>
            </section>
            <!-- for mobile [begin] -->
            <section id="mobileNav" class="onlymobileshow clearfix">
                <div style="background-color:#fff;clear:both;padding-left:7px;padding-bottom:7px;line-height:30px;font-size:16px;">
                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                        <tbody><tr>
                            <td width="35%"><a href="#">学院概况</a></td>
                            <td width="30%"><a href="#">学生</a></td>

                        </tr>
                        <tr>
                            <td><a href="#">招生与就业</a></td>
                            <td><a href="#">教职工</a></td>
                            <td><a href="#">网络</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">其他院系</a></td>
                            <td><a href="#">校友</a></td>
                            <td><a href="#">邮箱</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">教育教学</a></td>
                            <td><a href="#">家长</a></td>
                            <td><a href="#">六维</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">科学研究</a></td>
                            <td><a href="#">访客</a></td>
                            <td><a href="#">图书馆</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">合作交流</a></td>
                            <td><a href="#">招聘</a></td>
                            <td><a href="#">创新中心</a></td>
                        </tr>
                        <tr>
                            <td><a href="#">领导信箱</a></td>
                            @if(session('login')!='success')
                                <td data-toggle="modal" data-target="#myModals">
                                    <a href="#">登陆站点</a>
                                </td>
                            @endif
                            @if(session('login')=='success')
                                <td>
                                    <a href="{{route('logout')}}">Logout</a>
                                </td>
                                <td>
                                    <a href="{{ route('reset') }}">
                                        重置密码
                                    </a>
                                </td>
                            @endif
                        </tr>


                        <tr>
                            <td colspan="2"><form id="formSearch2" method="get" action="#" target="_blank">
                                    <input name="word" style="opacity:0.8;background-color:#fff;border:1px solid #C4C4C4;width:70%;margin-right:3px;margin-top:3px;" onfocus="" onblur="" type="text">
                                    <a href="javascript:document.forms[&#39;formSearch2&#39;].submit();"
                                       class="glyphicon glyphicon-search btn"
                                       style="line-height:22px;font-size:12px" onclick="" title="Search"></a>
                                </form>
                            </td>
                        </tr>
                        </tbody></table>
                </div>

                <!-- 模态框（Modal） -->
                <div class="modal fade" id="myModals" tabindex="-1" role="dialog" aria-labelledby="myModalLabels" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                                    &times;
                                </button>
                                <h4 class="modal-title" id="myModalLabels">
                                    登陆站点
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="panel-body">
                                    <form class="form-horizontal" name="loginForm" role="form" method="POST" action="{{ route('login') }}">
                                        {{ csrf_field() }}

                                        <label for="role" class="col-md-4 control-label">登陆权限</label>
                                        <div class="col-md-6" style="margin-bottom: 3%">
                                            <select class="form-control" name="role">
                                                <option value="student">
                                                    学生
                                                </option>
                                                <option value="teacher">
                                                    教师
                                                </option>
                                            </select>

                                        </div>

                                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <label for="number" class="col-xs-4 control-label">学号</label>

                                            <div class="col-xs-6">
                                                <input id="number" type="number" onmouseout="checkMail(this.value)" class="form-control" name="number" value="{{ old('number') }}" required autofocus>

                                                <span class="text-danger" style="visibility: hidden;height: 0px" id="errors"></span>
                                                @if ($errors->has('number'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <label for="password" class="col-xs-4 control-label">密码</label>

                                            <div class="col-xs-6">
                                                <input id="password"  type="password" class="form-control" name="password" required>



                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-6 col-xs-offset-4">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> 记住我
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="col-xs-8 col-xs-offset-4">
                                                <button type="submit" class="btn btn-primary">
                                                    登陆
                                                </button>

                                                <a class="btn btn-link" href="{{ route('findPassword') }}">
                                                    找回密码？
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div><!-- /.modal-content -->
                    </div><!-- /.modal -->

            </section>
            <!--  for mobile [end] -->
        </section>


        <section class="topWrap clearfix" style="background-color: #53a8eb;">
            <section class="mainWrap" style="background-color: #53a8eb;">
                <a class="logo" href="#" title="东北大学首页">
                    <img style="width: 213px" src="source/pkulogo_white.png">
                </a>

            </section>
            <section class="nav yahei clearfix noMobileShow" style="clear:both;">
                <section class="menu" id="smenu">
                    <a class="thuicon-menu menuicon"></a>导航
                </section>
                <ul id="nav">
                    <li class="nav_first"><a id="intro" href="#">学院概况</a>
                        <div class="minfoWrap" style="display: none;">
                            <div class="minfoWrap_inner">
                                <div class="fl"><img src="source/channel_about.jpg" width="380" height="130"  border="0"></div>
                                <p class="fl nav03 slogan" style="margin-left:40px; margin-right:10px">东大是常为新的，<br>改进的运动的先锋，<br>要使中国向着好的，<br>往上的道路走。</p>
                                <ul class="nav01 fl ml30">

                                    <li id="intro_about"><a href="#">学院简介</a></li>
                                    <li id="intro_leaders"><a href="#">现任领导</a></li>
                                    <li id="intro_formerleaders"><a href="#">历任领导</a></li>
                                </ul>
                                <ul class="nav01 fl">
                                    <li id="intro_organization"><a href="#">组织机构</a></li>
                                    <li id="intro_celebrities"><a href="#">历史名人</a></li>
                                </ul>
                                <ul class="nav01 fl">
                                    <li id="intro_internals"><a href="#">信息公开</a></li>
                                    <li id="intro_greencampus"><a href="#">绿色校园</a></li>
                                </ul>

                            </div>
                        </div>
                    </li>
                    <li><a id="admissions" href="#">招生与资助</a>
                        <div class="minfoWrap" style="display: none;">
                            <div class="minfoWrap_inner">
                                <div class="fl"><img src="source/channel_admissions.jpg" width="380" height="130" border="0"></div>
                                <p class="fl nav03 slogan" style="margin-left:40px; margin-right:10px">东大画卷美不胜收，<br>恰似你将要留在这里的青春年华。<br><br>东北大学欢迎你！</p>
                                <ul class="nav01 ml30 fl">
                                    <li><a href="#">本科生</a></li>
                                    <li><a href="#">研究生</a></li>
                                    <li><a href="#">留学生</a></li>
                                    <li><a href="#">继续教育</a></li>
                                </ul>
                                <ul class="nav01 ml30 fl">
                                    <li><a href="#">本科生奖助</a></li>
                                    <li><a href="#">研究生奖助</a></li>
                                    <li><a href="#">学生资助中心</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li><a id="academics" href="#">其他院系</a>
                        <div class="minfoWrap" style="display: none;">
                            <div class="minfoWrap_inner">
                                <div class="fl"><img src="source/channel_academic.jpg" border="0"></div>
                                <p class="fl nav03 slogan" style="margin-left:40px; margin-right:10px">勤奋、严谨、求实、创新。</p>
                                <ul class="nav01 ml30 fl">
                                    <li><a href="#">信息科学与工程学院</a></li>
                                    <li><a href="#">计算机科学与工程学院</a></li>
                                    <li><a href="#">材料科学与工程学院</a></li>
                                </ul>
                                <ul class="nav01 fl">
                                    <li><a href="#">资源与土木工程学院</a></li>
                                    <li><a href="#">生命科学与科学学院</a></li>
                                    <li><a href="#">机械科学与工程学院</a></li>
                                </ul>
                                <ul class="nav01 fl">
                                    <li><a href="#">外语学院</a></li>
                                    <li><a href="#">艺术学院</a></li>
                                    <li><a href="#">冶金学院</a></li>
                                    <li><a href="#">理学学院</a></li>
                                    <li><a href="#">软件学院</a></li>
                                </ul>

                            </div>
                        </div>
                    </li>
                    <li><a id="education" href="#">教育教学</a>
                        <div class="minfoWrap" style="display: none;">
                            <div class="minfoWrap_inner">
                                <div class="fl"><img src="source/channel_education.jpg" border="0"></div>
                                <p class="fl nav03 slogan" style="margin-left:40px; margin-right:10px">思想自由、兼容并包。<br><br>教育应指导社会，而非追逐社会。</p>
                                <ul class="nav01 ml30 fl">
                                    <li><a href="#">师资队伍</a></li>
                                    <li><a href="#">本科生教育</a></li>
                                    <li><a href="#">研究生教育</a></li>
                                    <li><a href="#">留学生教育</a></li>
                                    <li><a href="#">继续教育</a></li>
                                </ul>
                                <ul class="nav01 fl">
                                    <li><a href="#">课程设置</a></li>
                                    <li><a href="#">海外学习</a></li>
                                    <li><a href="#">小班课教学</a></li>
                                    <li><a href="#">本科全英文授课</a></li>
                                    <li><a href="#">课表查询</a></li>
                                </ul>
                                <ul class="nav01 fl">
                                    <li><a  var_dump($student);href="#">慕课</a></li>
                                    <li><a href="#">教学网</a></li>
                                    <li><a href="#">公开课</a></li>
                                    <li><a href="#">证书验证</a></li>
                                </ul>

                            </div>
                        </div>
                    </li>
                    <li><a id="research" href="#">科学研究</a>
                        <div class="minfoWrap" style="display: none;">
                            <div class="minfoWrap_inner">
                                <div class="fl"><img src="source/channel_research.jpg" border="0"></div>
                                <p class="fl nav03 slogan" style="margin-left:40px; margin-right:10px">博学之，审问之，<br>慎思之，明辨之，笃行之。</p>
                                <ul class="nav01 ml30 fl">
                                    <li><a href="#">自然科学</a></li>
                                    <li><a href="#">人文社科</a></li>
                                    <li><a href="#">产学研</a></li>
                                </ul>
                                <ul class="nav01 fl">
                                    <li><a href="#">科研成果</a></li>
                                    <li><a href="#">科研机构</a></li>
                                    <li><a href="#">学术期刊</a></li>
                                </ul>
                                <ul class=" var_dump($student);nav01 fl">
                                    <li><a href="#">管理部门</a></li>
                                </ul>

                            </div>
                        </div>
                    </li>
                    <li><a id="collaboration" href="#">合作交流</a>
                        <div class="minfoWrap" style="display: none;">
                            <div class="minfoWrap_inner">
                                <div class="fl"><img src="source/channel_collaboration.jpg" border="0"></div>
                                <p class="fl nav03 slogan" style="margin-left:40px; margin-right:10px">志于道，据于德，<br>依于仁，游于艺。<br></p>
                                <ul class="nav01 ml30 fl">
                                    <li><a href="#">合作概览</a></li>
                                    <li><a href="#">内地合作</a></li>
                                </ul>
                                <ul class="nav01 fl">
                                    <li><a href="#">国际交流</a></li>
                                    <li><a href="#">港澳台交流</a></li>
                                </ul>
                                <ul class="nav01 fl">
                                    <li><a href="#">孔子学院</a></li>
                                </ul>

                            </div>
                        </div>
                    </li>
                    <li class="nav_last"><a id="campuslife" href="#">校园生活</a>
                        <div class="minfoWrap" style="display: none;">
                            <div class="minfoWrap_inner">
                                <div class="fl"><img src="source/channel_life.jpg" border="0"></div>
                                <p class="fl nav03 slogan" style="margin-left:40px; margin-right:10px">秋冬春夏，<br>伴随着四时的运行，<br>青春和东大融为一体，<br>东大成为永恒。</p>
                                <ul class="nav01 ml30 fl">
                                    <li><a href="#">艺术与文化</a></li>
                                    <li><a href="#">体育与健康</a></li>
                                    <li><a href="#">学生社团</a></li>
                                    <li><a href="#">教工社团</a></li>
                                </ul>
                                <ul class="nav01 fl">
                                    <li><a href="#">志愿公益</a></li>
                                    <li><a href="#">校史档案</a></li>
                                    <li><a href="#">会议讲座</a></li>
                                    <li><a href="#">电影演出</a></li>
                                </ul>
                                <ul class="nav01 fl">
                                    <li><a  var_dump($student);href="#">管理服务</a></li>
                                    <li><a href="#">后勤服务</a></li>
                                    <li><a href="#">观光访问</a></li>
                                    <li><a href="#">校历</a></li>
                                </ul>

                            </div>
                        </div>
                    </li>
                </ul>
            </section>
        </section>
    </section>
</header>
<!--中间-->
<article class="content">
    <!--轮播图部分-->
    <section class="iosSliderDemo" style="padding-bottom: 450.333px;">
        <div class="fluidHeight" style="height: 450.333px;">
            <div class="sliderContainer" style="max-height: 450.333px;">
                <div class="iosSlider" style="position: relative; top: 0px; left: 0px; overflow: hidden; z-index: 1; perspective: 1000px; backface-visibility: hidden; width: 1351px; height: 450px;">
                    <div class="slider" style="
					position: relative;
					cursor: -webkit-grab;
					backface-visibility: hidden;
					transform: matrix(1, 0, 0, 1, -20265, 0);
					width: 8106px;">
                        <!--轮播图-->
                        <div class="item item1" style="backface-visibility: hidden; position: absolute; top: 0px; transform: matrix(1, 0, 0, 1, 16212, 0); width: 1351px;">
                            <div class="inner">
                                <a href="#" target="_blank">
                                    <img src="source/70c35369tw1ee4oltfrn9j20f106e0uq.jpg" style="height: 100%" title=""></a>
                                <div class="selectorShadow"></div>
                                <div class="text1" style="">
                                    <span>东北大学建校94周年“双一流”建设推进交流会即将举行</span>
                                </div>
                            </div>
                        </div>

                        <div class="item item1" style="backface-visibility: hidden; position: absolute; top: 0px; transform: matrix(1, 0, 0, 1, 17563, 0); width: 1351px;">
                            <div class="inner">
                                <a href="#" target="_blank">
                                    <img src="source/70c35369tw1ee4ou9dsuxj20f106emys.jpg" style="height: 100%" title="">
                                </a>
                                <div class="selectorShadow"></div>
                                <div class="text1" style="">
                                    <span>敬请关注东北大学94周年校庆年启动仪式</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item1" style="backface-visibility: hidden; position: absolute; top: 0px; transform: matrix(1, 0, 0, 1, 18914, 0); width: 1351px;">
                            <div class="inner">
                                <a href="#" target="_blank">
                                    <img src="source/70c35369tw1ee4ouf7ft9j20f106e40o.jpg" style="height: 100%"title="">
                                </a>
                                <div class="selectorShadow"></div>
                                <div class="text1" style="">
                                    <span>东北大学：智能化设计激活中国航空新引擎</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item1" style="backface-visibility: hidden; position: absolute; top: 0px; transform: matrix(1, 0, 0, 1, 20265, 0); width: 1351px;">
                            <div class="inner">
                                <a href="#" target="_blank">
                                    <img src="source/70c35369tw1ee4ovaf8cyj20f106egnl.jpg" style="height: 100%" title="">
                                </a>
                                <div class="selectorShadow"></div>
                                <div class="text1" style="left: 10%; opacity: 0.8;">
                                    <span>【沈阳晚报】51对校友新人报名今年东大集体婚礼</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item1" style="backface-visibility: hidden; position: absolute; top: 0px; transform: matrix(1, 0, 0, 1, 21616, 0); width: 1351px;">
                            <div class="inner">
                                <a href="#" target="_blank">
                                    <img src="source/colorado-2263365_1920.jpg" title="">
                                </a>
                                <div class="selectorShadow"></div>
                                <div class="text1" style="">
                                    <span>匆匆百年，致意先生——“张学良与东大”专题展览开幕</span>
                                </div>
                            </div>
                        </div>
                        <div class="item item1" style="backface-visibility: hidden; position: absolute; top: 0px; transform: matrix(1, 0, 0, 1, 14861, 0); width: 1351px;">
                            <div class="inner">
                                <a href="#" target="_blank">
                                    <img src="source/landscape-2263132_1920.jpg" title="">
                                </a>
                                <div class="selectorShadow"></div>
                                <div class="text1" style="">
                                    <span>王国栋院士为软件学院师生作专题报告</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slideSelectors">
                    <div class="prev" style="cursor: pointer;"></div>
                    <div class="item" style="cursor: pointer;"></div>
                    <div class="item" style="cursor: pointer;"></div>
                    <div class="item" style="cursor: pointer;"></div>
                    <div class="item selected" style="cursor: pointer;"></div>
                    <div class="item" style="cursor: pointer;"></div>
                    <div class="item" style="cursor: pointer;"></div>
                    <div class="next" style="cursor: pointer;"></div>
                </div>
                <div class="scrollbarContainer"></div>
            </div>
        </div>
    </section>
    <!--核心内容部分-->
    <section class="con_wap">
        <!--新闻推送-->
        <section class="new">
            <h2><a href="#" target="_blank">学院要闻</a></h2>
            <!--图文-->
            <section class="newL" id="newsLeft">
                <a href="#" target="_blank">
                    <img src="source/484d7eb258891a6d376b27.JPG" border="0" width="270" height="130">
                    <h3>东北大学举行学习贯彻总书记讲话和全国高校思政工作会议及中央31号文件精神领导小组第三次工作会</h3>
                </a>
                <p>东大学习贯彻总书记讲话和全国高校思政会及中央31号文件精神领导小组第三次工作会在办公楼举行。</p>
            </section>
            <!--中间-->
            <section class="newR" id="newsCenter">


                <ul>
                    <li style="height: 15%">
                        <span class=" icon-bolt alert-success" style="border-radius: 50%;">new</span>
                        <a href="#" target="_blank">
                            东北大学团委举行“迎五四、学讲话、争先进”主题座谈会学习习近平总书记重要讲话精神
                        </a>
                    </li>
                    <li style="height: 15%">
                        <span class=" icon-bolt alert-success" style="border-radius: 50%;">new</span>
                        <a href="#" target="_blank">“IO Talk”东北大学国际组织人才讲堂首场暨国关学生文化节开幕式举行</a>
                    </li>
                    <li style="height: 15%">
                        <a href="#" target="_blank">
                            <span class=" icon-bolt alert-success" style="border-radius: 50%;">new</span>
                            浑南校区组织收听观看网上共青团建设暨“青年之声”运行两周年电视电话会议
                        </a>
                    </li>
                    <li style="height: 15%">
                        <span class=" icon-bolt alert-success" style="border-radius: 50%;">new</span>
                        <a href="#" target="_blank">自主自立 勿忘初心——记2013级理学院博士研究生胡蕊的美国学术交流</a>
                    </li>
                </ul>
            </section>
            <!--最右-->
            <section class="newR" id="newRight">
                <ul class="newR" id="newsRight">
                    <li style="height: 15%">
                        <span class="icon-thumbs-up alert-danger" style="border-radius: 50%;">hot</span>
                        <a href="#" target="_blank">东北大学喜迎94周年华诞 再获重大捐赠</a>
                    </li>
                    <li style="height: 15%">
                        <span class="icon-thumbs-up alert-danger" style="border-radius: 50%;">hot</span>
                        <a href="#" target="_blank">王国栋院士为软件学院师生作专题报告</a>
                    </li>
                    <li style="height: 15%">
                        <span class="icon-thumbs-up alert-danger" style="border-radius: 50%;">hot</span>
                        <a href="#" target="_blank">教授茶座第67期-张红霞教授“谈人生，想未来”</a>
                    </li>
                    <li style="height: 15%">
                        <span class="icon-thumbs-up alert-danger" style="border-radius: 50%;">hot</span>
                        <a href="#" target="_blank">艺术学院2015级本科生团支部主题党课暨推优入党活动举行</a>
                    </li>
                </ul>
            </section>
        </section>
        <!--教学科研-->
        <section class="conL">
            <section class="jxky"> var_dump($student);
                <h2><a href="#" target="_blank">教学科研</a> </h2>
                <dl><dt>
                        <a href="#" target="_blank"><img src="source/484d7eb258891a72726912.jpg" border="0"></a>
                    </dt>
                    <dd>
                        <h3><a href="#" target="_blank">生命科学学院汤富酬研究组在<em>Cell Stem Cell</em>在线发表论文揭示人类胚胎期生殖细胞基因表达调控机制</a></h3>
                        <p>生命科学学院BIOPIC中心汤富酬课题组与北医三院乔杰课题组在<em>Cell Stem Cell</em>杂志在线发表了题为“<a title="" href="#" target="_blank"><em>Single-Cell RNA-Seq Analysis Maps Development of Human Germline Cells and Gonadal Niche Interactions</em></a>” 的研究论文，首次在单细胞分辨率和全转录组水平，系统阐明了人类胚胎性腺中生殖细胞及其微环境细胞发育过程中的基因表达图谱及其调控机理。</p>
                    </dd></dl>
            </section>
            <section class="mtbd clear">
                <h2><a href="#" target="_blank">媒体东大</a> </h2>
                <ul><li><span>人民日报</span><a href="#" target="_blank">“中国梦”激扬“青春梦”——东北大学党委书记郝平谈五四精神与青年学子</a></li>
                    <li><span>新华社</span><a href="#" target="_blank">一字之差天地宽——访东北大学计算机学院王义院士</a></li></ul>
            </section>
            <section class="tzgg clear">
                <h2><a href="#">通知公告</a> </h2>
                <ul id="pku_notice"><li><span><i>04-28</i>  .  2017</span><a href="#">五·一假期安全提示 </a> </li><li><span><i>04-28</i>  .  2017</span><a href="#">关于为东北大学建校94周年校友返校日提供临时就餐服务的公告 </a> </li><li><span><i>04-18</i>  .  2017</span><a href="#">关于停止非学历继续教育培训合作办学的声明 </a> </li></ul>
            </section>
        </section>
        <!--人物风采-->
        <section class="conR" id="conR">
            <dl class="first">
                <dt style="height: 100%;">
                    <a href="#" target="_blank"><img style="height: 50px" src="source/rw_icon.png"><span>人物风采</span></a>
                </dt>
                <dd>
                    <a href="#" target="_blank" style="display:block; width:100%; height:100%;background:url(source/zb.jpg) no-repeat center;background-size:cover;">
                        <h3>张斌：育人为范韧如蒲 潜心学问坚如石</h3>
                    </a>
                    <section class="cover">
                        <p></p>
                        <h3>张斌：育人为范韧如蒲 潜心学问坚如石</h3>
                    </section>
                </dd></dl>
            <dl>
                <dt style="height: 100%;">
                    <a href="#" target="_blank"><img style="width: 50px" src="source/yay_icon.png"><span>菁菁校园</span></a>
                </dt>
                <dd>
                    <a href="#" target="_blank" style="display:block; width:100%; height:100%;background:url(source/zs.jpg) no-repeat center;background-size:cover;"><h3>计算机学院开展植树志愿服务活动</h3></a>
                    <section class="cover">
                        <p></p>
                        <h3>计算机学院开展植树志愿服务活动</h3>
                    </section>
                </dd></dl>
            <dl class="last">
                <dt style="height: 100%;">
                    <a href="#"><img height="50" src="source/xs_icon.png"><span>东大史苑</span></a>
                </dt>
                <dd>
                    <a href="#" style=" display:block; width:100%; height:100%;background:url(source/zxl.jpg) no-repeat center right; background-size:cover;">
                        <h3>张学良（1901—2001）辽宁鞍山人</h3>
                    </a>
                    <section class="cover">
                        <p></p>
                        <h3>张学良（1901—2001）辽宁鞍山人</h3>
                    </section>
                </dd>
            </dl>
        </section>
        <!--专题网站-->
        <section class="ztw clear" style="margin-bottom: -5%">
            <dl>
                <dt style="border: 0px">
                    <img style="height: 50px" src="source/zt_icon.png"><span>专题网站</span>
                </dt>
                <dd><!--begin 33494-4943-1-->
                    <ul id="ztw">
                        <li><a href="#" target="_blank"><img src="source/topic_22_keyan.jpg" border="0"><h3>中央科研资金管理政策</h3></a>
                            <section class="cover">
                                <p></p>
                                <h3>中央科研资金管理政策</h3>
                            </section></li>
                        <li><a href="#" target="_blank"><img src="source/topic_22_liangxueyizuo.jpg" border="0"><h3>“两学一做”学习教育</h3></a>
                            <section class="cover">
                                <p></p>
                                <h3>“两学一做”学习教育</h3>
                            </section></li>
                        <li><a href="#" target="_blank"><img src="source/topic_22_security.jpg" border="0"><h3>东北大学章程实施综合改革稳步推进</h3></a>
                            <section class="cover">
                                <p></p>
                                <h3>东北大学章程实施综合改革稳步推进</h3>
                            </section></li>
                        <li><a href="#" target="_blank"><img src="source/download.jpg" border="0"><h3>东北大学六维空间</h3></a>
                            <section class="cover">
                                <p></p>
                                <h3>东北大学六维空间</h3>
                            </section></li>
                        <li><a href="#" target="_blank"><img src="source/images (1).jpg" border="0"><h3>东北大学教务处</h3></a>
                            <section class="cover">
                                <p></p>
                                <h3>东北大学教务处</h3>
                            </section></li>
                    </ul>
                    <!--end 33494-4943-1--></dd>
            </dl>
        </section>
        <!--特殊内容-->
        <section class="fw_wap clear">
            <ul id="fw_wap" style="margin-top: 5%">
                <li class="icon1">
                    <a href="#"><img class="img" src="source/fw_img.jpg"> </a>
                    <section class="cover1">
                        <p></p>
                        <h3><span><img src="source/rc_icon.png"> </span><a href="#">信息公开　</a> </h3>
                    </section>
                </li>
                <li class="icon2">
                    <a href="#"><img class="img" src="source/fw_img1.jpg"> </a>
                    <section class="cover1">
                        <p></p>
                        <h3><span><img src="source/xf_icon.png"> </span><a href="#">党代表热线</a> </h3>
                    </section>
                </li>
                <li class="icon3">
                    <a href="#"><img class="img" src="source/download (1).jpg"> </a>
                    <section class="cover1">
                        <p></p>
                        <h3><span><img src="source/xn_icon.png"></span><a href="#">校园地图　</a> </h3>
                    </section>
                </li>
                <li class="icon4">
                    <a href="#"><img class="img" src="source/ddddda.jpg"> </a>
                    <section class="cover1">
                        <p></p>
                        <h3><span><img src="source/jz_icon.png"> </span><a href="#">六维空间　</a> </h3>
                    </section>
                </li>
                <li class="icon5">
                    <a href="#"><img class="img" src="source/fw_img4.jpg"> </a>
                    <section class="cover1">
                        <p></p>
                        <h3><span><img src="source/gk_icon.png"> </span><a href="#">慕　　课　</a> </h3>
                    </section>
                </li>
                <li class="icon6">
                    <a href="#"><img class="img" src="source/ddddda.jpg"> </a>
                    <section class="cover1">
                        <p></p>
                        <h3><span><img src="source/mh_icon.png"> </span><a href="#">校内门户　</a> </h3>
                    </section>
                </li>
                <li class="icon7">
                    <a href="#"><img class="img" src="source/fw_img9.jpg"> </a>
                    <section class="cover1">
                        <p></p>
                        <h3><span><img src="source/xx_icon.png"> </span><a href="#">网络服务　</a> </h3>
                    </section>
                </li>
                <li class="icon8">
                    <a href="#"><img class="img" src="source/fw_img6.jpg"> </a>
                    <section class="cover1">
                        <p></p>
                        <h3><span><img src="source/lj_icon.png"> </span><a href="#">相关链接　</a> </h3>
                    </section>
                </li>
            </ul>
        </section>
    </section>
</article>
<!--尾部-->
<section class="fot_bot clear_f">
    <section class="bq1">
        版权所有&copy;东北大学<span>|</span>地址：辽宁省沈阳市浑南区创新路5号<span>|</span>邮编：100871<span>|</span>邮箱：webmaster@neu.edu.cn<span>|</span>辽ICP备05065075号-1<span>|</span>京公网安备 110402430047 号
    </section>
    <section class="bq2">
        版权所有&copy;东北大学<span>|</span>地址：辽宁省沈阳市浑南区创新路5号<span>|</span>邮编：100871<br />邮箱：webmaster@neu.edu.cn<span>|</span>辽ICP备05065075号-1<span>|</span>京公网安备 110402430047 号
    </section>
    <section class="bq3">
        <div id="bq3_left"><span>版权所有&copy;东北大学</span><span>邮编：100001</span><span>辽ICP备05065075号-1</span></div>
        <div id="bq3_mid"><span>|</span><span>|</span><span>|</span></div>
        <div id="bq3_right"><span>地址：辽宁省沈阳市浑南区创新路5号</span><span>邮箱：webmaster@neu.edu.cn</span><span>京公网安备 110402430047 号</span></div>
    </section>
</section>
<!--javaScript代码部分-->
<script type="text/javascript">
    var _filename_ = location.pathname.match(/[^\/]+$/);

    if (_filename_ != null && _filename_.length == 1)
    {
        var _id_ = _filename_[0].match(/^[^_\.]+/);

        if (_id_ != null && _id_.length > 0)
        {
            $("#" + _id_).addClass("current");
        }
    }
    $(function(){
        $(".ssubNav1").toggle(function(){
            $("#mobileNav").slideDown(300);
        },function(){
            $("#mobileNav").slideUp(300);
        })
        $(".searchlogo").click(function(event){
            event.stopPropagation();
            $('.searchDIV').slideToggle('fast');
        });
    });
</script>
<script src="source/responsiveslides.min.js" type="text/javascript"></script>
<script>
    jQuery.get("dat/newsLeft.xml", function(dat)
    {
        var news=dat.getElementsByTagName("root");
        var table = document.getElementById("newsLeft");
        table.innerHTML=news[0].firstChild.data;
    });
    jQuery.get("dat/newsCenter.xml", function(dat)
    {
        var news=dat.getElementsByTagName("root");
        var table = document.getElementById("newsCenter");
        table.innerHTML=news[0].firstChild.data;
    });
    jQuery.get("dat/newsRight.xml", function(dat)
    {
        var news=dat.getElementsByTagName("root");
        $("#newsRight").children("[class!=\"last\"]").remove();
        $("#newsRight li:last-child").before(news[0].firstChild.data);

    });
    jQuery.get("dat/notice_num.dat", function(dat)
    {
        if(false == isNaN(parseInt(dat)))
            $("#notice_num").html("<b>&nbsp;" + parseInt(dat) + "&nbsp;</b>");
        else
            $("#notice_num").html("<b>&nbsp;0&nbsp;</b>");
    });
    jQuery.get("dat/newsJXKY.xml", function(dat)
    {
        var news=dat.getElementsByTagName("root");
        $("section.jxky>dl").html(news[0].firstChild.data);

    });

    jQuery.get("dat/newsMTBD.xml", function(dat)
    {
        var news=dat.getElementsByTagName("root");
        $("section.mtbd>ul").html(news[0].firstChild.data);

    });
    jQuery.get("dat/newsRWFC.xml", function(dat)
    {
        var news=dat.getElementsByTagName("root");
        $("section.conR>dl.first").html(news[0].firstChild.data);
    });
    jQuery.get("dat/newsJJXY.xml", function(dat)
    {
        var news=dat.getElementsByTagName("root");
        $("section.conR>dl").eq(1).html(news[0].firstChild.data);
    });

    jQuery.get("dat/newsZTWZ.xml", function(dat)
    {
        var news=dat.getElementsByTagName("root");
        $("section.ztw>dl>dd").html(news[0].firstChild.data);
    });

    jQuery.get("dat/recentList.xml", function(dat)
    {
        var noticeList=dat.getElementsByTagName("Notice");
        var table = document.getElementById("pku_notice");
        var listContent="";
        for(var i=0;i<3 && i<noticeList.length;i++){
            listContent=listContent+"<li><span><i>"+
                    noticeList[i].getElementsByTagName("PubDate")[0].firstChild.data.substring(5,10)+
                    "</i>  .  "+noticeList[i].getElementsByTagName("PubDate")[0].firstChild.data.substring(0,4)+
                    "</span><a href=\"./tzgg/tzggxx/index.htm?id="+
                    noticeList[i].getElementsByTagName("ID")[0].firstChild.data+"\">"+
                    noticeList[i].getElementsByTagName("Title")[0].firstChild.data+" </a> </li>";
        }
        table.innerHTML=listContent;
    });
</script>
<script src="source/jquery.easing-1.3(1).js"></script>
<script src="source/jquery.iosslider(1).js"></script>
<script type="text/javascript" src="source/banner.js"></script>
<script language="JavaScript">
    function checkMail(str) {
        var xmlhttp;
        if (str==""){
            document.getElementById('email').innerHTML="";
            return;
        }
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

        xmlhttp.open("GET","/checkNumber/"+str,true);
        xmlhttp.send();
    }
</script>
</body>
</html>