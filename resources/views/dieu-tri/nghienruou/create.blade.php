@extends('layouts.main')
@section('content')

<div class="container-wraper">
    <div class="tab-content" id="myTabContent">
        <form class="mt-3 ml-5 mr-5" action="{{route('nghien-ruou.store_nghien_ruou')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <h5>Thông tin
                    <!-- <hr width="10%"> -->
                </h5>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="name" class="form-label">Họ và tên : </label>
                        <input type="text" name="name" class="form-control-sm" placeholder="Điền họ tên..." id="kc01" onblur="txtBlur('01');">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="gender" class="form-label">Giới tính : </label>
                        <input type="radio" class="form-input" name="gender" value="0" checked="1" id="kc02" onblur="txtBlur('02');"> Nam
                        <input type="radio" class="form-input" name="gender" value="1" id="kc02" onblur="txtBlur('02');"> Nữ
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="doB" class="form-label">Năm sinh : </label>
                        <input type="text" name="doB" class="form-control-sm" placeholder="Năm sinh..." id="kc02" onblur="txtBlur('02');">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="mobile" class="form-label">SĐT : </label>
                        <input type="number" name="mobile" placeholder="Số điện thoại..." class="form-control-sm" id="kc03" onblur="txtBlur('03');">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email : </label>
                        <input type="email" name="email" placeholder="Điền email..." class="form-control-sm" id="kc03" onblur="txtBlur('03');">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="mb-3">
                        <label for="address" class="form-label">Địa chỉ : </label>
                        <input type="text" placeholder="Địa chỉ..." name="address" class="form-control-sm" id="kc03" onblur="txtBlur('03');">
                    </div>
                </div>
            </div>
            <div class="d-grid gap-2 mt-5 d-md-flex justify-content-md-center">
                <button class="btn btn-primary" type="submit"> Lưu lại</button>
            </div>
        </form>
    </div>
</div>

@endsection