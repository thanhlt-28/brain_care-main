@extends('layouts.main')
@section('content')

<div class="container-wraper">
    <script type="text/javascript">
        var kd = ["", 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

        function recalcHS() {

        }

        function recalc() {
            recalcHS();
        }

        function xulythuoc() {
            document.getElementById('0111').innerHTML = (kd[01] == 0 ? 0 : 1);
            document.getElementById('kb1').innerHTML = (kd[01] == 0 ? 0 : 1);
            document.getElementById('0112').innerHTML = (kd[02] == 0 ? 0 : 1);
            document.getElementById('kb2').innerHTML = (kd[02] == 0 ? 0 : 1);
            document.getElementById('0113').innerHTML = (kd[03] == 0 ? 0 : 2);
            document.getElementById('kb3').innerHTML = (kd[03] == 0 ? 0 : 1);
            document.getElementById('0114').innerHTML = (kd[04] == 0 ? 0 : 2);
            document.getElementById('kb4').innerHTML = (kd[04] == 0 ? 0 : 1);
            document.getElementById('0115').innerHTML = (kd[05] == 0 ? 0 : 2);
            document.getElementById('kb5').innerHTML = (kd[05] == 0 ? 0 : 1);
            var k0111 = parseInt(document.getElementById('0111').innerHTML);
            var k0112 = parseInt(document.getElementById('0112').innerHTML);
            var k0113 = parseInt(document.getElementById('0113').innerHTML);
            var k0114 = parseInt(document.getElementById('0114').innerHTML);
            var k0115 = parseInt(document.getElementById('0115').innerHTML);
            document.getElementById('0116').innerHTML = Math.max(k0111, k0112, k0113, k0114, k0115);

            document.getElementById('0211').innerHTML = (kd[01] == 0 ? 0 : 1);
            document.getElementById('0212').innerHTML = (kd[02] == 0 ? 0 : 1);
            document.getElementById('0213').innerHTML = (kd[03] == 0 ? 0 : 3);
            document.getElementById('0214').innerHTML = (kd[04] == 0 ? 0 : 3);
            document.getElementById('0215').innerHTML = (kd[05] == 0 ? 0 : 4);
            var k0211 = parseInt(document.getElementById('0211').innerHTML);
            var k0212 = parseInt(document.getElementById('0212').innerHTML);
            var k0213 = parseInt(document.getElementById('0213').innerHTML);
            var k0214 = parseInt(document.getElementById('0214').innerHTML);
            var k0215 = parseInt(document.getElementById('0215').innerHTML);
            document.getElementById('0216').innerHTML = Math.max(k0211, k0212, k0213, k0214, k0215);

            document.getElementById('0311').innerHTML = (kd[01] == 0 ? 0 : 3);
            document.getElementById('0312').innerHTML = (kd[02] == 0 ? 0 : 1);
            document.getElementById('0313').innerHTML = (kd[03] == 0 ? 0 : 3);
            document.getElementById('0314').innerHTML = (kd[04] == 0 ? 0 : 4);
            document.getElementById('0315').innerHTML = (kd[05] == 0 ? 0 : 4);
            var k0311 = parseInt(document.getElementById('0311').innerHTML);
            var k0312 = parseInt(document.getElementById('0312').innerHTML);
            var k0313 = parseInt(document.getElementById('0313').innerHTML);
            var k0314 = parseInt(document.getElementById('0314').innerHTML);
            var k0315 = parseInt(document.getElementById('0315').innerHTML);
            document.getElementById('0316').innerHTML = Math.max(k0311, k0312, k0313, k0314, k0315);

            document.getElementById('0411').innerHTML = (kd[01] == 0 ? 0 : 3);
            document.getElementById('0412').innerHTML = (kd[02] == 0 ? 0 : 1);
            document.getElementById('0413').innerHTML = (kd[03] == 0 ? 0 : 2);
            document.getElementById('0414').innerHTML = (kd[04] == 0 ? 0 : 2);
            document.getElementById('0415').innerHTML = (kd[05] == 0 ? 0 : 2);
            var k0411 = parseInt(document.getElementById('0411').innerHTML);
            var k0412 = parseInt(document.getElementById('0412').innerHTML);
            var k0413 = parseInt(document.getElementById('0413').innerHTML);
            var k0414 = parseInt(document.getElementById('0414').innerHTML);
            var k0415 = parseInt(document.getElementById('0415').innerHTML);
            document.getElementById('0416').innerHTML = Math.max(k0411, k0412, k0413, k0414, k0415);

            document.getElementById('0511').innerHTML = (kd[01] == 0 ? 0 : 3);
            document.getElementById('0512').innerHTML = (kd[02] == 0 ? 0 : 3);
            document.getElementById('0513').innerHTML = (kd[03] == 0 ? 0 : 2);
            document.getElementById('0514').innerHTML = (kd[04] == 0 ? 0 : 3);
            document.getElementById('0515').innerHTML = (kd[05] == 0 ? 0 : 1);
            var k0511 = parseInt(document.getElementById('0511').innerHTML);
            var k0512 = parseInt(document.getElementById('0512').innerHTML);
            var k0513 = parseInt(document.getElementById('0513').innerHTML);
            var k0514 = parseInt(document.getElementById('0514').innerHTML);
            var k0515 = parseInt(document.getElementById('0515').innerHTML);
            document.getElementById('0516').innerHTML = Math.max(k0511, k0512, k0513, k0514, k0515);

            document.getElementById('0611').innerHTML = (kd[01] == 0 ? 0 : 4);
            document.getElementById('0612').innerHTML = (kd[02] == 0 ? 0 : 4);
            document.getElementById('0613').innerHTML = (kd[03] == 0 ? 0 : 3);
            document.getElementById('0614').innerHTML = (kd[04] == 0 ? 0 : 3);
            document.getElementById('0615').innerHTML = (kd[05] == 0 ? 0 : 1);
            var k0611 = parseInt(document.getElementById('0611').innerHTML);
            var k0612 = parseInt(document.getElementById('0612').innerHTML);
            var k0613 = parseInt(document.getElementById('0613').innerHTML);
            var k0614 = parseInt(document.getElementById('0614').innerHTML);
            var k0615 = parseInt(document.getElementById('0615').innerHTML);
            document.getElementById('0616').innerHTML = Math.max(k0611, k0612, k0613, k0614, k0615);

            document.getElementById('0711').innerHTML = (kd[01] == 0 ? 0 : 4);
            document.getElementById('0712').innerHTML = (kd[02] == 0 ? 0 : 4);
            document.getElementById('0713').innerHTML = (kd[03] == 0 ? 0 : 2);
            document.getElementById('0714').innerHTML = (kd[04] == 0 ? 0 : 1);
            document.getElementById('0715').innerHTML = (kd[05] == 0 ? 0 : 2);
            var k0711 = parseInt(document.getElementById('0711').innerHTML);
            var k0712 = parseInt(document.getElementById('0712').innerHTML);
            var k0713 = parseInt(document.getElementById('0713').innerHTML);
            var k0714 = parseInt(document.getElementById('0714').innerHTML);
            var k0715 = parseInt(document.getElementById('0715').innerHTML);
            document.getElementById('0716').innerHTML = Math.max(k0711, k0712, k0713, k0714, k0715);

            document.getElementById('0811').innerHTML = (kd[01] == 0 ? 0 : 4);
            document.getElementById('0812').innerHTML = (kd[02] == 0 ? 0 : 4);
            document.getElementById('0813').innerHTML = (kd[03] == 0 ? 0 : 2);
            document.getElementById('0814').innerHTML = (kd[04] == 0 ? 0 : 1);
            document.getElementById('0815').innerHTML = (kd[05] == 0 ? 0 : 2);
            var k0811 = parseInt(document.getElementById('0811').innerHTML);
            var k0812 = parseInt(document.getElementById('0812').innerHTML);
            var k0813 = parseInt(document.getElementById('0813').innerHTML);
            var k0814 = parseInt(document.getElementById('0814').innerHTML);
            var k0815 = parseInt(document.getElementById('0815').innerHTML);
            document.getElementById('0816').innerHTML = Math.max(k0811, k0812, k0813, k0814, k0815);

            document.getElementById('0121').innerHTML = (kd[08] == 0 ? 0 : 3);
            document.getElementById('ct1').innerHTML = (kd[08] == 0 ? 0 : 1);
            document.getElementById('0122').innerHTML = (kd[09] == 0 ? 0 : 3);
            document.getElementById('ct2').innerHTML = (kd[09] == 0 ? 0 : 1);
            document.getElementById('0123').innerHTML = (kd[10] == 0 ? 0 : 4);
            document.getElementById('ct3').innerHTML = (kd[10] == 0 ? 0 : 1);
            document.getElementById('0124').innerHTML = (kd[11] == 0 ? 0 : 3);
            document.getElementById('ct4').innerHTML = (kd[11] == 0 ? 0 : 1);
            document.getElementById('0125').innerHTML = (kd[12] == 0 ? 0 : 5);
            document.getElementById('ct5').innerHTML = (kd[12] == 0 ? 0 : 1);
            var k0121 = parseInt(document.getElementById('0121').innerHTML);
            var k0122 = parseInt(document.getElementById('0122').innerHTML);
            var k0123 = parseInt(document.getElementById('0123').innerHTML);
            var k0124 = parseInt(document.getElementById('0124').innerHTML);
            var k0125 = parseInt(document.getElementById('0125').innerHTML);
            document.getElementById('0127').innerHTML = Math.max(k0121, k0122, k0123, k0124, k0125);

            document.getElementById('0221').innerHTML = (kd[08] == 0 ? 0 : 3);
            document.getElementById('0222').innerHTML = (kd[09] == 0 ? 0 : 3);
            document.getElementById('0223').innerHTML = (kd[10] == 0 ? 0 : 3);
            document.getElementById('0224').innerHTML = (kd[11] == 0 ? 0 : 3);
            document.getElementById('0225').innerHTML = (kd[12] == 0 ? 0 : 3);
            var k0221 = parseInt(document.getElementById('0221').innerHTML);
            var k0222 = parseInt(document.getElementById('0222').innerHTML);
            var k0223 = parseInt(document.getElementById('0223').innerHTML);
            var k0224 = parseInt(document.getElementById('0224').innerHTML);
            var k0225 = parseInt(document.getElementById('0225').innerHTML);
            document.getElementById('0227').innerHTML = Math.max(k0221, k0222, k0223, k0224, k0225);

            document.getElementById('0321').innerHTML = (kd[08] == 0 ? 0 : 4);
            document.getElementById('0322').innerHTML = (kd[09] == 0 ? 0 : 3);
            document.getElementById('0323').innerHTML = (kd[10] == 0 ? 0 : 3);
            document.getElementById('0324').innerHTML = (kd[11] == 0 ? 0 : 3);
            document.getElementById('0325').innerHTML = (kd[12] == 0 ? 0 : 5);
            var k0321 = parseInt(document.getElementById('0321').innerHTML);
            var k0322 = parseInt(document.getElementById('0322').innerHTML);
            var k0323 = parseInt(document.getElementById('0323').innerHTML);
            var k0324 = parseInt(document.getElementById('0324').innerHTML);
            var k0325 = parseInt(document.getElementById('0325').innerHTML);
            document.getElementById('0327').innerHTML = Math.max(k0321, k0322, k0323, k0324, k0325);

            document.getElementById('0421').innerHTML = (kd[08] == 0 ? 0 : 3);
            document.getElementById('0422').innerHTML = (kd[09] == 0 ? 0 : 3);
            document.getElementById('0423').innerHTML = (kd[10] == 0 ? 0 : 3);
            document.getElementById('0424').innerHTML = (kd[11] == 0 ? 0 : 3);
            document.getElementById('0425').innerHTML = (kd[12] == 0 ? 0 : 4);
            var k0421 = parseInt(document.getElementById('0421').innerHTML);
            var k0422 = parseInt(document.getElementById('0422').innerHTML);
            var k0423 = parseInt(document.getElementById('0423').innerHTML);
            var k0424 = parseInt(document.getElementById('0424').innerHTML);
            var k0425 = parseInt(document.getElementById('0425').innerHTML);
            document.getElementById('0427').innerHTML = Math.max(k0421, k0422, k0423, k0424, k0425);

            document.getElementById('0521').innerHTML = (kd[08] == 0 ? 0 : 3);
            document.getElementById('0522').innerHTML = (kd[09] == 0 ? 0 : 3);
            document.getElementById('0523').innerHTML = (kd[10] == 0 ? 0 : 3);
            document.getElementById('0524').innerHTML = (kd[11] == 0 ? 0 : 3);
            document.getElementById('0525').innerHTML = (kd[12] == 0 ? 0 : 4);
            var k0521 = parseInt(document.getElementById('0521').innerHTML);
            var k0522 = parseInt(document.getElementById('0522').innerHTML);
            var k0523 = parseInt(document.getElementById('0523').innerHTML);
            var k0524 = parseInt(document.getElementById('0524').innerHTML);
            var k0525 = parseInt(document.getElementById('0525').innerHTML);
            document.getElementById('0527').innerHTML = Math.max(k0521, k0522, k0523, k0524, k0525);

            document.getElementById('0621').innerHTML = (kd[08] == 0 ? 0 : 3);
            document.getElementById('0622').innerHTML = (kd[09] == 0 ? 0 : 4);
            document.getElementById('0623').innerHTML = (kd[10] == 0 ? 0 : 5);
            document.getElementById('0624').innerHTML = (kd[11] == 0 ? 0 : 4);
            document.getElementById('0625').innerHTML = (kd[12] == 0 ? 0 : 3);
            var k0621 = parseInt(document.getElementById('0621').innerHTML);
            var k0622 = parseInt(document.getElementById('0622').innerHTML);
            var k0623 = parseInt(document.getElementById('0623').innerHTML);
            var k0624 = parseInt(document.getElementById('0624').innerHTML);
            var k0625 = parseInt(document.getElementById('0625').innerHTML);
            document.getElementById('0627').innerHTML = Math.max(k0621, k0622, k0623, k0624, k0625);

            document.getElementById('0721').innerHTML = (kd[08] == 0 ? 0 : 3);
            document.getElementById('0722').innerHTML = (kd[09] == 0 ? 0 : 3);
            document.getElementById('0723').innerHTML = (kd[10] == 0 ? 0 : 4);
            document.getElementById('0724').innerHTML = (kd[11] == 0 ? 0 : 5);
            document.getElementById('0725').innerHTML = (kd[12] == 0 ? 0 : 3);
            var k0721 = parseInt(document.getElementById('0721').innerHTML);
            var k0722 = parseInt(document.getElementById('0722').innerHTML);
            var k0723 = parseInt(document.getElementById('0723').innerHTML);
            var k0724 = parseInt(document.getElementById('0724').innerHTML);
            var k0725 = parseInt(document.getElementById('0725').innerHTML);
            document.getElementById('0727').innerHTML = Math.max(k0721, k0722, k0723, k0724, k0725);

            document.getElementById('0821').innerHTML = (kd[08] == 0 ? 0 : 4);
            document.getElementById('0822').innerHTML = (kd[09] == 0 ? 0 : 3);
            document.getElementById('0823').innerHTML = (kd[10] == 0 ? 0 : 3);
            document.getElementById('0824').innerHTML = (kd[11] == 0 ? 0 : 4);
            document.getElementById('0825').innerHTML = (kd[12] == 0 ? 0 : 4);
            var k0821 = parseInt(document.getElementById('0821').innerHTML);
            var k0822 = parseInt(document.getElementById('0822').innerHTML);
            var k0823 = parseInt(document.getElementById('0823').innerHTML);
            var k0824 = parseInt(document.getElementById('0824').innerHTML);
            var k0825 = parseInt(document.getElementById('0825').innerHTML);
            document.getElementById('0827').innerHTML = Math.max(k0821, k0822, k0823, k0824, k0825);

            document.getElementById('0131').innerHTML = (kd[16] == 0 ? 0 : 3);
            document.getElementById('sh1').innerHTML = (kd[16] == 0 ? 0 : 1);
            document.getElementById('0132').innerHTML = (kd[17] == 0 ? 0 : 3);
            document.getElementById('sh2').innerHTML = (kd[17] == 0 ? 0 : 1);
            document.getElementById('0133').innerHTML = (kd[18] == 0 ? 0 : 3);
            document.getElementById('sh3').innerHTML = (kd[18] == 0 ? 0 : 1);
            var k0131 = parseInt(document.getElementById('0131').innerHTML);
            var k0132 = parseInt(document.getElementById('0132').innerHTML);
            var k0133 = parseInt(document.getElementById('0133').innerHTML);
            document.getElementById('0135').innerHTML = Math.max(k0131, k0132, k0133);

            document.getElementById('0231').innerHTML = (kd[16] == 0 ? 0 : 3);
            document.getElementById('0232').innerHTML = (kd[17] == 0 ? 0 : 3);
            document.getElementById('0233').innerHTML = (kd[18] == 0 ? 0 : 4);
            var k0231 = parseInt(document.getElementById('0231').innerHTML);
            var k0232 = parseInt(document.getElementById('0232').innerHTML);
            var k0233 = parseInt(document.getElementById('0233').innerHTML);
            document.getElementById('0235').innerHTML = Math.max(k0231, k0232, k0233);

            document.getElementById('0331').innerHTML = (kd[16] == 0 ? 0 : 3);
            document.getElementById('0332').innerHTML = (kd[17] == 0 ? 0 : 3);
            document.getElementById('0333').innerHTML = (kd[18] == 0 ? 0 : 5);
            var k0331 = parseInt(document.getElementById('0331').innerHTML);
            var k0332 = parseInt(document.getElementById('0332').innerHTML);
            var k0333 = parseInt(document.getElementById('0333').innerHTML);
            document.getElementById('0335').innerHTML = Math.max(k0331, k0332, k0333);

            document.getElementById('0431').innerHTML = (kd[16] == 0 ? 0 : 4);
            document.getElementById('0432').innerHTML = (kd[17] == 0 ? 0 : 3);
            document.getElementById('0433').innerHTML = (kd[18] == 0 ? 0 : 5);
            var k0431 = parseInt(document.getElementById('0431').innerHTML);
            var k0432 = parseInt(document.getElementById('0432').innerHTML);
            var k0433 = parseInt(document.getElementById('0433').innerHTML);
            document.getElementById('0435').innerHTML = Math.max(k0431, k0432, k0433);

            document.getElementById('0531').innerHTML = (kd[16] == 0 ? 0 : 3);
            document.getElementById('0532').innerHTML = (kd[17] == 0 ? 0 : 4);
            document.getElementById('0533').innerHTML = (kd[18] == 0 ? 0 : 5);
            var k0531 = parseInt(document.getElementById('0531').innerHTML);
            var k0532 = parseInt(document.getElementById('0532').innerHTML);
            var k0533 = parseInt(document.getElementById('0533').innerHTML);
            document.getElementById('0535').innerHTML = Math.max(k0531, k0532, k0533);

            document.getElementById('0631').innerHTML = (kd[16] == 0 ? 0 : 5);
            document.getElementById('0632').innerHTML = (kd[17] == 0 ? 0 : 3);
            document.getElementById('0633').innerHTML = (kd[18] == 0 ? 0 : 5);
            var k0631 = parseInt(document.getElementById('0631').innerHTML);
            var k0632 = parseInt(document.getElementById('0632').innerHTML);
            var k0633 = parseInt(document.getElementById('0633').innerHTML);
            document.getElementById('0635').innerHTML = Math.max(k0631, k0632, k0633);

            document.getElementById('0731').innerHTML = (kd[16] == 0 ? 0 : 5);
            document.getElementById('0732').innerHTML = (kd[17] == 0 ? 0 : 3);
            document.getElementById('0733').innerHTML = (kd[18] == 0 ? 0 : 3);
            var k0731 = parseInt(document.getElementById('0731').innerHTML);
            var k0732 = parseInt(document.getElementById('0732').innerHTML);
            var k0733 = parseInt(document.getElementById('0733').innerHTML);
            document.getElementById('0735').innerHTML = Math.max(k0731, k0732, k0733);

            document.getElementById('0831').innerHTML = (kd[16] == 0 ? 0 : 4);
            document.getElementById('0832').innerHTML = (kd[17] == 0 ? 0 : 3);
            document.getElementById('0833').innerHTML = (kd[18] == 0 ? 0 : 4);
            var k0831 = parseInt(document.getElementById('0831').innerHTML);
            var k0832 = parseInt(document.getElementById('0832').innerHTML);
            var k0833 = parseInt(document.getElementById('0833').innerHTML);
            document.getElementById('0835').innerHTML = Math.max(k0831, k0832, k0833);

            document.getElementById('x0116').innerHTML = document.getElementById('0116').innerHTML;
            document.getElementById('x0127').innerHTML = document.getElementById('0127').innerHTML;
            document.getElementById('x0135').innerHTML = document.getElementById('0135').innerHTML;
            var x0116 = parseInt(document.getElementById('0116').innerHTML);
            var x0127 = parseInt(document.getElementById('0127').innerHTML);
            var x0135 = parseInt(document.getElementById('0135').innerHTML);
            document.getElementById('x0141').innerHTML = Math.max(x0116, x0127, x0135);

            document.getElementById('x0216').innerHTML = document.getElementById('0216').innerHTML;
            document.getElementById('x0227').innerHTML = document.getElementById('0227').innerHTML;
            document.getElementById('x0235').innerHTML = document.getElementById('0235').innerHTML;
            var x0216 = parseInt(document.getElementById('0216').innerHTML);
            var x0227 = parseInt(document.getElementById('0227').innerHTML);
            var x0235 = parseInt(document.getElementById('0235').innerHTML);
            document.getElementById('x0241').innerHTML = Math.max(x0216, x0227, x0235);

            document.getElementById('x0316').innerHTML = document.getElementById('0316').innerHTML;
            document.getElementById('x0327').innerHTML = document.getElementById('0327').innerHTML;
            document.getElementById('x0335').innerHTML = document.getElementById('0335').innerHTML;
            var x0316 = parseInt(document.getElementById('0316').innerHTML);
            var x0327 = parseInt(document.getElementById('0327').innerHTML);
            var x0335 = parseInt(document.getElementById('0335').innerHTML);
            document.getElementById('x0341').innerHTML = Math.max(x0316, x0327, x0335);

            document.getElementById('x0416').innerHTML = document.getElementById('0416').innerHTML;
            document.getElementById('x0427').innerHTML = document.getElementById('0427').innerHTML;
            document.getElementById('x0435').innerHTML = document.getElementById('0435').innerHTML;
            var x0416 = parseInt(document.getElementById('0415').innerHTML);
            var x0427 = parseInt(document.getElementById('0427').innerHTML);
            var x0435 = parseInt(document.getElementById('0435').innerHTML);
            document.getElementById('x0441').innerHTML = Math.max(x0416, x0427, x0435);

            document.getElementById('x0516').innerHTML = document.getElementById('0516').innerHTML;
            document.getElementById('x0527').innerHTML = document.getElementById('0527').innerHTML;
            document.getElementById('x0535').innerHTML = document.getElementById('0535').innerHTML;
            var x0516 = parseInt(document.getElementById('0516').innerHTML);
            var x0527 = parseInt(document.getElementById('0527').innerHTML);
            var x0535 = parseInt(document.getElementById('0535').innerHTML);
            document.getElementById('x0541').innerHTML = Math.max(x0516, x0527, x0535);

            document.getElementById('x0616').innerHTML = document.getElementById('0616').innerHTML;
            document.getElementById('x0627').innerHTML = document.getElementById('0627').innerHTML;
            document.getElementById('x0635').innerHTML = document.getElementById('0635').innerHTML;
            var x0616 = parseInt(document.getElementById('0616').innerHTML);
            var x0627 = parseInt(document.getElementById('0627').innerHTML);
            var x0635 = parseInt(document.getElementById('0635').innerHTML);
            document.getElementById('x0641').innerHTML = Math.max(x0616, x0627, x0635);

            document.getElementById('x0716').innerHTML = document.getElementById('0716').innerHTML;
            document.getElementById('x0727').innerHTML = document.getElementById('0727').innerHTML;
            document.getElementById('x0735').innerHTML = document.getElementById('0735').innerHTML;
            var x0716 = parseInt(document.getElementById('0716').innerHTML);
            var x0727 = parseInt(document.getElementById('0727').innerHTML);
            var x0735 = parseInt(document.getElementById('0735').innerHTML);
            document.getElementById('x0741').innerHTML = Math.max(x0716, x0727, x0735);

            document.getElementById('x0816').innerHTML = document.getElementById('0816').innerHTML;
            document.getElementById('x0827').innerHTML = document.getElementById('0827').innerHTML;
            document.getElementById('x0835').innerHTML = document.getElementById('0835').innerHTML;
            var x0816 = parseInt(document.getElementById('0816').innerHTML);
            var x0827 = parseInt(document.getElementById('0827').innerHTML);
            var x0835 = parseInt(document.getElementById('0835').innerHTML);
            document.getElementById('x0841').innerHTML = Math.max(x0816, x0827, x0835);

            var n = kd[01] + kd[02]
            if (n >= 1) {
                document.getElementById('kd23').value = 1;
            } else {
                document.getElementById('kd23').value = 0;
            }

            document.getElementById('kd24').value = kd[04];
            document.getElementById('kd25').value = kd[05];

        }

        function chkChange(chkid) {
            var n, chkobj = document.getElementById('kd' + chkid);
            kd[chkid - 1] = chkobj.checked ? 1 : 0;
            if (chkid > 21 && chkid < 28) recalcTDT(); //not recalcHS, recalcMT
            else recalc();
            xulythuoc();
        }

        function txtBlur(txtid) {
            var txtobj = document.getElementById('kd' + txtid);
            kd[txtid - 1] = txtobj.value;
            recalc();
        }
    </script>

    <div class="container-fluid">
        <div class="card-title mx-auto">
            <h3>K???t qu??? theo d??i </h3>
        </div>
        <div class="content-tabs">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#tab0" type="button" role="tab" aria-controls="home" aria-selected="true">Theo d??i ?????ng kinh</button>
                </li>
            </ul>
        </div>
    </div>

    <div class="tab-content" id="myTabContent">
        @php
        $index=1
        @endphp
        <div class="tab-pane fade show active" id="tab0" role="tabpanel" aria-labelledby="home-tab">
            <form class="mt-3 ml-5 mr-5" action="{{route('dongkinh.updated', $model->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <h5>Th??ng tin
                        <!-- <hr width="10%"> -->
                    </h5>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="treat_name" class="form-label">H??? v?? t??n : </label>
                            <input type="text" name="treat_name" value="{{$model->treat_name}}" class="form-control-sm" placeholder="??i???n h??? t??n..." id="kc01">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="gender" class="form-label">Gi???i t??nh : </label>
                            <input type="text" class="form-control-sm" value="{{$model->treat_gender}}" name="treat_gender" disabled>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="doB" class="form-label">N??m sinh : </label>
                            <input type="text" value="{{$model->treat_dob}}" name="treat_dob" class="form-control-sm" placeholder="N??m sinh...">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="mobile" class="form-label">S??T : </label>
                            <input type="number" value="{{$model->treat_phone}}" name="treat_phone" placeholder="S??? ??i???n tho???i..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email : </label>
                            <input type="email" value="{{$model->treat_email}}" name="treat_email" placeholder="??i???n email..." class="form-control-sm">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="mb-3">
                            <label for="address" class="form-label">?????a ch??? : </label>
                            <input type="text" placeholder="?????a ch???..." value="{{$model->treat_address}}" name="treat_address" class="form-control-sm">
                        </div>
                    </div>
                </div>
                <!----------checkbox------------>
                <div class="mt-1">
                    <h5>Tri???u ch???ng</h5>
                    <!-- <hr width="10%"> -->
                </div>
                <!----------checkbox------------>
                <div class="row ml-5">
                    <!----------collum-1------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd04" type="checkbox" name="symptom[]" value="baolucdk" onchange="chkChange('04');" @if (strpos($model->symptom[0], 'baolucdk') !== false)
                            checked
                            @endif>
                            <label for="">B???o l???c</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd05" type="checkbox" name="symptom[]" value="tcdk" onchange="chkChange('05');" @if (strpos($model->symptom[0], 'tcdk') !== false)
                            checked
                            @endif>
                            <label for="">T??nh c???m</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd06" type="checkbox" name="symptom[]" value="loanthandk" onchange="chkChange('06');" @if (strpos($model->symptom[0], 'loanthandk') !== false)
                            checked
                            @endif>
                            <label for="">Lo???n th???n</label>
                        </div>
                    </div>
                    <!---------Collum-2 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd09" type="checkbox" name="symptom[]" value="hathapdk" onchange="chkChange('09');" @if (strpos($model->symptom[0], 'hathapdk') !== false)
                            checked
                            @endif>
                            <label for="">Huy???t ??p th???p</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd10" type="checkbox" name="symptom[]" value="hacaodk" onchange="chkChange('10');" @if (strpos($model->symptom[0], 'hacaodk') !== false)
                            checked
                            @endif>
                            <label for="">Huy???t ??p cao</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd11" type="checkbox" name="symptom[]" value="tmdk" onchange="chkChange('11');" @if (strpos($model->symptom[0], 'tmdk') !== false)
                            checked
                            @endif>
                            <label for="">Tim m???ch</label>
                        </div>
                    </div>
                    <!---------Collum-3 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd17" type="checkbox" name="symptom[]" value="beophidk" onchange="chkChange('17');" @if (strpos($model->symptom[0], 'beophidk') !== false)
                            checked
                            @endif>
                            <label for="">B??o ph??</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd18" type="checkbox" name="symptom[]" value="tinhducdk" onchange="chkChange('18');" @if (strpos($model->symptom[0], 'tinhducdk') !== false)
                            checked
                            @endif>
                            <label for="">T??nh d???c</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd19" type="checkbox" name="symptom[]" value="thaidk" onchange="chkChange('19');" @if (strpos($model->symptom[0], 'thaidk') !== false)
                            checked
                            @endif>
                            <label for="">Thai</label>
                        </div>
                    </div>
                    <!---------Collum-4 ------------>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" id="kd13" type="checkbox" name="symptom[]" value="parkinson" onchange="chkChange('13');" @if (strpos($model->symptom[0], 'parkinson') !== false)
                            checked
                            @endif>
                            <label for="">Parkinson</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd02" type="checkbox" name="symptom[]" value="cogtp" onchange="chkChange('02');" @if (strpos($model->symptom[0], 'cogtp') !== false)
                            checked
                            @endif>
                            <label for="">Co gi???t t???ng ph???n</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd03" type="checkbox" name="symptom[]" value="cogtt" onchange="chkChange('03');" @if (strpos($model->symptom[0], 'cogtt') !== false)
                            checked
                            @endif>
                            <label for="">Co gi???t to??n th???</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="kd12" type="checkbox" name="symptom[]" value="dtddk" onchange="chkChange('12');" @if (strpos($model->symptom[0], 'dtddk') !== false)
                            checked
                            @endif>
                            <label for="">????i th??o ???????ng</label>
                        </div>
                    </div>
                    <div class="row ml-5">
                        <div class="col-md-3">
                            <div class="">
                                <label for="" class="form-label-dt">S??? tri???u ch???ng : </label>
                                <input type="text" class="form-control-smt" name="sym_time" value="{{$model->sym_time}}" id="kd21" onblur="txtBlur('21');">
                            </div>
                        </div>
                        <!-- <div class="col-md-3">
                            <div class="">
                                <label class="form-label-dt" for="">Thuy??n gi???m</label>
                                <input class="form-control-smt" name="result" value="{{$model->result}}" id="kd22" type="text" onblur="txtBlur('22');" width="10">
                            </div>
                        </div> -->
                        <div class="col-md-3">
                            <div class="">
                                <label class="form-label-dt" for="">Thu???c CTC</label>
                                <input class="form-control-smt" name="medicine_three" value="{{$model->medicine_three}}" id="kd25" type="text" onblur="txtBlur('25');" width="10">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="">
                                <label class="form-label-dt" for="">Thu???c CLT</label>
                                <input class="form-control-smt" name="medicine_once" value="{{$model->medicine_once}}" id="kd23" type="text" onblur="txtBlur('23');" width="10">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="">
                                <label class="form-label-dt" for="">Thu???c CCG</label>
                                <input class="form-control-smt" name="medicine_twice" value="{{$model->medicine_twice}}" id="kd24" type="text" onblur="txtBlur('24');" width="10">
                            </div>
                        </div>
                    </div>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-center mt-3">
                        <button class="btn btn-primary"><i class="fas fa-long-arrow-alt-left"></i> Tr??? l???i</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection