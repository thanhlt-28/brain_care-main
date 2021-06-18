@extends('layouts.main')
@section('content')
<div class="container-wraper">
    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcTC() {
            document.getElementById('tc01a').innerHTML = kc[19];
            document.getElementById('tc01b').innerHTML = (kc[19] >= 180 ? 1 : 0);
            document.getElementById('tc02a').innerHTML = kc[3];
            document.getElementById('tc02b').innerHTML = (kc[3] == 1 ? 1 : 0);
            n = parseInt(document.getElementById('tc01b').innerHTML) + parseInt(document.getElementById('tc02b').innerHTML);
            document.getElementById('tc03a').innerHTML = (n == 2 ? 1 : 0);
            document.getElementById('tc04').innerHTML = kc[4];
            document.getElementById('tc05').innerHTML = (kc[4] == 0 ? 0 : 1);
            var n = kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10];
            document.getElementById('tc06').innerHTML = n;
            document.getElementById('tc07').innerHTML = (n >= 3 ? 1 : 0);
            document.getElementById('tc08').innerHTML = kc[12] + kc[13];
            document.getElementById('tc09').innerHTML = (kc[12] + kc[13] >= 1 ? 1 : 0);
            document.getElementById('tc10').innerHTML = kc[14];
            document.getElementById('tc11').innerHTML = kc[15];
            n = kc[14] + kc[15];
            document.getElementById('tc12').innerHTML = (n == 0 ? 1 : 0);
            n = parseInt(document.getElementById('tc03a').innerHTML) + parseInt(document.getElementById('tc05').innerHTML) + parseInt(document.getElementById('tc07').innerHTML) + parseInt(document.getElementById('tc09').innerHTML) + parseInt(document.getElementById('tc12').innerHTML);
            document.getElementById('tc14a').innerHTML = (n == 5 ? 1 : 0);

            document.getElementById('tc14b').innerHTML = (n == 5 ? "Lo âu" : "K lo âu");
        }

        function recalcTCB() {
            var n = kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10];
            document.getElementById("tcb01").innerHTML = n;
            document.getElementById("tcb02").innerHTML = (n >= 4 ? 1 : 0);
            document.getElementById("tcb04").innerHTML = kc[14];
            document.getElementById("tcb05").innerHTML = (kc[14] == 1 ? 1 : 0);
            document.getElementById("tcb06").innerHTML = kc[11];
            document.getElementById("tcb07").innerHTML = (kc[11] == 0 ? 1 : 0);

            document.getElementById("tcb08").innerHTML = kc[21];
            document.getElementById("tcb09").innerHTML = (kc[21] == 0 ? 1 : 0);
            document.getElementById("tcb10").innerHTML = kc[12] + kc[13];

            document.getElementById("tcb11").innerHTML = (kc[12] + kc[13] >= 1 ? 1 : 0);
            n = parseInt(document.getElementById("tcb02").innerHTML) + parseInt(document.getElementById("tcb05").innerHTML) + parseInt(document.getElementById("tcb07").innerHTML) + parseInt(document.getElementById("tcb09").innerHTML) + parseInt(document.getElementById("tcb11").innerHTML);
            n = n == 5 ? 1 : 0;
            document.getElementById("tcb12a").innerHTML = n;
            document.getElementById("tcb12b").innerHTML = (n == 1 ? "Lo âu thực thể" : "Không LA thực thể");
        }

        function recalcTCC() {
            var n = kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10];
            document.getElementById("tcc01").innerHTML = n;
            document.getElementById("tcc03").innerHTML = (n >= 4 ? 1 : 0);
            document.getElementById("tcc04").innerHTML = kc[15];
            document.getElementById("tcc05").innerHTML = (kc[15] == 1 ? 1 : 0);

            document.getElementById("tcc06").innerHTML = kc[11];;
            document.getElementById("tcc07").innerHTML = (kc[11] == 0 ? 1 : 0);
            document.getElementById("tcc08").innerHTML = kc[21];
            document.getElementById("tcc09").innerHTML = (kc[21] == 0 ? 1 : 0);
            document.getElementById("tcc10").innerHTML = kc[12] + kc[13];
            document.getElementById("tcc11").innerHTML = (kc[12] + kc[13] >= 1 ? 1 : 0);
            n = parseInt(document.getElementById("tcc03").innerHTML) + parseInt(document.getElementById("tcc05").innerHTML) + parseInt(document.getElementById("tcc07").innerHTML) + parseInt(document.getElementById("tcc09").innerHTML) + parseInt(document.getElementById("tcc11").innerHTML);
            n = (n == 5 ? 1 : 0);
            document.getElementById("tcc12a").innerHTML = n;
            document.getElementById("tcc12b").innerHTML = (n == 1 ? "LA do chất" : "Không LA do chất");
        }

        function recalcRLT() {
            document.getElementById("rlt01").innerHTML = kc[18];
            document.getElementById("rlt02").innerHTML = (kc[18] == 1 ? 1 : 0);
            var n = kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10];
            document.getElementById("rlt03").innerHTML = (n >= 4 ? 1 : 0);
            document.getElementById("rlt05").innerHTML = (kc[12] + kc[13] >= 1 ? 1 : 0);
            n = parseInt(document.getElementById("rlt03").innerHTML) + parseInt(document.getElementById("rlt05").innerHTML);
            document.getElementById("rlt06").innerHTML = (n == 2 ? 1 : 0);

            document.getElementById("rlt07").innerHTML = kc[11];
            document.getElementById("rlt08").innerHTML = (kc[11] == 0 ? 1 : 0);
            document.getElementById("rlt09").innerHTML = kc[22];
            document.getElementById("rlt10").innerHTML = (kc[22] == 0 ? 1 : 0);
            document.getElementById("rlt11").innerHTML = kc[23];
            document.getElementById("rlt12").innerHTML = (kc[23] == 0 ? 0 : 1);
            n = (parseInt(document.getElementById("rlt02").innerHTML) + parseInt(document.getElementById("rlt06").innerHTML) + parseInt(document.getElementById("rlt08").innerHTML) + parseInt(document.getElementById("rlt10").innerHTML) + parseInt(document.getElementById("rlt12").innerHTML)) == 5 ? 1 : 0;
            document.getElementById("rlt13a").innerHTML = n;
            document.getElementById("rlt13b").innerHTML = (n == 1 ? "RL thích nghi voi LA" : "Không RLTN với LA");
        }

        function chandoan() {
            if (parseInt(document.getElementById("tcb12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "LA thực thể";
            } else
            if (parseInt(document.getElementById("tcc12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "LA do chất";
            } else
            if (parseInt(document.getElementById("rlt13a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "RL thích nghi LA";
            } else
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "LA lan tỏa";
            } else {
                document.getElementById("kc21").innerHTML = "Không lo âu";
            }
        }

        function recalc() {
            recalcTC();
            recalcTCB();
            recalcTCC();
            recalcRLT();
            chandoan();
        }

        function chkChange(chkid) {
            var chkobj = document.getElementById('kc' + chkid);
            kc[chkid - 1] = chkobj.checked ? 1 : 0;
            //alert('Has been changed: kc'+chkid+", cheked: "+chkobj.checked+", variable: "+kc[chkid-1]);
            recalc();
        }

        function txtBlur(txtid) {
            var txtobj = document.getElementById('kc' + txtid);
            kc[txtid - 1] = txtobj.value;
            //alert("New value: "+kc[txtid-1]);
            recalc();
        }
    </script>


    <!---/////------------check-----------/////------->

    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Khám chẩn đoán</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Chẩn đoán lo âu</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">Lo âu lan tỏa</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="profile" aria-selected="false">Lo âu do bệnh cơ thể</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="contact" aria-selected="false">Lo âu do chất</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="contact" aria-selected="false">Rối loạn thích nghi</button>
                </li>
            </ul>
        </div>
    </div>

    @php
    $index=1
    @endphp
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('mat-tri.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5>Thông tin
                        <!-- <hr width="10%"> -->
                    </h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="cust_name" class="form-label">Họ và tên : </label>
                            <input type="text" name="cust_name" class="form-control-sm" placeholder="Điền họ tên..." id="kc01">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Giới tính : </label>
                            <input type="radio" class="form-input" name="cust_gender" value="Nam" checked="1" id="kc02"> Nam
                            <input type="radio" class="form-input" name="cust_gender" value="Nữ" id="kc02"> Nữ
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="doB" class="form-label">Năm sinh : </label>
                            <input type="text" name="cust_dob" class="form-control-sm" placeholder="Năm sinh..." id="kc02">
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
                <!----------checkbox------------>
                <div class="mt-1">
                    <h5>Triệu chứng</h5>
                    <!-- <hr width="10%"> -->
                </div>
                <div class="row ml-5">
                    <!----------Collum-1------------>
                    <div class="col-md-2 ml-1">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc04" type="checkbox" name="symptom[]" value="loauquamuc" onchange="chkChange('04');">
                            <label for="">Lo âu quá mức</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc06" type="checkbox" name="symptom[]" value="bonchonla" onchange="chkChange('06');">
                            <label for="">Bồn chồn</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc07" type="checkbox" name="symptom[]" value="debimetla" onchange="chkChange('07');">
                            <label for="">Dễ bị mệt</label>
                        </div>
                    </div>

                    <!---------Collum-2 ------------>
                    <div class="col-md-2 ml-4">

                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc10" type="checkbox" name="symptom[]" value="cangthangla" onchange="chkChange('10');">
                            <label for="">Căng thẳng</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc13" type="checkbox" name="symptom[]" value="quanhela" onchange="chkChange('13');">
                            <label for="">Quan hệ</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc14" type="checkbox" name="symptom[]" value="lamviecla" onchange="chkChange('14');">
                            <label for="">Làm việc</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-2 ml-4">

                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc15" type="checkbox" name="symptom[]" value="cobenhcothela" onchange="chkChange('15');">
                            <label for="">Có bệnh cơ thể</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc16" type="checkbox" name="symptom[]" value="codungthuocla" onchange="chkChange('16');">
                            <label for="">Có dùng thuốc</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc09" type="checkbox" name="symptom[]" value="khochiula" onchange="chkChange('09');">
                            <label for="">Khó chịu</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-2 ml-4">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc19" type="checkbox" name="symptom[]" value="cochuyenbuonla" onchange="chkChange('19');">
                            <label for="">Có chuyện buồn</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc22" type="checkbox" name="symptom[]" value="mesangla" onchange="chkChange('22');">
                            <label for="">Mê sảng</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc24" type="checkbox" name="symptom[]" value="dientienla" onchange="chkChange('24');">
                            <label for="">Diễn tiến</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc23" type="checkbox" name="symptom[]" value="cotangla" onchange="chkChange('23');">
                            <label for="">Có tang</label>
                        </div>
                    </div>
                    <!---------Collum-5 ------------>
                    <div class="col-md-3 ml-4">
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc05" type="checkbox" name="symptom[]" value="loaukssla" onchange="chkChange('05');">
                            <label for="">Lo âu không kiểm soát</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc12" type="checkbox" name="symptom[]" value="roiloanttkhacla" onchange="chkChange('12');">
                            <label for="">Rối loạn tâm thần khác</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc11" type="checkbox" name="symptom[]" value="roiloangiacngula" onchange="chkChange('11');">
                            <label for="">Rối loạn giấc ngủ</label>
                        </div>
                        <div class="mb-3 form-check">
                            <input class="form-check-input" id="kc08" type="checkbox" name="symptom[]" value="kotaptrungla" onchange="chkChange('08');">
                            <label for="">Không tập trung</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <label class="form-label-w" for="">Thời gian cơn :</label>
                            <input class="form-control-sm" placeholder="Tính theo ngày" name="time_sym" id="kc18" onblur="txtBlur('18');" width="10">
                        </div>
                        <div class="col-md-4">
                            <label class="form-label-w" for="">Chẩn đoán: </label>
                            <textarea style="color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1"></textarea>
                        </div>
                    </div>
                </div>
                <div class="d-grid mt-2 gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-primary" type="submit"> Lưu lại</button>
                </div>
            </form>
        </div>
        <div class="tab-pane fade ml-5" id="tab1" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <h3>Lo âu lan tỏa</h3>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Triệu chứng</th>
                    <th>Chỉ số</th>
                    <th>Dấu hiệu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Thời gian cơn</td>
                        <td id="tc01a">&nbsp;</td>
                        <td id="tc01b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Lo âu quá mức</td>
                        <td id="tc02a">&nbsp;</td>
                        <td id="tc02b">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="tc03a">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Lo âu không kiểm soát</td>
                        <td id="tc04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="tc05">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Số triệu chứng khác</td>
                        <td id="tc06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="tc07">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt</td>
                        <td id="tc08">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="tc09">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td id="tc10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sử dụng chất</td>
                        <td id="tc11">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn E</b></td>
                        <td>&nbsp;</td>
                        <td id="tc12">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="tc14a">&nbsp;</td>
                        <td id="tc14b" title="IF(tc14a=1;'Trầm cảm';'Không trầm cảm')">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab2" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h3>Lo âu do bệnh cơ thể</h3>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Triệu chứng</th>
                    <th>Chỉ số</th>
                    <th>Dấu hiệu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Lo âu </td>
                        <td id="tcb01">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="tcb02">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td id="tcb04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="tcb05">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>RL tâm thần khác</td>
                        <td id="tcb06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="tcb07">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mê sảng</td>
                        <td id="tcb08">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="tcb09">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt</td>
                        <td id="tcb10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn E</b></td>
                        <td>&nbsp;</td>
                        <td id="tcb11">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="tcb12a">&nbsp;</td>
                        <td id="tcb12b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab3" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h3>Lo âu do chất</h3>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Triệu chứng</th>
                    <th>Chỉ số</th>
                    <th>Dấu hiệu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Lo âu </td>
                        <td id="tcc01">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="tcc03">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sử dụng chất</td>
                        <td id="tcc04">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="tcc05">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Loạn tâm thần khác</td>
                        <td id="tcc06">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="tcc07">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mê sảng</td>
                        <td id="tcc08"></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="tcc09">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt</td>
                        <td id="tcc10">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn E</b></td>
                        <td>&nbsp;</td>
                        <td id="tcc11">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="tcc12a">&nbsp;</td>
                        <td id="tcc12b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab4" role="tabpanel" aria-labelledby="v-pills-profile-tab">
            <h3>Rối loạn thích nghi</h3>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Triệu chứng</th>
                    <th>Chỉ số</th>
                    <th>Dấu hiệu</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sang chấn TL</td>
                        <td id="rlt01">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn A</b></td>
                        <td>&nbsp;</td>
                        <td id="rlt02">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Lo âu </td>
                        <td id="rlt03">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt</td>
                        <td id="rlt05">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn B</b></td>
                        <td>&nbsp;</td>
                        <td id="rlt06">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Loạn tâm thần khác</td>
                        <td id="rlt07">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn C</b></td>
                        <td>&nbsp;</td>
                        <td id="rlt08">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Có tang</td>
                        <td id="rlt09">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn D</b></td>
                        <td>&nbsp;</td>
                        <td id="rlt10">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Diễn tiến</td>
                        <td id="rlt11">&nbsp;</td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td><b>Tiêu chuẩn E</b></td>
                        <td>&nbsp;</td>
                        <td id="rlt12">&nbsp;</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Chẩn đoán</td>
                        <td id="rlt13a">&nbsp;</td>
                        <td id="rlt13b">&nbsp;</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection