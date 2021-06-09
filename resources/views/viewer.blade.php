@extends('layouts.main')
@section('content')
<div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
    <form class="mt-3 ml-5 mr-5" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <h5>Thông tin
                <!-- <hr width="10%"> -->
            </h5>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="cust_name" class="form-label">Họ và tên : </label>
                    <input type="text" name="cust_name" value="" class="form-control-sm" placeholder="Điền họ tên..." id="kc01">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="gender" class="form-label">Giới tính : </label>
                    <input type="radio" class="form-input" name="cust_gender" value="0" checked="1" id="kc02"> Nam
                    <input type="radio" class="form-input" name="cust_gender" value="1" id="kc02"> Nữ
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="doB" class="form-label">Năm sinh : </label>
                    <input type="date" name="cust_dob" class="form-control-sm" placeholder="Tuổi..." id="kc02">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="phone" class="form-label">SĐT : </label>
                    <input type="number" name="phone" placeholder="Số điện thoại..." class="form-control-sm" id="kc03">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="email" class="form-label">Email : </label>
                    <input type="email" name="cust_email" placeholder="Điền email..." class="form-control-sm" id="kc03">
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="address" class="form-label">Địa chỉ : </label>
                    <input type="text" placeholder="Địa chỉ..." name="cust_address" class="form-control-sm" id="kc03">
                </div>
            </div>
        </div>

        <div class="mt-1">
            <h5>Triệu chứng</h5>
            <!-- <hr width="10%"> -->
        </div>

        <!--------Form Checkbox--------->
        <div class="row ml-1">
            <!---------Collum-1 ------------>
            <div class="col-md-2">
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc10" type="checkbox" onchange="chkChange('10');">
                    <label for="symptom">Buồn</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc04" type="checkbox" onchange="chkChange('04');">
                    <label for="symptom">Ngủ ít</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc06" type="checkbox" onchange="chkChange('06');">
                    <label for="symptom">Ăn ít</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc12" type="checkbox" onchange="chkChange('12');">
                    <label for="symptom">Tự tử</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc05" type="checkbox" onchange="chkChange('05');">
                    <label for="symptom">Mệt mỏi</label>
                </div>


            </div>

            <!---------Collum-2 ------------>
            <div class="col-md-3">
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc11" type="checkbox" onchange="chkChange('11');">
                    <label for="symptom">Mất thích thú</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc07" type="checkbox" onchange="chkChange('07');">
                    <label for="symptom">Hay quên</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc08" type="checkbox" onchange="chkChange('08');">
                    <label for="symptom">Làm việc chậm chạp</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc09" type="checkbox" onchange="chkChange('09');">
                    <label for="symptom">Ý tưởng bi quan</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc22" type="checkbox" onchange="chkChange('22');">
                    <label for="symptom">Mê sảng</label>
                </div>

            </div>


            <!---------Collum-3 ------------>
            <div class="col-md-3">
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc18" type="checkbox" onchange="chkChange('18');">
                    <label for="symptom">Có lúc nào vui vẻ quá mức</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc19" type="checkbox" onchange="chkChange('19');">
                    <label for="symptom">Sang chấn tâm lý</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc13" type="checkbox" onchange="chkChange('13');">
                    <label for="symptom">Quan hệ trong gia đình</label>
                </div>

                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc24" type="checkbox" onchange="chkChange('24');">
                    <label for="symptom">Diễn biến theo trầm cảm</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc25" type="checkbox" onchange="chkChange('25');">
                    <label for="symptom">6 tháng</label>
                </div>
            </div>

            <!---------Collum-4 ------------>
            <div class="col-md-4">
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc23" type="checkbox" onchange="chkChange('23');">
                    <label for="symptom">Có tang</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc14" type="checkbox" onchange="chkChange('14');">
                    <label for="symptom">Làm việc</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc15" type="checkbox" onchange="chkChange('15');">
                    <label for="symptom">Có bệnh cơ thể</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc16" type="checkbox" onchange="chkChange('16');">
                    <label for="symptom">Có dùng thuốc điều trị bệnh, thuốc gây nghiện</label>
                </div>
                <div class="mb-0 form-check">
                    <input class="form-check-input" name="symptom" value="" id="kc17" type="checkbox" onchange="chkChange('17');">
                    <label for="symptom">Có ý nghĩ có người hại, nghe tiếng nói</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label class="form-label-w" for="time_sym">Thời gian cơn <br> (tính theo ngày)</label>
                    <input class="form-control-sm" name="time_sym" id="kc20" onblur="txtBlur('20');" width="10">
                </div>
                <div class="col-md-6">
                    <label class="form-label-w" for="result">
                    </label>
                    <h5>Chẩn đoán: <span id="kc21" name="result" style="color:blue;"></span></h5>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
            <button class="btn btn-primary" type="submit"> Lưu lại</button>
        </div>
    </form>
</div>

@endsection