@extends('layouts.main')
@section('content')
<div class="container-wraper">

    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcTC() {
            document.getElementById('tc01a').innerHTML = kc[19];
            document.getElementById('tc01b').innerHTML = (kc[19] >= 14 ? 1 : 0);
            document.getElementById('tc02a').innerHTML = kc[9] + kc[10];
            document.getElementById('tc02b').innerHTML = (kc[9] + kc[10] >= 1 ? 1 : 0);
            var n = kc[3] + kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11];
            document.getElementById('tc03a').innerHTML = n;
            document.getElementById('tc03b').innerHTML = (n >= 5 ? 1 : 0);
            n = parseInt(document.getElementById('tc01b').innerHTML) + parseInt(document.getElementById('tc02b').innerHTML) + parseInt(document.getElementById('tc03b').innerHTML);
            document.getElementById('tc04').innerHTML = (n == 3 ? 1 : 0);
            n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById('tc05').innerHTML = n;
            document.getElementById('tc06').innerHTML = (n >= 1 ? 1 : 0);
            document.getElementById('tc07').innerHTML = kc[14];
            document.getElementById('tc08').innerHTML = kc[15];
            n = kc[14] + kc[15];
            document.getElementById('tc09').innerHTML = (n == 0 ? 1 : 0);
            document.getElementById('tc10').innerHTML = kc[16];
            document.getElementById('tc11').innerHTML = (kc[16] == 0 ? 1 : 0);
            document.getElementById('tc12').innerHTML = kc[17];
            document.getElementById('tc13').innerHTML = (kc[17] == 0 ? 1 : 0);
            n = parseInt(document.getElementById('tc04').innerHTML) + parseInt(document.getElementById('tc06').innerHTML) + parseInt(document.getElementById('tc09').innerHTML) + parseInt(document.getElementById('tc11').innerHTML) + parseInt(document.getElementById('tc13').innerHTML);
            document.getElementById('tc14a').innerHTML = (n == 5 ? 1 : 0);
            document.getElementById('tc14b').innerHTML = (n == 5 ? "Trầm cảm" : "Không trầm cảm");
        }

        function recalcTCB() {
            var n = (kc[9] + kc[10]) >= 1 ? 1 : 0;
            document.getElementById("tcb01").innerHTML = n;
            var m = (kc[3] + kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11]) >= 5 ? 1 : 0;
            document.getElementById("tcb02").innerHTML = m;
            document.getElementById("tcb03").innerHTML = (n + m == 2 ? 1 : 0);
            document.getElementById("tcb04").innerHTML = kc[14];
            document.getElementById("tcb05").innerHTML = kc[14];
            n = parseInt(document.getElementById("tc14a").innerHTML);
            document.getElementById("tcb06").innerHTML = n;
            n = parseInt(document.getElementById("tcb06").innerHTML);
            document.getElementById("tcb07").innerHTML = (n == 0 ? 1 : 0);
            document.getElementById("tcb08").innerHTML = kc[21];
            if (document.getElementById("kc22").checked)
                document.getElementById('tcb09').innerHTML = 0;
            else
                document.getElementById('tcb09').innerHTML = 1;
            n = kc[3] + kc[5] + kc[12] + kc[14];
            document.getElementById("tcb10").innerHTML = n;
            document.getElementById("tcb11").innerHTML = (n > 0 ? 1 : 0);
            n = parseInt(document.getElementById("tcb03").innerHTML) + parseInt(document.getElementById("tcb05").innerHTML) + parseInt(document.getElementById("tcb07").innerHTML) + parseInt(document.getElementById("tcb09").innerHTML) + parseInt(document.getElementById("tcb11").innerHTML);
            n = n == 5 ? 1 : 0;
            document.getElementById("tcb12a").innerHTML = n;
            document.getElementById("tcb12b").innerHTML = (n == 1 ? "Trầm cảm thực thể" : "Không TC thực thể");
        }

        function recalcTCC() {
            var n = kc[9] + kc[10] >= 1 ? 1 : 0;
            document.getElementById("tcc01").innerHTML = n;
            var m = (kc[3] + kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11]) >= 5 ? 1 : 0;
            document.getElementById("tcc02").innerHTML = m;
            document.getElementById("tcc03").innerHTML = (m + n == 2 ? 1 : 0);
            document.getElementById("tcc04").innerHTML = kc[15];
            document.getElementById("tcc05").innerHTML = kc[15];
            n = parseInt(document.getElementById("tc14a").innerHTML);
            document.getElementById("tcc06").innerHTML = n;
            document.getElementById("tcc07").innerHTML = (n == 0 ? 1 : 0);
            document.getElementById("tcc08").innerHTML = kc[21];
            if (document.getElementById("kc22").checked)
                document.getElementById('tcc09').innerHTML = 0;
            else
                document.getElementById('tcc09').innerHTML = 1;
            n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById("tcc10").innerHTML = n;
            document.getElementById("tcc11").innerHTML = (n > 0 ? 1 : 0);
            n = parseInt(document.getElementById("tcc03").innerHTML) + parseInt(document.getElementById("tcc05").innerHTML) + parseInt(document.getElementById("tcc07").innerHTML) + parseInt(document.getElementById("tcc09").innerHTML) + parseInt(document.getElementById("tcc11").innerHTML);
            n = (n == 5 ? 1 : 0);
            document.getElementById("tcc12a").innerHTML = n;
            document.getElementById("tcc12b").innerHTML = (n == 1 ? "Trầm cảm do chất" : "Không TC do chất");
        }

        function recalcRLT() {
            var n = kc[18];
            document.getElementById("rlt01").innerHTML = n;
            document.getElementById("rlt02").innerHTML = n;
            n = kc[9] + kc[10] >= 1 ? 1 : 0;
            document.getElementById("rlt03").innerHTML = n;
            n = (kc[3] + kc[4] + kc[5] + kc[6] + kc[7] + kc[8] + kc[9] + kc[10] + kc[11]) >= 5 ? 1 : 0;
            document.getElementById("rlt04").innerHTML = n;
            n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById("rlt05").innerHTML = n;
            document.getElementById("rlt06").innerHTML = (n >= 1 ? 1 : 0);
            n = parseInt(document.getElementById("tc14a").innerHTML);
            document.getElementById("rlt07").innerHTML = n;
            document.getElementById("rlt08").innerHTML = (n == 0 ? 1 : 0);
            var n = kc[22]
            document.getElementById("rlt09").innerHTML = n;
            document.getElementById("rlt10").innerHTML = (n == 0 ? 1 : 0);
            var n = kc[23]
            document.getElementById("rlt11").innerHTML = n;
            document.getElementById("rlt12").innerHTML = (n == 0 ? 0 : 1);
            n = (parseInt(document.getElementById("rlt02").innerHTML) + parseInt(document.getElementById("rlt06").innerHTML) + parseInt(document.getElementById("rlt08").innerHTML) + parseInt(document.getElementById("rlt10").innerHTML) + parseInt(document.getElementById("rlt12").innerHTML)) == 5 ? 1 : 0;
            document.getElementById("rlt13a").innerHTML = n;
            document.getElementById("rlt13b").innerHTML = (n == 1 ? "RL Thích nghi" : "Không RL Thích nghi");

        }

        function recalcHC() {
            document.getElementById("hc01").innerHTML = kc[17];
            document.getElementById("hc02").innerHTML = kc[17];
            var n = kc[3] + kc[5] + kc[12] + kc[13];
            document.getElementById("hc03").innerHTML = n;
            document.getElementById("hc04").innerHTML = (n >= 1 ? 1 : 0);
            document.getElementById("hc05").innerHTML = kc[14];
            document.getElementById("hc06").innerHTML = kc[15];
            document.getElementById("hc07").innerHTML = (kc[14] + kc[15] >= 1 ? 0 : 1);
            n = (parseInt(document.getElementById("hc02").innerHTML) + parseInt(document.getElementById("hc04").innerHTML) + parseInt(document.getElementById("hc07").innerHTML)) == 3 ? 1 : 0;
            document.getElementById("hc08a").innerHTML = n;
            document.getElementById("hc08b").innerHTML = (n == 1 ? "Hưng cảm" : "Không hưng cảm");
        }

        function chandoan() {
            if (parseInt(document.getElementById("hc08a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Hưng cảm";
            } else
            if (parseInt(document.getElementById("tcb12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "TC Thực thể";
            } else
            if (parseInt(document.getElementById("tcc12a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "TC Do chất";
            } else
            if (parseInt(document.getElementById("rlt13a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "RL Thích nghi";
            } else
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Trầm cảm";
            } else {
                document.getElementById("kc21").innerHTML = "Không trầm cảm";
            }
        }

        function recalc() {
            recalcTC();
            recalcTCB();
            recalcTCC();
            recalcRLT();
            recalcHC();
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

    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Khám Chẩn Đoán</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Kết quả đã chẩn đoán</button>
                </li>
            </ul>
        </div>
    </div>

    <!---/////------------check-----------/////------->

    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('tram-cam.update', $model->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5>
                        Thông tin
                        <!-- <hr width=" 10%"> -->
                    </h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="cust_name" class="form-label">Họ và tên : </label>
                            <input type="text" name="cust_name" value="{{$model->cust_name}}" class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="cust_gender" class="form-label">Giới tính : </label>
                            <input type="text" name="cust_gender" value="{{$model->cust_gender}}" class="form-control-sm" id="cust_gender" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="doB" class="form-label">Năm sinh : </label>
                            <input type="text" value="{{$model->cust_dob}}" name="cust_dob" class="form-control-sm" placeholder="">

                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="phone" class="form-label">SĐT : </label>
                            <input type="number" value="{{$model->phone}}" name="phone" placeholder="Số điện thoại..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email : </label>
                            <input type="email" value="{{$model->cust_email}}" name="cust_email" placeholder="Điền email..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="address" class="form-label">Địa chỉ : </label>
                            <input type="text" placeholder="Địa chỉ..." value="{{$model->cust_address}}" name="cust_address" class="form-control-sm">
                        </div>
                    </div>
                </div>

                <div class="mt-1">
                    <h5>Triệu chứng</h5>
                    <!-- <hr width="10%"> -->
                </div>

                <!--------Form Checkbox--------->

                <div class="row ml-1">
                    <div class="col-md-2">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="buon" id="kc10" type="checkbox" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'buon') !== false)
                            checked
                            @endif>
                            <label for="symptom">Buồn</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="nguit" id="kc04" type="checkbox" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'nguit') !== false)
                            checked
                            @endif>
                            <label for="symptom">Ngủ ít</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="anit" id="kc06" type="checkbox" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'anit') !== false)
                            checked
                            @endif>
                            <label for="symptom">Ăn ít</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="tutu" id="kc12" type="checkbox" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'tutu') !== false)
                            checked
                            @endif>
                            <label for="symptom">Tự tử</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="metmoi" id="kc05" type="checkbox" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'metmoi') !== false)
                            checked
                            @endif>
                            <label for="symptom">Mệt mỏi</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-3">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="matthichthu" id="kc11" type="checkbox" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'matthichthu') !== false)
                            checked
                            @endif>
                            <label for="symptom">Mất thích thú</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="hayquen" id="kc07" type="checkbox" onchange="chkChange('07');" @if (strpos($model->symptom[0], 'hayquen') !== false)
                            checked
                            @endif>
                            <label for="symptom">Hay quên</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="lamviecchamchap" id="kc08" type="checkbox" onchange="chkChange('08');" @if (strpos($model->symptom[0], 'lamviecchamchap') !== false)
                            checked
                            @endif>
                            <label for="symptom">Làm việc chậm chạp</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="ytuongbiquan" id="kc09" type="checkbox" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'ytuongbiquan') !== false)
                            checked
                            @endif>
                            <label for="symptom">Ý tưởng bi quan</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="mesang" id="kc22" type="checkbox" onchange="chkChange('22');" @if (strpos($model->symptom[0], 'mesang') !== false)
                            checked
                            @endif>
                            <label for="symptom">Mê sảng</label>
                        </div>

                    </div>


                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="colucnaovuivequamuc" id="kc18" type="checkbox" onchange="chkChange('18');" @if (strpos($model->symptom[0], 'colucnaovuivequamuc') !== false)
                            checked
                            @endif>
                            <label for="symptom">Có lúc nào vui vẻ quá mức</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="sangchantamly" id="kc19" type="checkbox" onchange="chkChange('19');" @if (strpos($model->symptom[0], 'sangchantamly') !== false)
                            checked
                            @endif>
                            <label for="symptom">Sang chấn tâm lý</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="quanhetronggiadinh" id="kc13" type="checkbox" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'quanhetronggiadinh') !== false)
                            checked
                            @endif>
                            <label for="symptom">Quan hệ trong gia đình</label>
                        </div>

                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="dienbientheotramcam" id="kc24" type="checkbox" onchange="chkChange('24');" @if (strpos($model->symptom[0], 'dienbientheotramcam') !== false)
                            checked
                            @endif>
                            <label for="symptom">Diễn biến theo trầm cảm</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="6thang" id="kc25" type="checkbox" onchange="chkChange('25');" @if (strpos($model->symptom[0], '6thang') !== false)
                            checked
                            @endif>
                            <label for="symptom">6 tháng</label>
                        </div>
                    </div>

                    <!---------Collum-4 ------------>
                    <div class="col-md-4">
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="cotang" id="kc23" type="checkbox" onchange="chkChange('23');" @if (strpos($model->symptom[0], 'cotang') !== false)
                            checked
                            @endif>
                            <label for="symptom">Có tang</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="lamviec" id="kc14" type="checkbox" onchange="chkChange('14');" @if (strpos($model->symptom[0], 'lamviec') !== false)
                            checked
                            @endif>
                            <label for="symptom">Làm việc</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="cobenhcothe" id="kc15" type="checkbox" onchange="chkChange('15');" @if (strpos($model->symptom[0], 'cobenhcothe') !== false)
                            checked
                            @endif>
                            <label for="symptom">Có bệnh cơ thể</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="cdtdtbtgn" id="kc16" type="checkbox" onchange="chkChange('16');" @if (strpos($model->symptom[0], 'cdtdtbtgn') !== false)
                            checked
                            @endif>
                            <label for="symptom">Có dùng thuốc điều trị bệnh, thuốc gây nghiện</label>
                        </div>
                        <div class="mb-0 form-check">
                            <input class="form-check-input" name="symptom[]" value="cyncngntn" id="kc17" type="checkbox" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'cyncngntn') !== false)
                            checked
                            @endif>
                            <label for="symptom">Có ý nghĩ có người hại, nghe tiếng nói</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <label class="form-label-w" for="time_sym">Thời gian cơn <br> (tính theo ngày)</label>
                            <input class="form-control-sm" name="time_sym" id="kc20" value="{{$model->time_sym}}" onblur="txtBlur('20');" width="10">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label-w" for="">Chẩn đoán: </label>
                            <textarea style="margin-top:20px; color:blue;font-weight: bold" name="result" class="form-control-sm" id="kc21" cols="30" rows="1">{{$model->result}}</textarea>
                            <!-- <h5>Chẩn đoán: <span id="kc21" style="color:blue;"></span></h5> -->
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="card-title">
                        <h3>Đơn thuốc</h3>
                    </div>
                    <?php
                    $imgPath = asset('assets/img/minus.svg');
                    $imgAdd = asset('assets/img/addition.png');
                    ?>
                    <input type="hidden" id="imgPath" value="<?= $imgPath ?>">
                    <input type="hidden" id="imgAdd" width="25px" value="<?= $imgAdd ?>">
                    <!-- =============== Form thêm đơn thuốc ============ -->
                    <div class="table-responsive">
                        <table id="autocomplete_table" class="table table-hover autocomplete_table">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Tên thuốc</th>
                                    <th>Loại thuốc</th>
                                    <th>Số lượng</th>
                                    <th>Liều lượng</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($pres as $pre)
                                <tr id="row_1">
                                    <th id="delete_1" scope="row" class="delete_row"><img src="<?= $imgPath; ?>" alt=""></th>
                                    <td>
                                        <input type="text" data-field-name="name" name="Name[]" id="medicineName" class="form-control autocomplete_txt" placeholder="Tên thuốc" autocomplete="off" value="{{old('Name', $pre->Name)}}">
                                        <div id="search-ajax">
                                        </div>
                                    </td>
                                    <td>
                                        <select data-field-name="type" name="Type[]" id="type_" class="form-control autocomplete_txt" autocomplete="off" value="{{old('type')}}">
                                            <option value="{{old('Type', $pre->Type)}}" @if ($pre->Type) selected
                                                @endif>{{$pre->Type}}</option>
                                        </select>
                                        <!-- <input type="text" data-field-name="type" name="Type[]" id="type_" class="form-control autocomplete_txt" placeholder="Loại thuốc" autocomplete="off" value="{{old('type')}}"> -->
                                    </td>
                                    <td>
                                        <input type="number" min="0" max="10" data-field-name="amount" name="Amount[]" id="amount_code_" class="form-control autocomplete_txt" placeholder="Số lượng" autocomplete="off" value="{{old('Amount', $pre->Amount)}}">
                                    </td>
                                    <td>
                                        <input type="text" data-field-name="treatment" name="Treatment[]" id="treament_code_" class="form-control autocomplete_txt" placeholder="Liều lượng(viên)" autocomplete="off" value="{{old('Treatment', $pre->Treatment)}}">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <button id="addNew" type="button" class='btn'><img src="<?= $imgAdd; ?>" width="25px" alt=""></button>
                        <button type="submit" class="btn btn-success" id="submitBtn">Lưu</button>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function() {
                $('#medicineName').keyup(function() {
                    var data = $(this).val();
                    var fieldName, currentEle;
                    currentEle = $(this);
                    fieldName = currentEle.data('field-name');

                    if (typeof fieldName === 'undefined') {
                        return false;
                    }
                    if (data != '') {
                        var _token = $('input[name="_token"]').val();
                        $.ajax({
                            url: "{{route('autocomplete')}}",
                            method: 'POST',
                            data: {
                                data: data,
                                fieldName: fieldName,
                                _token: _token
                            },
                            success: function(data) {
                                let medicine = JSON.parse(data);
                                let output = '<ul class="dropdown-menu" style="display:block; position:relative;">';

                                let content = '';
                                $.each(medicine, function(index, value) {
                                    // console.log(index, value);
                                    //search-ajax
                                    output += '<li><a href="#" class="ml-2" style="color:black; font-weight: bold">' + value.Name + ' </a></li>';

                                    //content
                                    // content += "<h3>Name: " + value.Name + "; Type: " + value.Type + "</h3>";
                                });
                                output += "</ul>";

                                $('#search-ajax').fadeIn();
                                $('#search-ajax').html(output);
                                $('#content').html(content);
                            }
                        })
                    } else {
                        $('#search-ajax').fadeOut();
                    }
                });

                $(document).on('click', 'li', function(ui, event) {
                    console.log(ui.item);
                    $('#medicineName').val($(this).text());
                    $('#type_').val($(this).text());
                    $('#amount_code_').val($(this).text());
                    $('#treament_code_').val($(this).text());
                    $('#search-ajax').fadeOut();
                    // return false;
                });

            });
        </script>
        <script src="//code.jquery.com/jquery-3.1.0.min.js"></script>
        <script src="{{asset('js/multi.js')}}"></script>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
        <button class="btn btn-primary"> <i class="fas fa-long-arrow-alt-left"></i> Trở lại </button>
    </div>
    </form>
</div>
</div>
</div>
@endsection