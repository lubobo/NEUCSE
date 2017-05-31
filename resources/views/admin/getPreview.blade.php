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

    <link rel="stylesheet" href="/bootstrap-3.3.5-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/src/main.css">
    <link rel="stylesheet" href="/Font-Awesome-3.2.1/css/font-awesome.min.css">
    <!-- share.css -->
    <link rel="stylesheet" href="/social-share/dist/css/share.min.css">
    <script type="text/javascript" src="{{URL::to('/ckeditor/ckeditor.js')}}"></script>
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="/bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
    <!-- share.js -->
    <script src="/social-share/dist/js/social-share.min.js"></script>

    <link href="source/pku.css" rel="stylesheet" type="text/css">
    <script src="source/pku.js" type="text/javascript"></script>
    <script src="source/slider.js" type="text/javascript"></script>

    <script src="source/share.js"></script><link rel="stylesheet" href="source/share_style0_32.css"></head>
<body>
<!--头部-->
<header class="header">
    <section>
        <div class="topLine"></div>
        <section class="topWrap clearfix" style="background-color: #53a8eb;">
            <section class="mainWrap" style="background-color: #53a8eb;">
                <a class="logo" href="/" title="东北大学首页">
                    <img style="width: 213px" src="source/pkulogo_white.png">
                </a>
                <a
            </section>
            <section class="nav yahei clearfix noMobileShow" style="clear:both;">
                <section class="menu" id="smenu">
                    <a class="thuicon-menu menuicon"></a>导航
                </section>
                <ul id="nav">
                    <li class="nav_first"><a id="intro" href="#">东大概况</a>

                    </li>
                    <li><a id="admissions" href="#">招生与资助</a>

                    </li>
                    <li><a id="academics" href="#">院系设置</a>

                    </li>
                    <li><a id="education" href="#">教育教学</a>

                    </li>
                    <li><a id="research" href="#">科学研究</a>

                    </li>
                    <li><a id="collaboration" href="#">合作交流</a>

                    </li>
                    <li class="nav_last"><a id="campuslife" href="#">校园生活</a>

                    </li>
                </ul>
            </section>
        </section>
    </section>
</header>
<section class="con_wap" style="padding-top: -15px">
    <!--新闻推送-->
    <section class="new">

            <h2 class="text-blue" align="center">{!! $name !!}</h2>

        <div class="col-xs-2 col-xs-offset-2 h5 text-info">
            <ul class="breadcrumb" style="background-color: white;padding:0; margin: 0;">
                <span class="glyphicon glyphicon-calendar"> {!! date("Y-m-d") !!}</span>
            </ul>
        </div>
        <div class="col-xs-4 h5 text-info">
            <ul class="breadcrumb" style="background-color:white;padding:0; margin: 0;">
                <span class="glyphicon glyphicon-list-alt"> 分类: </span>
                <li class="active"><a href="#"> Home</a></li>
                <li class="active"><a href="#"> {!! $categories !!}</a></li>
                <li class="active">{!! $tag !!}</li>
            </ul>
        </div>
        <div class="col-xs-4  h5 text-info">
            <ul class="breadcrumb" style="background-color: white;padding:0; margin: 0;">
                <span class="glyphicon glyphicon-user"> 来源：</span>
                <li>{!! $owner !!}</li>
            </ul>
        </div>
        <p>

        </p>
        <!--图文-->
        <!--中间-->
        <section >
            {!! $intro !!}
        </section>
    </section>
</section>

