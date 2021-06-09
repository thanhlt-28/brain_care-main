@extends('layouts.main')
@section('content')

<div class="container-wraper">
    <div class="container" style="margin-top: 1%">
        <div class="panel panel-default">
            <div class="panel-body mx-auto">
                <form role="form" action="{{route('login')}}" method="POST">
                    @csrf
                    <fieldset>
                        <div class="row">
                            <div class="center-block">
                                <img class="profile-img" src="{{asset('assets/img/health.png')}}">
                                <h3 class="text-white">Login</h3>
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input class="form-control mt-3" placeholder="Email" name="email" type="text" value="{{ old('email') }}" autofocus>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input class="form-control mt-3" placeholder="Mật khẩu" name="password" type="password" value="">
                            </div>
                        </div>
                        <div class="form-group mt-5">
                            <button type="submit" class="btn btn-lg btn-primary btn-block">Đăng nhập</button>
                        </div>
                        @isset($msg)
                        <div>
                            <span style="color: red">{{$msg}}</span>
                        </div>
                        @endisset
                        <div class="login-help mt-5">
                            <a class=" text-white" href="{{route('register')}}">Đăng ký</a>
                            <div class="text-center p-t-90 mb-3">
                                @if (Route::has('password.request'))
                                <a class=" text-white" href="{{ route('password.request') }}">
                                    Quên mật khẩu?
                                </a>
                                @endif
                            </div>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection