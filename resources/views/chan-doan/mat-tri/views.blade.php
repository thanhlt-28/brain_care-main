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
            document.getElementById('tc14b').innerHTML = (n == 2 ? "U???ng r?????u c?? h???i" : "K u???ng r?????u c?? h???i");
        }

        function chandoan() {
            if (parseInt(document.getElementById("tc14a").innerHTML) == 1) {
                document.getElementById("kc21").innerHTML = "U???ng r?????u c?? h???i";
            } else {
                document.getElementById("kc21").innerHTML = "Kh??ng u???ng r?????u c?? h???i";
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
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home" data-bs-toggle="tab" data-bs-target="#tab1" type="button" role="tab" aria-controls="home" aria-selected="true">K???t qu??? ch???n ??o??n</button>
                </li>
            </ul>
        </div>
    </div>

    @php
    $index=1
    @endphp
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="home-tab">
            <div class="col-md-12 mt-2">
                <div class="card-title mx-auto">
                    <h4>Th??ng tin ch???n ??o??n</h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="table-light">
                            <tr>
                                <th>H??? t??n</th>
                                <th>S??? ??i???n tho???i</th>
                                <th>Email</th>
                                <th>N??m sinh</th>
                                <th>?????a ch???</th>
                                <th>K???t qu???</th>
                                <th>
                                    <a href="{{ route('mat-tri.create') }}" class="btn btn-success">Th??m ch???n ??o??n m???i</a>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($cust as $item)
                            <tr>
                                <td>{{ $item->cust_name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->cust_email }}</td>
                                <td>{{ $item->cust_dob }}</td>
                                <td>{{ $item->cust_address }}</td>
                                <td>{{ $item->result }}</td>
                                <td>
                                    <a class="btn btn-info" href="{{route('mat-tri.index', $item->id)}}">Xem chi ti???t</a>
                                    <a class="btn btn-warning" href="{{route('mat-tri.destroy', ['id' => $item->id])}}">X??a</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection