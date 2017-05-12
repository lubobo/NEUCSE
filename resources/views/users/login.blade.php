@extends('layouts.app')

@section('header')
    @extends('assets.header')
@endsection
@section('content')
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
                        <div class="container" style="align-self: center">
                            <div class="panel panel-success col-xs-4 col-xs-offset-4">
                                <form class="form-group" method="post" action="{{route("login_process")}}">
                                    {{csrf_field()}}
                                    <h4 class="text-center  text-primary" style="padding-top: 5%">登录帐号</h4>
                                    <h5 style="padding-top: 5%">姓名：
                                        <select class="form-control" name="role">
                                                <option>Student</option>
                                                <option>Teacher</option>
                                        </select>
                                    </h5>
                                    <h5 style="padding-top: 5%">用户名：
                                        <input class="form-control" type="text" placeholder="学号/邮箱" name="name">
                                    </h5>
                                    <h5 style="padding-top: 5%;padding-bottom: 5%">密码：
                                        <input class="form-control" type="password" name="password">
                                    </h5>
                                    <input class="btn btn-block btn-success" type="submit" value="登陆">
                                    <a href="{{route('login')}}" class="btn btn-block btn-success">注册</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section>
@endsection




