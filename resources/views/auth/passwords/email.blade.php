@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 5%">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">找回密码</div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('resets') }}">

                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">校园邮箱</label>

                            <div class="col-md-6">
                                <input id="email" type="email" onmouseout="checkMail(this.value)" class="form-control" name="email" value="{{ old('email') }}" required>

                                <span class="text-danger" style="visibility: hidden" id="errors"></span>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    发送验证消息
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
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
                document.getElementById("errors").innerHTML=this.responseText;
            }
        }

        xmlhttp.open("GET","/checkMail/"+str,true);
        xmlhttp.send();
    }
</script>