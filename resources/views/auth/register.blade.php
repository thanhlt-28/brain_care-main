@extends('layouts.main')
@section('content')

<div class="container-wraper">
    @if(session('success'))
    <span class="mx-auto alert alert-success">
        <strong>{{ session('success') }}</strong>
    </span>
    @endif
    <div class="container" style="margin-top: 1%">
        <div class="panel panel-default">
            <div class="row">
                <div class="center-block">
                    <img class="profile-img" src="{{asset('assets/img/health.png')}}">
                    <h3 class="text-white">Register</h3>
                </div>
            </div>

            <div class="panel-body mx-auto ">
                <form role="form" method="POST" action="{{route('auth.postRegister')}}" enctype="multipart/form-data">
                    @csrf
                    <div class=" form-group mt-5">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                            <input class="form-control mt-3" placeholder="Họ và tên" name="name" type="text" value="{{ old('name') }}" autofocus>
                        </div>
                        @if ($errors->has('name'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group mt-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input class="form-control mt-3" placeholder="Email" name="email" type="text" value="{{ old('email') }}">
                        </div>
                        @if ($errors->has('email'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group  mt-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input class="form-control mt-3" placeholder="Mật khẩu" name="password" type="password">
                        </div>
                        @if ($errors->has('password'))
                        <span class="text-danger">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group  mt-3">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input class="form-control mt-3" placeholder="Xác nhận mật khẩu" name="password_confirmation" type="password">
                        </div>
                    </div>

                    <div class="form-group  mt-5 mb-3">
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Đăng ký</button>
                    </div>
                    <center><a class="text-white" href="{{('login')}}">Quay về đăng nhập</a></center>
                </form>
            </div>
        </div>
    </div>
</div>
</div>

@endsection