@extends('layouts.main')
@section('content')

<div class="container-wraper">

    <script type="text/javascript">
        var kc = ["", "", "", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, "", 0, 0, 0, 0];

        function recalcTC() {
            document.getElementById('tc01a').innerHTML = kc[3];
            document.getElementById("tc01b").innerHTML = (kc[3] == 1 ? 1 : 0);
            document.getElementById('tc02a').innerHTML = kc[4];
            document.getElementById('tc03a').innerHTML = kc[5];
            document.getElementById('tc04').innerHTML = kc[6];
            document.getElementById('tc05').innerHTML = kc[7];
            document.getElementById('tc06').innerHTML = kc[8];
            document.getElementById('tc07').innerHTML = kc[9];
            document.getElementById('tc08').innerHTML = kc[10];
            document.getElementById('tc09').innerHTML = kc[11];
            document.getElementById('tc10a').innerHTML = kc[12];
            document.getElementById('tc10b').innerHTML = kc[13];

            n = kc[12] + kc[13] >= 1 ? 1 : 0;
            document.getElementById("tc11").innerHTML = n;
            document.getElementById('tc12a').innerHTML = kc[14];
            document.getElementById('tc12b').innerHTML = kc[15];
            n = kc[14] + kc[15] >= 1 ? 1 : 0;
            document.getElementById("tc13").innerHTML = n;
            n = parseInt(document.getElementById('tc02a').innerHTML) + parseInt(document.getElementById('tc03a').innerHTML) + parseInt(document.getElementById('tc04').innerHTML) + parseInt(document.getElementById('tc05').innerHTML) + parseInt(document.getElementById('tc06').innerHTML) + parseInt(document.getElementById('tc07').innerHTML) + parseInt(document.getElementById('tc08').innerHTML) + parseInt(document.getElementById('tc09').innerHTML) + parseInt(document.getElementById('tc11').innerHTML) + parseInt(document.getElementById('tc13').innerHTML);
            document.getElementById('tc15').innerHTML = (n >= 2 ? 1 : 0);
            n = parseInt(document.getElementById('tc01b').innerHTML) + parseInt(document.getElementById('tc15').innerHTML);
            document.getElementById('tc14a').innerHTML = (n >= 2 ? 1 : 0);
            document.getElementById('tc14b').innerHTML = (n == 2 ? "Uống rượu có hại" : "K uống rượu có hại");
        }

        function chandoan() {
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "Uống rượu có hại";
            } else {
                document.getElementById("kc21").innerHTML = "Không uống rượu có hại";
            }
        }

        function recalc() {
            recalcTC();
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

    <!---------------Check---------------->

    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>Nghiện rượu</h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">Chẩn đoán</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#tab2" type="button" role="tab" aria-controls="contact" aria-selected="false">Theo dõi</button>
                </li>
            </ul>
        </div>
    </div>

    @php
    $index=1
    @endphp
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title mx-auto">
                            <h6 class="text-white">Chẩn đoán nghiện rượu</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            @csrf
                            <tr>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Năm sinh</th>
                                <th>Giới tính</th>
                                <th>Các triệu chứng</th>
                                <th>Kết quả</th>
                                <th>
                                    <a href="{{route('nghien-ruou.create')}}" class="btn btn-success">Chẩn đoán mới</a>
                                </th>
                            </tr>
                            @foreach($custom as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ $item->doB }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>
                                    @foreach($item->symptom as $value)
                                    {{$value}},
                                    @endforeach
                                </td>
                                <td>{{ $item->result }}</td>
                                <td>
                                    <a href="" class="btn btn-info">Xem kết quả</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>

                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="v-pills-home-tab">
            <div class="col-md-12 mt-2">
                <div class="card">
                    <div class="card-header bg-info">
                        <div class="card-title mx-auto">
                            <h6 class="text-white">Theo dõi nghiện rượu</h6>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            @csrf
                            <tr>
                                <th>Họ tên</th>
                                <th>Số điện thoại</th>
                                <th>Năm sinh</th>
                                <th>Giới tính</th>
                                <th>Các triệu chứng</th>
                                <th>Kết quả</th>
                                <th>
                                    <a href="" class="btn btn-success">Theo dõi mới</a>
                                </th>
                            </tr>
                            @foreach($custom as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ $item->doB }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>
                                    @foreach($item->symptom as $value)
                                    {{$value}},
                                    @endforeach
                                </td>
                                <td>{{ $item->result }}</td>
                                <td>
                                    <a href="" class="btn btn-info">Xem kết quả</a>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection