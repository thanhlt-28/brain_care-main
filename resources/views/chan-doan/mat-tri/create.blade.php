@extends('layouts.main')
@section('content')
<div class="container-wraper">
    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcMT1() {
            var n = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('tc03b').innerHTML = n;
            document.getElementById('tc04').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('tc05').innerHTML = kc[10];
            document.getElementById('tc06').innerHTML = (kc[10] == 1 ? 0 : 1);
            document.getElementById('tc07').innerHTML = kc[16];
            document.getElementById('tc09').innerHTML = (kc[16] == 0 ? 0 : 1);
            document.getElementById('tc10').innerHTML = kc[18];
            document.getElementById('tc11').innerHTML = (kc[18] == 0 ? 0 : 1);
            n = parseInt(document.getElementById('tc04').innerHTML) + parseInt(document.getElementById('tc06').innerHTML) + parseInt(document.getElementById('tc09').innerHTML) + parseInt(document.getElementById('tc11').innerHTML);
            document.getElementById('tc14a').innerHTML = (n == 4 ? 1 : 0);
            document.getElementById('tc14b').innerHTML = (n == 4 ? "Mất trí nhẹ" : "Không mất trí nhẹ");
        }

        function recalcMT2() {
            var n = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('tcb02').innerHTML = n;
            document.getElementById('tcb03').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById("tcb04").innerHTML = kc[10];
            document.getElementById("tcb05").innerHTML = (kc[10] == 0 ? 0 : 1);
            document.getElementById('tcb06').innerHTML = kc[16];
            document.getElementById('tcb07').innerHTML = (kc[16] == 0 ? 0 : 1);
            document.getElementById('tcb08').innerHTML = kc[18];
            document.getElementById('tcb09').innerHTML = (kc[18] == 0 ? 0 : 1);
            n = parseInt(document.getElementById("tcb03").innerHTML) + parseInt(document.getElementById("tcb05").innerHTML) + parseInt(document.getElementById("tcb07").innerHTML) + parseInt(document.getElementById("tcb09").innerHTML);
            n = n == 4 ? 1 : 0;
            document.getElementById("tcb12a").innerHTML = n;
            document.getElementById("tcb12b").innerHTML = (n == 1 ? "Mất trí nặng" : "Không mất trí nặng");
        }

        function recalcAlz1() {
            document.getElementById("tcc01").innerHTML = kc[5];
            var n = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('tcc02').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('tcc03').innerHTML = (kc[16] == 0 ? 0 : 1);
            document.getElementById('tcc04').innerHTML = (kc[18] == 0 ? 0 : 1);
            document.getElementById('tcc13').innerHTML = (kc[10] == 0 ? 1 : 0);
            n = parseInt(document.getElementById('tcc01').innerHTML) + parseInt(document.getElementById('tcc02').innerHTML) + parseInt(document.getElementById('tcc03').innerHTML) + parseInt(document.getElementById('tcc04').innerHTML) + parseInt(document.getElementById('tcc13').innerHTML);
            document.getElementById('tcc05').innerHTML = (n == 5 ? 1 : 0);

            document.getElementById("tcc06").innerHTML = kc[17];
            document.getElementById("tcc07").innerHTML = (kc[17] == 0 ? 0 : 1);
            document.getElementById("tcc08").innerHTML = kc[13];
            document.getElementById("tcc09").innerHTML = (kc[13] == 0 ? 1 : 0);
            n = kc[14] + kc[15];
            document.getElementById("tcc10").innerHTML = n;
            document.getElementById("tcc11").innerHTML = (n > 0 ? 0 : 1);
            n = parseInt(document.getElementById("tcc05").innerHTML) + parseInt(document.getElementById("tcc07").innerHTML) + parseInt(document.getElementById("tcc09").innerHTML) + parseInt(document.getElementById("tcc11").innerHTML);
            n = (n == 4 ? 1 : 0);
            document.getElementById("tcc12a").innerHTML = n;
            document.getElementById("tcc12b").innerHTML = (n == 1 ? "Alzheimer nhẹ" : "Không Alzheimer nhẹ");
        }

        function recalcAlz2() {
            document.getElementById("rlt01").innerHTML = kc[5];
            var n = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('rlt02').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('rlt03').innerHTML = (kc[16] == 0 ? 0 : 1);
            document.getElementById('rlt04').innerHTML = (kc[18] == 0 ? 0 : 1);
            document.getElementById('rlt13').innerHTML = (kc[10] == 0 ? 0 : 1);
            n = parseInt(document.getElementById('rlt01').innerHTML) + parseInt(document.getElementById('rlt02').innerHTML) + parseInt(document.getElementById('rlt03').innerHTML) + parseInt(document.getElementById('rlt04').innerHTML) + parseInt(document.getElementById('rlt13').innerHTML);
            document.getElementById('rlt05').innerHTML = (n == 5 ? 1 : 0);
            document.getElementById("rlt06").innerHTML = kc[17];
            document.getElementById("rlt07").innerHTML = (kc[17] == 0 ? 0 : 1);
            document.getElementById("rlt08").innerHTML = kc[13];
            document.getElementById("rlt09").innerHTML = (kc[13] == 0 ? 1 : 0);
            n = kc[13] + kc[14] + kc[15];
            document.getElementById("rlt10").innerHTML = n;
            document.getElementById("rlt11").innerHTML = (n > 0 ? 0 : 1);
            n = parseInt(document.getElementById("rlt05").innerHTML) + parseInt(document.getElementById("rlt07").innerHTML) + parseInt(document.getElementById("rlt09").innerHTML) + parseInt(document.getElementById("rlt11").innerHTML);
            n = (n == 4 ? 1 : 0);
            document.getElementById("rlt12a").innerHTML = n;
            document.getElementById("rlt12b").innerHTML = (n == 1 ? "Alzheimer nặng" : "Không Alzheimer nặng");


        }

        function recalcMtP() {
            var n = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('hc02').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('hc03').innerHTML = (kc[16] == 0 ? 0 : 1);
            n = parseInt(document.getElementById('hc02').innerHTML) + parseInt(document.getElementById('hc03').innerHTML);
            document.getElementById('hc05').innerHTML = (n == 2 ? 1 : 0);
            document.getElementById("hc06").innerHTML = kc[11];
            document.getElementById("hc07").innerHTML = (kc[11] == 0 ? 0 : 1);
            document.getElementById("hc09").innerHTML = kc[17];
            document.getElementById("hc10").innerHTML = (kc[17] == 0 ? 0 : 1);
            document.getElementById("hc11").innerHTML = kc[14];
            document.getElementById("hc12").innerHTML = kc[15];
            document.getElementById("hc13").innerHTML = (kc[18] == 0 ? 1 : 0);
            n = parseInt(document.getElementById("hc11").innerHTML) + parseInt(document.getElementById("hc12").innerHTML) + parseInt(document.getElementById("hc13").innerHTML);
            n = (n == 0 ? 1 : 0);
            document.getElementById("hc14").innerHTML = n;
            n = parseInt(document.getElementById("hc05").innerHTML) + parseInt(document.getElementById("hc07").innerHTML) + parseInt(document.getElementById("hc10").innerHTML) + parseInt(document.getElementById("hc14").innerHTML);
            n = (n == 4 ? 1 : 0);
            document.getElementById("hc08a").innerHTML = n;
            document.getElementById("hc08b").innerHTML = (n == 1 ? "MT do Parkinson" : "Không mất trí do Parkinson");

        }

        function recalcMm() {
            var n = kc[3] + kc[4] + kc[5] + kc[6];
            document.getElementById('mm02').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('mm03').innerHTML = (kc[16] == 0 ? 0 : 1);
            n = parseInt(document.getElementById('mm02').innerHTML) + parseInt(document.getElementById('mm03').innerHTML);
            document.getElementById('mm05').innerHTML = (n == 2 ? 1 : 0);
            document.getElementById("mm06").innerHTML = kc[12];
            document.getElementById("mm07").innerHTML = (kc[12] == 0 ? 0 : 1);
            document.getElementById("mm11").innerHTML = kc[14];
            document.getElementById("mm14").innerHTML = (kc[14] == 1 ? 0 : 1);
            n = parseInt(document.getElementById("mm05").innerHTML) + parseInt(document.getElementById("mm07").innerHTML) + parseInt(document.getElementById("mm14").innerHTML);
            n = (n == 3 ? 1 : 0);
            document.getElementById("mm08a").innerHTML = n;
            document.getElementById("mm08b").innerHTML = (n == 1 ? "MT do mạch máu" : "Không mất trí do mạch máu");

        }

        function chandoan() {
            if (parseInt(document.getElementById("mm08a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Mất trí do mạch máu";
            } else
            if (parseInt(document.getElementById("hc08a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Mất trí Parkinson";
            } else
            if (parseInt(document.getElementById("tcc12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Alzheimer nhẹ";
            } else

            if (parseInt(document.getElementById("rlt12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Alzheimer nặng";
            } else
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Mất trí nhẹ";
            } else
            if (parseInt(document.getElementById("tcb12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Mất trí nặng";
            } else {
                document.getElementById("kc21").innerHTML = "Không mất trí";
            }
        }

        function recalc() {
            recalcMT1();
            recalcMT2();
            recalcAlz1();
            recalcAlz2();
            recalcMtP();
            recalcMm();
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
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Chẩn đoán mất trí</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">Mất trí nhẹ</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="home" aria-selected="true">Mất trí nặng</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#tab3" type="button" role="tab" aria-controls="profile" aria-selected="false">Alzheimer nhẹ</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab4" type="button" role="tab" aria-controls="contact" aria-selected="false">Alzheimer nặng</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab5" type="button" role="tab" aria-controls="contact" aria-selected="false">Mất trí do Parkinson</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab6" type="button" role="tab" aria-controls="contact" aria-selected="false">Mất trí do mạch máu</button>
                </li>
            </ul>
        </div>
    </div>

    @php
    $index=1
    @endphp
    <div class="tab-content" id="myTabContent">
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
                <div class="container-form">
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd02" type="checkbox" onchange="chkChange('02');">
                                            <label for="">Alzheimer nhẹ</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd03" type="checkbox" onchange="chkChange('03');">
                                            <label for="">Alzheimer nặng</label>
                                        </div>
                                        <div class=" form-check">
                                            <input class="form-check-input" id="kd04" type="checkbox" onchange="chkChange('04');">
                                            <label for="">Ngủ ít</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!---------Collum-2 ------------>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd05" type="checkbox" onchange="chkChange('05');">
                                            <label for="">Tình cảm</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd06" type="checkbox" onchange="chkChange('06');">
                                            <label for="">Loạn thần</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd11" type="checkbox" onchange="chkChange('11');">
                                            <label for="">Tim mạch</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!---------Collum-2 ------------>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd08" type="checkbox" onchange="chkChange('08');">
                                            <label for="">2 đồ vật đơn giản</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd15" type="checkbox" onchange="chkChange('15');">
                                            <label for="">Gọi tên 3 đồ vật</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd12" type="checkbox" onchange="chkChange('12');">
                                            <label for="">Đái tháo đường</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /////////////////////////// -->
                        <div class="col">
                            <div class="row">
                                <div class="col-md-4">
                                    <!---------Collum-3 ------------>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd09" type="checkbox" onchange="chkChange('09');">
                                            <label for="">Huyết áp thấp</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd10" type="checkbox" onchange="chkChange('10');">
                                            <label for="">Huyết áp cao</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd13" type="checkbox" onchange="chkChange('13');">
                                            <label for="">Parkinson</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <!---------Collum-4 ------------>
                                    <div class="col-md-12">
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd17" type="checkbox" onchange="chkChange('17');">
                                            <label for="">Béo phì</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd07" type="checkbox" onchange="chkChange('07');">
                                            <label for="">Đánh vần ngược</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" id="kd16" type="checkbox" onchange="chkChange('16');">
                                            <label for="">Vẽ hình,gấp giấy, viết một câu</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="col-md-2">
                                        <label for="" class="form-label-dt">TĐT : </label>
                                        <input class="form-control-smt" value="" id="kd22" type="text" width="10">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row ml-1">
                    <div class="col-md-2">
                        <div class="mb-0">
                            <label for="" class="form-label-dt">Số triệu chứng : </label>
                            <input name="" class="form-control-smt" id="kd20" type="text" onblur="txtBlur('21');">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-0">
                            <label class="form-label-dt" for="">Thuyên giảm</label>
                            <input class="form-control-smt" id="kd21" type="text" onblur="txtBlur('22');" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-0">
                            <label class="form-label-dt" for="">Memantine</label>
                            <input class="form-control-smt" id="kd23" type="text" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-0">
                            <label class="form-label-dt" for="">Chống co giật</label>
                            <input class="form-control-smt" id="kd18" type="text" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-0">
                            <label class="form-label-dt" for="">Chống trầm cảm</label>
                            <input class="form-control-smt" id="kd24" type="text" width="10">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="mb-0">
                            <label class="form-label-dt" for="">Chống loạn thần</label>
                            <input class="form-control-smt" id="kd25" type="text" width="10">
                        </div>
                    </div>
                </div>
                <div class="d-grid mt-2 gap-2 d-md-flex justify-content-md-center">
                    <button class="btn btn-primary" type="submit"> Lưu lại</button>
                </div>
            </form>
        </div>
        <div class="tab-pane fade ml-5" id="tab1" role="tabpanel" aria-labelledby="home-tab">
            <h3>Lâm sàng</h3>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Thuốc</th>
                        <th>Nhóm</th>
                        <th>Alzheimer nhẹ</th>
                        <th>Alzheimer nặng</th>
                        <th>Ngủ ít</th>
                        <th>Tình cảm</th>
                        <th>Loạn thần</th>
                        <th>Lâm sàng</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Khám bệnh</td>
                        <td style="text-align:center;"><b></b></td>
                        <td id="kb1">0
                        <td id="kb2">0
                        <td id="kb3">0
                        <td id="kb4">0
                        <td id="kb5">0
                        <td id="kb5">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Donepezil</td>
                        <td style="text-align:center;"><b>TDT</b></td>
                        <td id="0111">0
                        <td id="0112">0
                        <td id="0113">0
                        <td id="0114">0</td>
                        <td id="0115">0
                        <td id="0116">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Rivastigmine</td>
                        <td style="text-align:center;"><b>TĐT</b></td>
                        <td id="0211">0
                        <td id="0212">0
                        <td id="0213">0
                        <td id="0214">0</td>
                        <td id="0215">0
                        <td id="0216">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Galantamine</td>
                        <td style="text-align:center;"><b>TĐT</b></td>
                        <td id="0311">0
                        <td id="0312">0
                        <td id="0313">0
                        <td id="0314">0</td>
                        <td id="0315">0
                        <td id="0316">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>memantine</td>
                        <td style="text-align:center;"><b>TĐT</b></td>
                        <td id="0411">0
                        <td id="0412">0
                        <td id="0413">0
                        <td id="0414">0</td>
                        <td id="0415">0
                        <td id="0416">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Olanzapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0511">0
                        <td id="0512">0
                        <td id="0513">0
                        <td id="0514">0</td>
                        <td id="0515">0
                        <td id="0516">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Rispéridone</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0611">0
                        <td id="0612">0
                        <td id="0613">0
                        <td id="0614">0</td>
                        <td id="0615">0
                        <td id="0616">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>valproat</td>
                        <td style="text-align:center;"><b>CCG</b></td>
                        <td id="0711">0
                        <td id="0712">0
                        <td id="0713">0
                        <td id="0714">0</td>
                        <td id="0715">0
                        <td id="0716">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SSRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0811">0
                        <td id="0812">0
                        <td id="0813">0
                        <td id="0814">0</td>
                        <td id="0815">0
                        <td id="0816">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab2" role="tabpanel" aria-labelledby="profile-tab">
            <h3>Bệnh cơ thể</h3>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Thuốc</th>
                        <th>Nhóm</th>
                        <th style="text-align:center;" colspan="6">Dấu hiệu</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="3" style="text-align:center;"></td>
                        <td style="text-align:center;"><b>Huyết áp thấp</b></td>
                        <td style="text-align:center;"><b>Huyết áp cao</b></td>
                        <td style="text-align:center;"><b>Tim</b></td>
                        <td style="text-align:center;"><b>Đái tháo đường</b></td>
                        <td style="text-align:center;"><b>Parkinson</b></td>
                        <td style="text-align:center;"><b>Bệnh</b></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Bệnh cơ thể</td>
                        <td style="text-align:center;"><b></b></td>
                        <td id="ct1">0</td>
                        <td id="ct2">0</td>
                        <td id="ct3">0</td>
                        <td id="ct4">0</td>
                        <td id="ct5">0</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SSRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0121">0
                        <td id="0122">0
                        <td id="0123">0
                        <td id="0124">0
                        <td id="0125">0
                        <td id="0127">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SNRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0221">0
                        <td id="0222">0
                        <td id="0223">0
                        <td id="0224">0
                        <td id="0225">0
                        <td id="0227">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>TCA</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0321">0
                        <td id="0322">0
                        <td id="0323">0
                        <td id="0324">0
                        <td id="0325">0
                        <td id="0327">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mirtazapine</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0421">0
                        <td id="0422">0
                        <td id="0423">0
                        <td id="0424">0
                        <td id="0425">0
                        <td id="0427">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Olanzapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0521">0
                        <td id="0522">0
                        <td id="0523">0
                        <td id="0524">0
                        <td id="0525">0
                        <td id="0527">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Quetiapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0621">0
                        <td id="0622">0
                        <td id="0623">0
                        <td id="0624">0
                        <td id="0625">0
                        <td id="0627">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Risperidone</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0721">0
                        <td id="0722">0
                        <td id="0723">0
                        <td id="0724">0
                        <td id="0725">0
                        <td id="0727">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Valproat</td>
                        <td style="text-align:center;"><b>CCG</b></td>
                        <td id="0821">0
                        <td id="0822">0
                        <td id="0823">0
                        <td id="0824">0
                        <td id="0825">0
                        <td id="0827">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab3" role="tabpanel" aria-labelledby="contact-tab">
            <h3>Đặc điểm</h3>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Thuốc</th>
                        <th>Nhóm</th>
                        <th>Béo phì</th>
                        <th>Sinh hoạt</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Sinh hoạt</td>
                        <td style="text-align:center;"><b></b></td>
                        <td id="sh1">0</td>
                        <td id="sh2">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Donepezil</td>
                        <td style="text-align:center;"><b>TĐT</b></td>
                        <td id="0131">0
                        <td id="0135">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Rivastigmine</td>
                        <td style="text-align:center;"><b>TĐT</b></td>
                        <td id="0231">0
                        <td id="0235">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Galantamine</td>
                        <td style="text-align:center;"><b>TĐT</b></td>
                        <td id="0331">0
                        <td id="0335">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>memantine</td>
                        <td style="text-align:center;"><b>TĐT</b></td>
                        <td id="0431">0
                        <td id="0435">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Olanzapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0531">0
                        <td id="0535">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Risperidone</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="0631">0
                        <td id="0635">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Valproat</td>
                        <td style="text-align:center;"><b>CCG</b></td>
                        <td id="0731">0
                        <td id="0735">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SSRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="0831">0
                        <td id="0835">0</td>
                    </tr>
            </table>
        </div>
        <div class="tab-pane fade ml-5" id="tab4" role="tabpanel" aria-labelledby="contact-tab">
            <h3>Tổng hợp</h3>
            <table class="table table-bordered border-primary" id="tt" border="1">
                <thead>
                    <th>STT</th>
                    <th>Thuốc</th>
                    <th>Nhóm</th>
                    <th>Lâm sàng</th>
                    <th>Bệnh</th>
                    <th>Sinh hoạt</th>
                    <th>X nhóm</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Đ Trục</td>
                        <td style="text-align:center;"><b></b></td>
                        <td id="sh1">0
                        <td id="sh2">0
                        <td id="sh3">0</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SSRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="x0116">0
                        <td id="x0127">0
                        <td id="x0135">0</td>
                        <td id="x0141">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>SNRI</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="x0216">0
                        <td id="x0227">0
                        <td id="x0235">0</td>
                        <td id="x0241">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>TCA</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="x0316">0
                        <td id="x0327">0
                        <td id="x0335">0</td>
                        <td id="x0341">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Mirtazapine</td>
                        <td style="text-align:center;"><b>CTC</b></td>
                        <td id="x0416">0
                        <td id="x0427">0
                        <td id="x0435">0</td>
                        <td id="x0441">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Olanzapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="x0516">0
                        <td id="x0527">0
                        <td id="x0535">0</td>
                        <td id="x0541">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Quetiapine</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="x0616">0
                        <td id="x0627">0
                        <td id="x0635">0</td>
                        <td id="x0641">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Risperidone</td>
                        <td style="text-align:center;"><b>CLT</b></td>
                        <td id="x0716">0
                        <td id="x0727">0
                        <td id="x0735">0</td>
                        <td id="x0741">0</td>
                    </tr>
                    <tr>
                        <td>{{$index++}}</td>
                        <td>Valproat</td>
                        <td style="text-align:center;"><b>CCG</b></td>
                        <td id="x0816">0
                        <td id="x0827">0
                        <td id="x0835">0</td>
                        <td id="x0841">0</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection